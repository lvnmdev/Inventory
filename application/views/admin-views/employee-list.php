<div id="mainContent">
	<div class="container-fluid">
		<article>
			<section>
				<h1>Employee List</h1>
				<br>
				<div class="alert alert-success" style="display: none;"></div>
				<button id="addEmp" class="btn btn-success">
					<i class="fa fa-user-plus"></i> Add Employee</button>
				<br>
				<br>
				<div class="table-responsive">
					<table id="table_id" class="table table-condensed table-striped table-hover">
						<thead class="jumbotron">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Name</th>
								<th scope="col">Sex</th>
								<th scope="col">Position</th>
								<th scope="col">Email</th>
								<th scope="col">Password</th>
								<th scope="col">Contact Number</th>
								<th scope="col">Date Registered</th>
								<th scope="col">Date Updated</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody id="showdata">
						</tbody>
					</table>
				</div>
			</section>
		</article>
		<!-- Register Modal -->
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<form id="myForm" action="" method="post" class="form-horizontal">
							<input type="hidden" name="txtId" value="0">
							<div class="form-group">
								<label for="name" class="label-control col-md-4">Employee ID</label>
								<div class="col-md-8">
									<input type="text" name="txtEmployeeID" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="label-control col-md-4">First Name</label>
								<div class="col-md-8">
									<input type="text" name="txtEmployeeFirstName" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="label-control col-md-4">Middle Name</label>
								<div class="col-md-8">
									<input type="text" name="txtEmployeeMiddleName" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="label-control col-md-4">Last Name</label>
								<div class="col-md-8">
									<input type="text" name="txtEmployeeLastName" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="label-control col-md-4">Email</label>
								<div class="col-md-8">
									<input type="text" name="txtEmployeeEmail" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="label-control col-md-4">Password</label>
								<div class="col-md-8">
									<input type="text" name="txtEmployeePassword" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="label-control col-md-4">Sex</label>
								<div class="col-md-8">
									<select name="txtEmployeeSex" class="form-control">
										<option>- Select -</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="address" class="label-control col-md-4">Position</label>
								<div class="col-md-8">
									<select name="txtEmployeePosition" class="form-control">
										<option>- Select -</option>
										<option value="Admin">Admin</option>
										<option value="Inventory">Inventory</option>
										<option value="Sales">Sales</option>
										<option value="Purchase">Purchase</option>
									</select>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" id="btnSubmit" class="btn btn-primary"></button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		<!-- Delete Modal-->
		<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Confirm Delete</h4>
					</div>
					<div class="modal-body">
						Do you want to delete this record?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	</div>
</div>
