<div class="container">
	<div>
		<h1 class="page-header">Supplier List</h1>
		<button class="btn btn-success btn-md" data-toggle="modal" data-target="#addSupplier">Add Supplier</button>
	</div>

	<!-- Modal -->
	<!--ADD Modal -->
	<div class="modal fade" id="addSupplier" tabindex="-1" role="dialog" aria-labelledby="addSupplierTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h3>Add Supplier</h3>
				</div>
				<div class="modal-body form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="inputname" placeholder="name">

					<label>Address</label>
					<input type="text" class="form-control" name="inputaddress" placeholder="address">

					<label>Products</label>
					<input type="text" class="form-control" name="inputproducts" placeholder="products">

					<label>Contact Person</label>
					<input type="text" class="form-control" name="inputcontactper" placeholder="contact person">

					<label>Contact #</label>
					<input type="text" class="form-control" name="inputcontactnum" placeholder="contact #">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="btnAdd">Add</button>
				</div>
			</div>
		</div>
	</div>

	<!-- EDIT MODAL-->

	<div class="modal fade" id="editSupplier" tabindex="-1" role="dialog" aria-labelledby="editSupplierTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h3>Edit Supplier</h3>
				</div>
				<div class="modal-body form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="editname" placeholder="name">

					<label>Address</label>
					<input type="text" class="form-control" name="editaddress" placeholder="address">

					<label>Products</label>
					<input type="text" class="form-control" name="editproducts" placeholder="products">

					<label>Contact Person</label>
					<input type="text" class="form-control" name="editcontactper" placeholder="contact person">

					<label>Contact #</label>
					<input type="text" class="form-control" name="editcontactnum" placeholder="contact #">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="btnSave">Save Changes</button>
				</div>
			</div>
		</div>
	</div>


	<br>
	<table id="table_id" class="table table-bordered ">
		<thead class="jumbotron">
			<tr>
				<th>ID</th>
				<th>Supplier Name</th>
				<th>Address</th>
				<th>Products</th>
				<th>Contact Person</th>
				<th>Contact#</th>
				<th></th>
			</tr>
		</thead>
		<tbody id="tablelist">

		</tbody>
	</table>
</div>
