<?php
ob_start();
// session_start();
include 'header.php';
include 'connect.php';
$id = '';
if (isset($_SESSION['ID'])) {
    $id = $_SESSION['ID'];
}
//Fetching All Data
$order_query = "SELECT * FROM `personalhealthcard` WHERE `author`='$id';";
$dist_rs = $conn->query($order_query);

if (isset($_POST["search"])) {
    $fdate = $_POST["fdate"];
    $ldate = $_POST["ldate"];
    header('Location: search-result.php?fdate=' . $fdate . '&ldate=' . $ldate . '&type=' . $personal);
}
?>
<div class="content" id="cardbox">
<div>
    <div class="text-center padding">
        <h2 class="card-heading">Personal Health Card Details <?php echo $id; ?></h2>
    </div>
        <div class="threerow">
            <div id="result">

                <div style="background-color: #FFFFFF!important;">
              
                    <form id="search" enctype="multipart/form-data" name="search" action="" method="post">
                        <div class="row inputrow">
                            <div class="form-group col-md-4">
                                <input type="date" id="in_dob" placeholder="Date Of Birth" class="form-control" name="fdate" required="true">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="date" id="in_dob" placeholder="Date Of Birth" class="form-control" name="ldate" required="true">
                            </div>
                            <div class="form-group col-md-4">
                                <button class="btn btn-outline-info search" type="submit" name="search"><span><i class="fa fa-search"></i>&nbsp;Search</span></button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                    <table id="example" class="table table-bordered" cellspacing="0">
                        <thead>
                            <tr>
                                <th id="disableSort"><input type="checkbox" id="selectAllCheck"></th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Aadhaar</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Pay ID</th>
                                <th>Payment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($dist_rs !== false && $dist_rs->num_rows > 0) {
                                while ($row = $dist_rs->fetch_assoc()) {
                                    $idlink = "details.php?id=" . $row['id'] . "&type=" . "family";
                            ?>
                                    <tr>
                                        <td><input style="margin:auto;" type="checkbox" class="checkSelect" data-id="<?php echo $row['id']; ?>"></td>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['aadhar']; ?></td>
                                        <td><?php echo $row['mobile']; ?></td>
                                        <td><?php echo $row['card_status']; ?></td>
                                        <td><?php echo $row['order_id']; ?></td>
                                        <td><?php echo $row['order_status']; ?></td>
                                        <td>
                                            <a href="<?php echo $idlink; ?>">
                                                <button type="button" class="btn btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                        </td>

                                    </tr>
                            <?php
                                }
                            }else{
                                ?>
                                <tr><td class="text-center" colspan="10">No Data Found</td></tr>
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
                                <th>Status</th>
                                <th>Pay ID</th>
                                <th>Payment</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>

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
                                        className: 'red'

                                    },
                                    {
                                        extend: 'csvHtml5',
                                        text: '<i class="fa fa-file-text-o"></i> CSV',
                                        titleAttr: 'CSV',
                                        className: 'red'
                                    },
                                    {
                                        extend: 'pdfHtml5',
                                        text: '<i class="fa fa-file-pdf-o"></i> PDF',
                                        orientation: 'landscape',
                                        titleAttr: 'PDF',
                                        className: 'red'
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
<?php include 'footer.php';
ob_end_flush(); ?>