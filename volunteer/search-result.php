<?php
use function PHPSTORM_META\type;
ob_start();
include 'header.php';
$servername = "localhost";
$username = "arogyagr_arogyagramin";
$password = "arogyagramin123";
$dbname = "arogyagr_arogyagramin";

$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
$id=$_SESSION['ID'];
//Enabling Status Update Query
if (isset($_GET["processEU"])) {
    $param = $_GET["processEU"];
    $all_ids = explode(",", $param);
    foreach ($all_ids as $uid) {
        //Update Status
        $type = $_GET["type"];
        if($type=="family"){
            $query = "UPDATE `familyhealthcard` SET `card_status`='Initiated' WHERE `id`='$uid'";
        }else{
            $query = "UPDATE `personalhealthcard` SET `card_status`='Initiated' WHERE `id`='$uid'";
        }
        
        $rs = $conn->query($query);
    }
}



if (!isset($_GET["fdate"])) {
    header('Location: family-healthcare.php');
}

// $date = date('d-m-Y', $timestamp);
    $fdate = $_GET["fdate"];
    $ldate = $_GET["ldate"];
    $type = $_GET["type"];
    if($type=="family"){
        $order_query = "SELECT * FROM `familyhealthcard` WHERE `date` BETWEEN '$fdate' AND '$ldate' AND `author` = '$id'";
    }else{
        $order_query = "SELECT * FROM `personalhealthcard` WHERE `date` BETWEEN '$fdate' AND '$ldate' AND `author` = '$id'";
    }
   
    
    $dist_rs = $conn->query($order_query);

    


?>

<!-- </head> -->

<div class="page-content">
    <div class="main-wrapper" style="padding: none!important; margin-top:8px;">
        <h3>Search results</h3>
        <div class="container-fluid" style="padding-right:0px!important; padding-left:0px!important;">

            <body>
                <div id="result">
                    <div class="formcard" style="background-color: #FFFFFF!important;">
                    <h6>Showing results: From <?php echo $fdate; ?> to <?php echo $ldate; ?>.</h6>
                        <table id="example" class="table table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th id="disableSort"><input type="checkbox" id="selectAllCheck"></th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Aadhaar</th>
                                    <th>Mobile</th>
                                    <th>Card Status</th>
                                    <th>Pay ID</th>
                                    <th>Pay Status</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                if ($dist_rs !== false && $dist_rs->num_rows > 0) {
                                    while ($row = $dist_rs->fetch_assoc()) {
                                    $idlink = "details.php?id=" . $row['id']. "&type=" ."family";
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
                                    <th>Aadhaar</th>
                                    <th>Mobile</th>
                                    <th>Card Status</th>
                                    <th>Pay ID</th>
                                    <th>Pay Status</th>
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