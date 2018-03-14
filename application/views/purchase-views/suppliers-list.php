<div class="container">
	<h1 class="page-header">Supplier List</h1>
	<button class="btn btn-success btn-md" id="addsupplier" data-toggle="modal" data-target="#addModal">Add Supplier</button>
	<!-- MODAL FOR ADD SUPPLIER -->
	<div class="modal fade" id="addModal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Add Supplier</h3>
				</div>
				<div class="modal-body">
					<form id="myForm" action="" method="post">
						<label>Name</label>
						<input class="form-control" type="text" name="name">

						<label>Address</label>
						<div>
							<textarea class="form-control" type="text" name="address"></textarea>
						</div>

						<label>Product</label>
						<div>
							<textarea class="form-control" type="text" name="product"></textarea>
						</div>

						<label>Contact Person</label>
						<input class="form-control" type="text" name="contact_person">

						<label>Contact Number</label>
						<input class="form-control" type="text" name="contact_number">
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary btn-sm" id="btnadd">Add</button>
					<button class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>			
	<!---+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
	</br></br>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Supplier Name</th>
				<th>Address</th>
				<th>Contact Person</th>
				<th>Contact Number</th
			</tr>
		</thead>
		<tbody id="showdata">
			
		</tbody>
	</table>	
</div>


