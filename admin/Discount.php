<?php include 'header.php';
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
	overflow:scroll;
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
                  
          <div class="container">
      
    <div id="result"></div>
    <div class="text-center padding">
      <h2>Add Discount for Volunteer</h2>
    </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="Gender">Volunteer Email<span class="required">*</span></label>
          <input type="text" name="email" id="userEmail" class="form-control" value="" placeholder="Volunteer Email ID" required>
        </div>
      </div>
      
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Name">Family Card/Unit<span class="required">*</span></label>
          <input type="number" name="frate" id="frate" class="form-control" value="" placeholder="Enter Famili Card Amount" required>
        </div>
        <div class="form-group col-md-6">
          <label for="Gender">Family Card Discount(in percentage but don't use % Symbol)<span class="required">*</span></label>
          <input type="number" name="fdiscount" id="fdiscount" class="form-control" placeholder="Discount on family Card" required>
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Gender">Single Card Discount (in percentage but don't use % Symbol)<span class="required">*</span></label>
          <input type="number" name="sdiscount" max="50" id="sdiscount" class="form-control" placeholder="Discount on Single Card" required>
        </div>
        <div class="form-group col-md-6">
        <label for="Name">Personal Card/Unit<span class="required">*</span></label>
          <input type="number" name="prate" id="prate" class="form-control" value="" placeholder="Enter Personal Card Amount" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8 mt-4">
          <input type="button" class="btn btn-primary mr-4 " name="addAmount" id="addDiscount" value="Add"
          > </div>
      </div>


<style>
    .waiting{
        cursor:waiting;
    }
</style>

<script>
    document.getElementById("addDiscount").addEventListener("click",function(){
         $("#addDiscount").attr("disabled", true);
        var vmail = document.getElementById("userEmail").value;
        var funit = document.getElementById("frate").value;
        var fdiscount = document.getElementById("fdiscount").value;
        var punit = document.getElementById("prate").value;
        var pdiscount = document.getElementById("sdiscount").value;
        if(vmail!=""&&funit!=""&&fdiscount!=""&&punit!=""&&pdiscount!=""){
            	$.ajax({
						type: "post",
						url: "Card-Data/Discount",
						data: {
							vmail: vmail,
							funit: funit,
							fdiscount: fdiscount,
							punit: punit,
							pdiscount: pdiscount
						},
						success: function(data) {

							$('body').removeClass('waiting');
							$("#result").html(data);
							$("#addDiscount").removeAttr("disabled");

						}

					});
        }else{
            alert("All Fields are required");
        }
    });
</script>



	<div class="formcard">
			<table id="example" class="table table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>V EMAIL</th>
						<th>P CARD RATE</th>
						<th>P CARD DISCOUNT</th>
							<th>F CARD RATE</th>
						<th>F CARD DISCOUNT</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>V EMAIL</th>
						<th>P CARD RATE</th>
						<th>P CARD DISCOUNT</th>
							<th>F CARD RATE</th>
						<th>F CARD DISCOUNT</th>
					</tr>
				</tfoot>

				<tbody>
					<?php
					include "../Classes/Database.php";
					$obj = new Database();
					$obj->Select("card_discount", "*", null, null, null, null);
					foreach ($obj->getResult() as list(
						"V_EMAIL" => $id, 'PERSONAL_CARD_RATE' => $pr, "PERSONAL_DISCOUNT" => $pd, "FAMILY_CARD_RATE" => $fcr, "FAMILY_CARD_DISCOUNT" => $fcd)) {
					?>
						<tr>
							<td>
								<?php echo $id; ?>
							</td>
						
							<td>
								<?php echo $pr; ?>
							</td>
							<td>
								<?php echo $pd; ?>
							</td>
							<td>
								<?php echo $fcr; ?>
							</td>
							<td>
								<?php echo $fcd; ?>
							</td>
						
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
      </center>
  </div>
</div>          

</div>
</div>
</div>
</div>