<?php



// ini_set('display_errors', 1);

include 'header.php';

include "../Classes/Database.php";


$obj = new Database();
//Updating Quantity

// if (isset($_POST["newQnty"])) {
// 	$newQnty = $_POST["newQnty"];
// 	$newQntyId = $_POST["newQntyId"];
// 	$obj->Select("v_transaction", "V_EMAIL", null, "id = '$newQntyId'");


// 	$query = "UPDATE `v_transaction` SET `quantity`='$newQnty' WHERE `id`='$newQntyId'";

// 	$rs = mysqli_query($con, "$query") or die(mysqli_error($con));
// 	if ($rs) {
// 		echo "<script>alert('New Quantity has been updated successfully.')</script>";
// 	} else {
// 		echo "<script>alert('Some issue while processing quantity update! ')</script>";
// 	}
// }


if (isset($_POST["newQnty"])) {
	$RegIdCrd = $_POST["newQntyId"];
	$quantityCrd = $_POST["newQnty"];
	$typeCrd = $_POST['type'];
	$v_id = $_POST['mail'];
	if ($RegIdCrd != "" && $quantityCrd != "" && $typeCrd != "" && $v_id != "") {
		$obj->Select("volunteer", "*", null, "v_email = '$v_id'");
		foreach ($obj->getResult() as list("personal_card" => $personalCrd, "family_card" => $familyCrd));
		$vtransactionTotal = array("quantity" => $quantityCrd);
		if ($typeCrd == "personal_card") {
			$total_card  = $personalCrd + $quantityCrd;
			$walletTotal = array("personal_card" => $total_card);
			$obj->Update("volunteer", $walletTotal, "v_email = '$v_id'");
		} elseif ($typeCrd == "family_card") {
			$total_card  = $familyCrd + $quantityCrd;
			$walletTotal = array("family_card" => $total_card);
			$obj->Update("volunteer", $walletTotal, "v_email = '$v_id'");
		}

		$walletTotal = array("quantity" => $quantityCrd, "payment_status" => "Complete");
		if ($obj->Update("v_transaction", $walletTotal, "ID = '$RegIdCrd'")) {

			echo '<script> alert("Updated Successfuly");


</script>';
		} else {

			echo '<script> alert("Some Error Please Try Again!");


    </script>';
		}
	}
}

?>

<head>

	<!-- Bootstrap CDN-->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="icon" type="image/png" href="https://magadhnidhi.in/wp-content/uploads/2020/01/magadhlogo-300x273.jpg">

	<!-- Bootstrap JS-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!--jQuery CSS-->

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<!-- jQuery JS-->

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- Sweetalert Javascript CDN-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- Font Awesome-->

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



	<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />

	<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>

	<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.js"></script>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>



	<link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.css" rel="stylesheet" type="text/css" />

	<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.js"></script>

	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>

	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>



	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>



	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}



		/* The Modal (background) */

		.modal {

			display: none;
			/* Hidden by default */

			position: fixed;
			/* Stay in place */

			z-index: 1;
			/* Sit on top */

			padding-top: 100px;
			/* Location of the box */

			left: 0;

			top: 0;

			width: 100%;
			/* Full width */

			height: 100%;
			/* Full height */

			overflow: auto;
			/* Enable scroll if needed */

			background-color: rgb(0, 0, 0);
			/* Fallback color */

			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */

		}



		/* Modal Content */

		.modal-content {

			position: relative;

			background-color: #fefefe;

			margin: auto;

			padding: 0;

			border: 1px solid #888;

			width: 50%;

			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

			-webkit-animation-name: animatetop;

			-webkit-animation-duration: 0.4s;

			animation-name: animatetop;

			animation-duration: 0.4s
		}



		/* Add Animation */

		@-webkit-keyframes animatetop {

			from {
				top: -300px;
				opacity: 0
			}

			to {
				top: 0;
				opacity: 1
			}

		}



		@keyframes animatetop {

			from {
				top: -300px;
				opacity: 0
			}

			to {
				top: 0;
				opacity: 1
			}

		}



		/* The Close Button */

		.close {

			color: white;

			float: right;

			font-size: 28px;

			font-weight: bold;

		}



		.close:hover,

		.close:focus {

			color: #000;

			text-decoration: none;

			cursor: pointer;

		}



		.modal-header {

			padding: 2px 16px;

			background-color: #5cb85c;

			color: white;

		}



		.modal-body {
			padding: 2px 16px;
		}



		.modal-footer {

			padding: 2px 16px;

			background-color: #5cb85c;

			color: white;

		}
	</style>



	<style>
		table {

			font-size: 12px;

		}
		.dt-button.red {

			color: orange;

			background: #4527a0;

		}
		table {
			border: 1px solid red;
			overflow: scroll;
		}
		th {
			text-transform: uppercase;
			background-color: #3c40c6;
			color: #fff;
		}
		td {
			word-wrap: break-word;
			background-color: #F8EFBA;
		}
		.formcard {
			margin: 10px;
			padding-bottom: 20px;
			padding: 10px;
			background-color: #9dcbed;
		}

		body.waiting * {

			cursor: wait;

		}



		.flex-container {

			display: flex;

			width: 100%;

			height: 60px;

			justify-content: space-evenly;

			align-items: center;

			margin: 60px auto auto auto;



		}

		.container2 {

			display: block;

			position: relative;

			padding-left: 35px;

			margin-bottom: 20px;

			cursor: pointer;

			font-size: 15px;

		}



		/* Hide the default checkbox */

		.container2 input {

			visibility: hidden;

			cursor: pointer;

		}



		/* Create a custom checkbox */

		.mark {

			position: absolute;

			top: 0;

			left: 0;

			height: 25px;

			width: 25px;

			background-color: lightgray;

		}



		.container2:hover input~.mark {

			background-color: gray;

		}



		.container2 input:checked~.mark {

			background-color: blue;

		}



		/* Create the mark/indicator (hidden when not checked) */

		.mark:after {

			content: "";

			position: absolute;

			display: none;

		}



		/* Show the mark when checked */

		.container2 input:checked~.mark:after {

			display: block;

		}



		/* Style the mark/indicator */

		.container2 .mark:after {

			left: 9px;

			top: 5px;

			width: 5px;

			height: 10px;

			border: solid white;

			border-width: 0 3px 3px 0;

			transform: rotate(45deg);

		}
	</style>

