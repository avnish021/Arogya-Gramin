<?php 
ob_start();
include 'navbar.php';
$servername = "localhost";
$username = "arogyagr_arogyagramin";
$password = "arogyagramin123";
$dbname = "arogyagr_arogyagramin";

$conn = new mysqli($servername, $username, $password, $dbname);

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

//Fetching All Data
$order_query = "SELECT * FROM personalhealthcard";
$dist_rs = $conn->query($order_query);

if (isset($_POST["search"])) {
    $fdate = $_POST["fdate"];
    $ldate = $_POST["ldate"];
    $status = $_POST["status"];
    $vol = $_POST["volunteer"];
    $type= "personal";
    header('Location: search-result.php?fdate=' . $fdate .'&ldate='. $ldate.'&status='.$status.'&vol='.$vol.'&type='.$type);
}
?>


<!-- </head> -->

<div class="page-content">
    <div class="main-wrapper" style="padding: none!important;">
        <h3>Personal Healthcard Details</h3>
        <div class="container-fluid" style="padding-right:0px!important; padding-left:0px!important;">

            <body>
                <div id="result">

                    <div class="formcard" style="background-color: #FFFFFF!important;">
                        <form id="search" enctype="multipart/form-data" name="search" action="" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="date" id="in_dob" placeholder="Date Of Birth" class="form-control" name="fdate" required="true">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="date" id="in_dob" placeholder="Date Of Birth" class="form-control" name="ldate" required="true">
                                </div>
                                <div class="form-group col-md-3">
                                    <select name="volunteer" class="form-control">
                                        <option>Volunteer</option>
                                        <option value="self">Self / Online</option>
                                        <?php
                                        $query = "SELECT * FROM `volunteer`";
                                        $volunteer_rs = $conn->query($query);
                                        if ($volunteer_rs !== false && $volunteer_rs->num_rows > 0) {
                                            while ($row = $volunteer_rs->fetch_assoc()) {
                                                echo"<option value='$row[id];'>$row[name]</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <select name="status" class="form-control">
                                        <option value="">Select status</option>
                                        <option value="applied">Applied</option>
                                        <option value="initiated">Initiated</option>
                                        <option value="approve">Approve</option>
                                        <option value="disapprove">Disapprove</option>
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
                                    <th>Address</th>
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
                                    $idlink = "details.php?id=" . $row['id']. "&type=" ."personal";
                                ?>
                                        <tr>
                                            <td><input style="margin:auto;" type="checkbox" class="checkSelect" data-id="<?php echo $row['id']; ?>"></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['dob']; ?></td>
                                            <td><?php echo $row['address']." ".$row['block']." ".$row['district']." ".$row['state']; ?></td>
                                            <td><?php echo $row['card_status']; ?></td>
                                            <td><?php echo $row['order_id']; ?></td>
                                            <td><?php echo $row['order_status']; ?></td>
                                            <td>
                                                <a href="<?php echo $idlink; ?>">
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
                                    <th>Address</th>
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

        </body>

        </html>
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
<!-- page-body-wrapper ends -->
</div>
<?php 
ob_end_flush();?>