<?php
include "../../Classes/Database.php";
$obj = new Database();
if(isset($_POST['Paid'])){
    	$obj->Select("crad_details", "*", null, null, null, null);
    ?>
	<div class="formcard">
			<table id="example" class="table table-bordered" cellspacing="0" width="100%">
			<thead>
					<tr>
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
	<?php
}elseif(isset($_POST['fromdate'])&&isset($_POST['todate'])){
    $fromdt =$_POST['fromdate'];
    $todt=$_POST['todate'];
    	$obj->Select("crad_details", "*", null, "DATE BETWEEN '$fromdt' AND '$todt'", null, null);
    ?>
	<div class="formcard">
			<table id="example" class="table table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
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
	<?php
}elseif(isset($_POST['key'])&&isset($_POST['value'])){
    $key =$_POST['key'];
    $value=$_POST['value'];
    	$obj->Select("crad_details", "*", null, "$key LIKE '%$value%'", null, null);
    ?>
	<div class="formcard">
			<table id="example" class="table table-bordered" cellspacing="0" width="100%">
			<thead>
					<tr>
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
	<?php
}else{
    echo '<div class="alert alert-info">No Data Found!</div>';
}
