<?php

   include('layout.php');

?>

<div class="col-10">
	<div class="row">
		<div class = "admin" >
			<div class = "alert alert-primary">Attendance List</div>
				<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
			
				</div>
				<div class = "well col-lg-12">
					<table id="table" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Employee ID</th>
								<th>Name</th>
								<th>Date</th>
								<th>Log Type</th>
								<th>Time</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>	
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>	
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>