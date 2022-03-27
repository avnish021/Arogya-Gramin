<?php include 'header.php'?>
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

.container2:hover input ~ .mark {
  background-color: gray;
}

.container2 input:checked ~ .mark {
  background-color: blue;
}

/* Create the mark/indicator (hidden when not checked) */
.mark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the mark when checked */
.container2 input:checked ~ .mark:after {
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
              <h3>Applied Card List</h3>

<div class="container-fluid">
    
    <script>
var id = [];
    function myFunction(event){
        if(event.target.checked){
          event.target.style.accentColor = "deeppink";
        id.push(event.path['1'].nextSibling.nextElementSibling.innerText);    
        }else{
            event.target.style.accentColor = ""; 
            for(let i=0; i>id.length; i++){
                alert("before loop")
              if(id[i]== event.path['1'].nextSibling.nextElementSibling.innerText ){
                  alert('uncheck')
                  delete id[event.path['1'].nextSibling.nextElementSibling.innerText];
              }
            }
            
        }
console.log(id);
};
// array.splice(i, 1);
</script>
  <?php
include "../Classes/Database.php";
$obj = new Database();
$values = array("V_ID" => "", "REGISTRATION" => "", "NAME" => "", "GENDER" => "", "DOB" => "", "AADHAAR" => "", "ADDRESS" => "", "BLOCK" => "", "DISTRICT" => "", "STATE" => "", "PINCODE" => "", "STATUS" => "Initiated", "TYPE" => "");
?>
<body>

	<div class="flex-container">
		<div class="item-1">
			<input type="button" class="btn btn-primary btn-small" id="all" value="All" />
		</div>
		<div class="item-2">
			<select id="key">
				<?php
				foreach ($values as $key => $value) {
					echo '<option value="' . $key . '">' . $key . "</option>";
				}
				?>
			</select>
			<input type="text" id="value" placeholder="Enter Value">
				<input type="button" class="btn btn-primary btn-small" id="search11" value="Search" />
		</div>
		<div class="item-3">
			<input type="text" id="fromdate" readonly>
			<input type="text" id="todate" readonly>

		</div>
	</div>
	</div>

	<div id="result">
		<div class="formcard">
			<table id="example" class="table table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
					    <th>SELECT</th>
						<th>Sr.No.</th>
						
						<th>Registration Number</th>
						<th>V ID</th>
						<th>Name</th>
						<th>Date Of Birth</th>
						<th>Gander</th>
						<th>Application Type</th>
						<th>Aadhar card number</th>
						<th>complete address</th>
							<th>Image</th>
								<th>MEMBER NAME</th>
							<th>MEMBER AGE</th>
								<th>MEMBER GENDER</th>
									<th>MEMBER Relation</th>
						<th>Status</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
					    <th>SELECT</th>
						<th>Sr.No.</th>
					
						<th>Registration Number</th>
						<th>V ID</th>
						<th>Name</th>
						<th>Date Of Birth</th>
						<th>Gander</th>
						<th>Application Type</th>
						<th>Aadhar card number</th>
						<th>complete address</th>
							<th>Image</th>
						<th>MEMBER NAME</th>
							<th>MEMBER AGE</th>
								<th>MEMBER GENDER</th>
									<th>MEMBER Relation</th>
						<th>Status</th>
						<th>Edit</th>
					</tr>
				</tfoot>

				<tbody>
					<?php
					$obj->Select("crad_details", "*", null, null, null, null);
					foreach ($obj->getResult() as list(
						"ID" => $id, 'REGISTRATION' => $registration, "DISTRICT" => $district, "MEMBER_NAME" => $mn, "MEMBER_AGE" => $ma, "MEMBER_GENDER" => $mg, "MEMBER_RELATION" => $mr, "BLOCK" => $block, "NAME" => $name, "DOB" => $dob, "GENDER" => $gender, "TYPE" => $type, "AADHAAR" => $aadhar, "IMAGE" => $image, "V_ID" => $vid, "ADDRESS" => $address, "STATUS" => $status
					)) {
					?>
						<tr>
						       <td id="selectBox"><input id="checkbox" onclick="myFunction(event)" type="checkbox"></td>
							<td>
								<?php echo $id; ?>
							</td>
						
							<td>
								<?php echo $registration; ?>
							</td>
							<td>
								<?php echo $vid; ?>
							</td>
							<td>
								<?php echo $name; ?>
							</td>
							<td>
								<?php echo $dob; ?>
							</td>
							<td>
								<?php echo $gender; ?>
							</td>
							<td>
								<?php echo $type; ?>
							</td>
							<td>
								<?php echo $aadhar; ?>
							</td>
							<td>
								<?php echo $address; ?>
							</td>
									<td><?php if($image!=""){?><a href="https://arogyagramin.com//volunteer/Images/<?php echo $image; ?>">Image</a><?php  } ?></td>
										<td><?php echo $mn; ?></td>
							<td><?php echo $ma; ?></td>
								<td><?php echo $mg; ?></td>
									<td><?php echo $mr; ?></td>
							<td>
								<?php echo $status; ?>
							</td>
							 <td><a href="Edit-Health-Card?RegId=<?php echo base64_encode($registration);?>" class="btn btn-primary btn-sm">Edit</a></td>
						</tr>
					<?php
					}
					?>
				</tbody>
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
<script>
	$(function() {
		$("#fromdate").datepicker({
			dateFormat: 'dd/mm/yy',
			yearRange: '-25:+0',
			changeYear: true,
			changeMonth: true
		});
	});

	$(function() {
				$("#todate").datepicker({
					dateFormat: 'dd/mm/yy',
					yearRange: '-25:+0',
					changeYear: true,
					changeMonth: true
				});
			});
				$("#all").click(function() {
					$('body').addClass('waiting');
					$.ajax({
						type: "post",
						url: "Card-Data/Fetch-Data",
						data: {
							Paid: "all"
						},
					
						success: function(data) {
							$('body').removeClass('waiting');
							$("#result").html(data);
						}
					});
				});
				$("#todate").change(function() {
					var fromdate = $("#fromdate").val();
					var todate = $("#todate").val();

					$.ajax({
						type: "post",
						url: "Card-Data/Fetch-Data",
						data: {
							fromdate: fromdate,
							todate: todate
						},
						success: function(data) {

							$('body').removeClass('waiting');
							$("#result").html(data);

						}

					});
				});
					$("#search11").click(function() {
					$('body').addClass('waiting');
						var key = $("#key").val();
					var value = $("#value").val();
				 	if(key!=""&&value!=""){
					$.ajax({
						type: "post",
						url: "Card-Data/Fetch-Data",
						data: {
							key: key,
							value:value
						},
					
						success: function(data) {
							$('body').removeClass('waiting');
							$("#result").html(data);
						}
					});
					}else{
					    alert("Fields Are Required!")
					}
				});
</script>

</html>
</div>
</div>
</div>
<footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  <a href="https://arvisaitsolution.com/" target="_blank">Arogyagramin</a> from Arvisa IT Solutions. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 