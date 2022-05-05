<?php
ob_start();
include 'connect.php';
include 'navbar.php';
include '../common.php';

//Enabling Status Update Query
if (isset($_GET["processEU"])) {
    $param = $_GET["processEU"];
    $all_ids = explode(",", $param);
    foreach ($all_ids as $id) {
        //Update Status
        $query = "UPDATE `personalhealthcard` SET `card_status`='Approve' WHERE `id`='$id'";
        $rs = $conn->query($query);
    }
}

//Disabling Status Update Query
if (isset($_GET["processDU"])) {
    $param = $_GET["processDU"];
    $all_ids = explode(",", $param);
    foreach ($all_ids as $id) {
        //Disabling Status
        $query = "UPDATE `personalhealthcard` SET `card_status`='Disapprove' WHERE `id`='$id'";
        $rs = $conn->query($query);
    }
}

//Fetching and Search Data
$order_query = "SELECT * FROM personalhealthcard ";
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
    $fields = ['author', 'card_status', 'fdate'];
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
        $order_query .= "WHERE " . implode(' AND ', $conditions);
    }
}
$dist_rs = $conn->query($order_query);
?>
<!-- </head> -->
<div class="page-content">
    <div class="main-wrapper" style="padding: none!important;">
        <br><h3>Single Healthcard Details</h3>
        <div class="container-fluid" style="padding-right:0px!important; padding-left:0px!important;">
            <div id="result">
                <div class="formcard" style="background-color: #FFFFFF!important;">
                    <form id="search" enctype="multipart/form-data" name="search" action="" method="get">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <input type="date" id="fdate" placeholder="Date Of Birth" class="form-control" name="fdate" <?php if($fdate) echo "value=".$fdate; ?>>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="date" id="ldate" placeholder="Date Of Birth" class="form-control" name="ldate" <?php if($ldate) echo "value=".$ldate; ?>>
                            </div>
                            <div class="form-group col-md-3">
                                <select name="author" class="form-control">
                                    <option disabled selected>Volunteer</option>
                                    <option value="self" <?php if (in_array('self', $searchFieldsData)) echo "selected"; ?>>Self / Online</option>
                                    <?php
                                    $query = "SELECT * FROM `volunteer`";
                                    $volunteer_rs = $conn->query($query);
                                    if ($volunteer_rs !== false && $volunteer_rs->num_rows > 0) {
                                        while ($row = $volunteer_rs->fetch_assoc()) {
                                            if (in_array($row['id'], $searchFieldsData)) {
                                                echo "<option value='$row[id]' selected>$row[name]</option>";
                                            } else {
                                                echo "<option value='$row[id]'>$row[name]</option>";
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <select name="card_status" class="form-control">
                                    <option value="" disabled selected>Select status</option>
                                    <option value="applied" <?php if (in_array('applied', $searchFieldsData)) echo "selected"; ?>>Applied</option>
                                    <option value="initiated" <?php if (in_array('initiated', $searchFieldsData)) echo "selected"; ?>>Initiated</option>
                                    <option value="approve" <?php if (in_array('approve', $searchFieldsData)) echo "selected"; ?>>Approve</option>
                                    <option value="disapprove" <?php if (in_array('disapprove', $searchFieldsData)) echo "selected"; ?>>Disapprove</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <button class="dt-button buttons-html5 red" type="submit" name="search"><span><i class="fa fa-search"></i>Search</span></button>
                            </div>
                        </div>
                    </form>
                    <table id="example" class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th id="disableSort"><input type="checkbox" id="selectAllCheck"></th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>DOB</th>
                                 <th>Age</th>
                                <th>Gender</th>
                                <th>Address</th>
                                  <th>Date</th>
                                <th>Status</th>
                                <th>Pay ID</th>
                                <th>Payment</th>
                                 <th>Name</th>
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
                                        <td><?php echo $row['mobile']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>
                                         <td><?php echo ageCalculator($row['dob']); ?></td>
                                         
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['address'] . " " . $row['block'] . " " . $row['district'] . " " . $row['state']; ?></td>
                                          <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['card_status']; ?></td>
                                        <td><?php echo $row['order_id']; ?></td>
                                        <td><?php echo $row['order_status']; ?></td>
                                         <td><?php echo $row['name']; ?></td>
                                        <td>
                                            <a target="_blank" href="<?php echo $idlink; ?>">
                                                <button type="button" class="btn btn-info">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </a>
                                        </td>

                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr style="background-color: orange!important;">
                                <th>check</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Address</th>
                                  <th>Date</th>
                                <th>Status</th>
                                <th>Pay ID</th>
                                <th>Payment</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>

                    <script>
                        $(document).ready(function() {
                            $('#example').DataTable({
                                dom: 'Bfrtip',

                                "scrollX": true,
                                buttons: [{
                                        extend: 'copyHtml5',
                                        text: '<i class="fa fa-files-o"></i> Copy',
                                        titleAttr: 'Copy',
                                        className: 'red'

                                    },
                                    {
                                        extend: 'excelHtml5',
                                        text: '<i class="fa fa-file-excel-o"></i> Excel',
                                        titleAttr: 'Excel',
                                        className: 'red',
                                        exportOptions: {
                                            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                                        }
                                    },
                                    {
                                        extend: 'csvHtml5',
                                        text: '<i class="fa fa-file-text-o"></i> CSV',
                                        titleAttr: 'CSV',
                                        className: 'red',
                                        exportOptions: {
                                            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                                        }
                                    },
                                    {
                                        extend: 'pdfHtml5',
                                        text: '<i class="fa fa-file-pdf-o"></i> PDF',
                                        orientation: 'landscape',
                                        titleAttr: 'PDF',
                                        className: 'red',
                                        exportOptions: {
                                            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                                        }
                                    }
                                ]
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. <a href="https://arvisaitsolution.com/" target="_blank">Arogyagramin</a> from Arvisa IT Solutions. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<script>
    $('#fdate').on('input', function(e) {
        $("#ldate").prop('required', true);
    });
    $('#ldate').on('input', function(e) {
        $("#fdate").prop('required', true);
    });
</script>
<!-- page-body-wrapper ends -->
</div>
<?php
ob_end_flush(); ?>