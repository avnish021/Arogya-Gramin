<?php

ob_start();

include 'header.php';

?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php

include 'connect.php';

ini_set('display_errors', 1);

$id = '';

if (isset($_SESSION['ID'])) {

    $id = $_SESSION['ID'];
}

//Enabling Status Update Query

if (isset($_GET["processEU"])) {
    $param = $_GET["processEU"];
    $all_ids = explode(",", $param);
    foreach ($all_ids as $id1) {
        //Update Status
        $query = "UPDATE `personalhealthcard` SET `card_status`='Initiated' WHERE `id`='$id1'";
        $rs = $conn->query($query);
    }
}

//Disabling Status Update Query
if (isset($_GET["processDU"])) {
    $param = $_GET["processDU"];
    $all_ids = explode(",", $param);
    foreach ($all_ids as $id1) {
        //Disabling Status
        $query = "UPDATE `personalhealthcard` SET `card_status`='Rejected' WHERE `id`='$id1'";
        $rs = $conn->query($query);
    }
}

//Fetching All Data

$order_query = "SELECT * FROM `personalhealthcard` WHERE `author`='$id' ";
$fdate ='';
$ldate ='';
if(isset($_GET['fdate']) && !empty($_GET['fdate']))
{
    $fdate = $_GET['fdate'];
}
if(isset($_GET['ldate']) && !empty($_GET['ldate']))
{
    $ldate = $_GET['ldate'];
}
$searchFieldsData = [];
if (isset($_GET["search"])) {
    $fields = ['card_status', 'fdate'];
    $conditions = [];
    foreach ($fields as $field) {
        if (isset($_GET[$field]) && $_GET[$field] != '') {
            $searchFieldsData[] = $_GET[$field];
            if ($field == 'fdate') {
                $conditions[] = "`date` BETWEEN '" . $_GET['fdate'] . "' AND '" . $_GET['ldate'] . "'";
            } else {
                $conditions[] = "`$field` = '" . $_GET[$field] . "'";
            }
        }
    }
    if (count($conditions) > 0) {
        $order_query .= "AND " . implode(' AND ', $conditions);
    }
}
$dist_rs = $conn->query($order_query);
?>
<div class="content" id="cardbox">
    <style>
        h3 {

            letter-spacing: 0.1px;

            word-spacing: 10px;

            text-align: center;

        }



        .dt-button.red {

            color: orange;

            background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 100%, rgba(252, 176, 69, 1) 100%);

        }

        th {

            padding: 0;

            font-size: 12px;

            text-transform: uppercase;

        }

        td {

            background-color: #f7efd2;

            padding: 0;

            font-size: 12px;

        }
    </style>
    <div>
        <div class="text-center padding">
            <h2 class="card-heading">Single Healthcard Details </h2>
        </div>
        <div class="threerow">
            <div id="result">
                <div style="background-color: #FFFFFF!important;">
                    <form id="search" enctype="multipart/form-data" name="search" action="" method="GET">
                        <div class="row inputrow">
                            <div class="form-group col-md-3">
                                <input type="date" id="fdate" placeholder="Date Of Birth" class="form-control" name="fdate" <?php if($fdate) echo "value=".$fdate; ?>>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="date" id="ldate" placeholder="Date Of Birth" class="form-control" name="ldate" <?php if($ldate) echo "value=".$ldate; ?>>
                            </div>
                            <div class="form-group col-md-3">
                                <select name="card_status" class="form-control">
                                    <option value="" disabled selected>Select status</option>
                                    <option value="applied" <?php if (in_array('applied', $searchFieldsData)) echo "selected"; ?>>Applied</option>
                                    <option value="initiated" <?php if (in_array('initiated', $searchFieldsData)) echo "selected"; ?>>Initiated</option>
                                    <option value="approve" <?php if (in_array('approve', $searchFieldsData)) echo "selected"; ?>>Approve</option>
                                    <option value="disapprove" <?php if (in_array('disapprove', $searchFieldsData)) echo "selected"; ?>>Disapprove</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <button class="btn btn-outline-info search" type="submit" name="search"><span><i class="fa fa-search"></i>&nbsp;Search</span></button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered" cellspacing="0">
                            <thead>
                                <!-- <div class="d-flex justify-content-end dt-buttons"></div> -->

                                <tr>

                                    <th id="disableSort"><input type="checkbox" id="selectAllCheck"></th>

                                    <th>ID</th>

                                    <th>Name</th>

                                    <th>Email</th>

                                    <th>Aadhaar</th>

                                    <th>Mobile</th>

                                    <th>Date</th>

                                    <th>Status</th>

                                    <th>Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php

                                if ($dist_rs !== false && $dist_rs->num_rows > 0) {

                                    while ($row = $dist_rs->fetch_assoc()) {

                                        $idlink = "details.php?id=" . $row['id'] . "&type=" . "personal";

                                ?>

                                        <tr>

                                            <td><input style="margin:auto;" type="checkbox" class="checkSelect" data-id="<?php echo $row['id']; ?>"></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['aadhar']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['card_status']; ?></td>
                                            <td>
                                                <a target="_blank" href="<?php echo $idlink; ?>">
                                                    <button type="button" class="btn btn-info">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td class="text-center" colspan="10">No Data Found</td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr style="background-color: orange!important;">

                                    <th>✅</th>

                                    <th>ID</th>

                                    <th>Name</th>

                                    <th>Email</th>

                                    <th>Aadhaar</th>

                                    <th>Mobile</th>

                                    <th>Date</th>

                                    <th>Status</th>

                                    <th>Action</th>

                                </tr>

                            </tfoot>

                        </table>





                    </div>



                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

                    <script>
                        $(document).ready(function() {

                            $('#example').DataTable({

                                dom: 'Bfrtip',

                                buttons: [

                                    'print'

                                ]

                            });

                        });
                    </script>



                </div>

            </div>



        </div>



    </div>



</div>
<script>
    $('#fdate').on('input', function(e) {
        $("#ldate").prop('required', true);
    });
    $('#ldate').on('input', function(e) {
        $("#fdate").prop('required', true);
    });
</script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<script src="../assets/user/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>





<?php include 'footer.php';

ob_end_flush(); ?>