</head>



<div class="page-content">
	<div class="main-wrapper">
		<h3>Transaction Details</h3>
		<div class="container-fluid">
			<body>
				<div id="result">
					<div class="formcard">
						<table id="example" class="table table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>V NAME</th>
									<th>V Email</th>
									<th>Amount</th>
									<th>Quantity</th>
									<th>Status</th>
									<th>Contact</th>
									<th>Mode</th>
									<th>Type</th>
									<th>Date</th>
									<th>Approve</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>V NAME</th>
									<th>V Email</th>
									<th>Amount</th>
									<th>Quantity</th>
									<th>Status</th>
									<th>Contact</th>
									<th>Mode</th>
									<th>Type</th>
									<th>Date</th>
									<th>Approve</th>
								</tr>
							</tfoot>
							<tbody>
								<?php
								$obj->Select("v_transaction", "*", null, null, null, null);
								foreach ($obj->getResult() as list(
									"ID" => $id, 'V_NAME' => $name, "V_EMAIL" => $mail, "TOTAL_AMOUNT" => $amt, "QUANTITY" => $quantity, "PAYMENT_STATUS" => $status, "CONTACT" => $mob, "MODE" => $mode, "TYPE" => $type, "DATE" => $date
								)) {
								?>
									<tr>
										<td><?php echo $name; ?></td>
										<td><?php echo $mail; ?></td>
										<td><?php echo $amt; ?></td>
										<td> <?php echo $quantity; ?></td>
										<td><?php echo $status; ?></td>
										<td><?php echo $mob; ?></td>
										<td><?php echo $mode; ?></td>
										<td><?php echo $type; ?></td>
										<td><?php echo $date; ?></td>
										<td><a href="javascript:editQnty(<?php echo $id; ?>,<?php echo $quantity; ?>,<?php echo "'".$mail."'"; ?>,<?php echo "'".$type."'"; ?>)" class="btn btn-primary btn-sm">Approve</a></td>
										<!--<td><?php if ($mode == "Offline" && $status == "Pending") { ?><a href="?RegId=<?php echo base64_encode($id); ?>?&quantity=<?php echo base64_encode($quantity); ?>&mail=<?php echo base64_encode($mail); ?>&type=<?php echo base64_encode($type); ?>" class="btn btn-primary btn-sm">Approve</a><?php } ?></td>-->
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>

						<!-- The Modal -->
						<div id="qntyModal" class="modal">
							<!-- Modal content -->
							<div class="modal-content">
								<div class="modal-header">
								 <span class="close" onclick="closeModel()">&times;</span>
								<!--  <h2>Modal Header</h2>-->
								</div>
								<div class="modal-body">
									<p>Existing Quantity: <span class="existQnty"></span></p>
									<p>Enter New Quantity:
									<form name="frmQntyUpdate" action="" method="post">
										<input type="number" name="newQnty" class="newQnty" value="" />
										<input type="hidden" name="newQntyId" class="newQntyId" value="" />
										<input type="hidden" name="mail" class="userMail" value="" />
										<input type="hidden" name="type" class="type" value="" />
										<br />
										<button type="submit">
											Update Quantity
										</button>
									</form>
									</p>
								</div>
								<!--<div class="modal-footer">-->
								<!--  <h3>Modal Footer</h3>-->
								<!--</div>-->
							</div>
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
<script>
	// Get the modal
	var modal = document.getElementById("qntyModal");
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close");
	// btn.onclick = function() {
	// 	modal.style.display = "block";
	// };
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		al()
	};
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	};

	function editQnty(id, qnty, email, type) {

		$("#qntyModal .existQnty").text(qnty);
		$("#qntyModal .newQnty").val(qnty);
		$("#qntyModal .newQntyId").val(id);
		$("#qntyModal .userMail").val(email);
		$("#qntyModal .type").val(type);


		modal.style.display = "block";

	}
	function closeModel()
	{
		modal.style.display = "none";
	}
</script>



<!-- partial -->

</div>

<!-- main-panel ends -->

</div>

<!-- page-body-wrapper ends -->

</div>