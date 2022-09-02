<?php

   include('layout.php');

?>

<div class="col-10">
    <div class="row">
		<div class="admin" >
			<div class="alert alert-primary">Employee List</div>
				
			<div class="well col-lg-12">
				<div class="add-btn">
					<button class="enquire-btn mb-2" data-bs-toggle="modal" data-bs-target="#new_employee" style="padding:5px 50px;border:none;background:rgb(24, 133, 184);border-radius:3px;color:#fff;">Add</button>
				</div>
				<table id="table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Employee No</th>
							<th>Firstname</th>
							<th>Middlename</th>
							<th>Lastname</th>
							<th>Department</th>
							<th>Position</th>
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
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
		<div class="modal fade" id="new_employee" tabindex="-1" role="dialog" >
			<div class="modal-dialog modal-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						
						<h4 class="modal-title" id="myModallabel">Add new Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<form id='employee_frm'>
						<div class ="modal-body">
							<div class="form-group">
								<label>Firstname</label>
								<input type="hidden" name="id" />
								<input type="text" name="firstname" required="required" class="form-control" />
							</div>
							<div class="form-group">
								<label>Middlename</label>
								<input type="text" name ="middlename" placeholder="(optional)" class="form-control" />
							</div>
							<div class="form-group">
								<label>Lastname:</label>
								<input type="text" name="lastname" required="required" class="form-control" />
							</div>
							<div class="form-group">
								<label>Department</label>
								<input type="text" name="department" required="required" class="form-control" />
							</div>
							<div class="form-group">
								<label>Position</label>
								<input type="text" name="position" required="required" class="form-control" />
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
</div>

<script type="text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#employee_frm').submit(function(e){
				e.preventDefault()
				$('#employee_frm [name="submit"]').attr('disabled',true)
				$('#employee_frm [name="submit"]').html('Saving')
				$.ajax({
					url:'save_employee.php',
					method:"POST",
					data:$(this).serialize(),
					error:err=>console.log(),
					success:function(resp){
						if(typeof resp !=undefined){
							resp = JSON.parse(resp)
							if(resp.status == 1){
								alert(resp.msg);
								location.reload();
							}
						}
					}
				})
			})

			$('.remove_employee').click(function(){
				var id=$(this).attr('data-id');
				var _conf = confirm("Are you sure to delete this data ?");
				if(_conf == true){
					$.ajax({
						url:'delete_employee.php?id='+id,
						error:err=>console.log(err),
						success:function(resp){
							if(typeof resp != undefined){
								resp = JSON.parse(resp)
								if(resp.status == 1){
									alert(resp.msg);
									location.reload()
								}
							}
						}
					})
				}
			});
			$('.edit_employee').click(function(){
				var $id=$(this).attr('data-id');
				$.ajax({
					url:'get_employee.php',
					method:"POST",
					data:{id:$id},
					error:err=>console.log(),
					success:function(resp){
						if(typeof resp !=undefined){
							resp = JSON.parse(resp)
							$('[name="id"]').val(resp.id)
							$('[name="firstname"]').val(resp.firstname)
							$('[name="lastname"]').val(resp.lastname)
							$('[name="middlename"]').val(resp.middlename)
							$('[name="department"]').val(resp.department)
							$('[name="position"]').val(resp.position)
							$('#new_employee .modal-title').html('Edit Employee')
							$('#new_employee').modal('show')
						}
					}
				})
				
			});
			$('#new_emp_btn').click(function(){
				$('[name="id"]').val('')
				$('[name="firstname"]').val('')
				$('[name="lastname"]').val('')
				$('[name="middlename"]').val('')
				$('[name="department"]').val('')
				$('[name="position"]').val('')
				$('#new_employee .modal-title').html('Add New Employee')
				$('#new_employee').modal('show')
			})
		});
	</script>

<?php include 'footer.php' ?>