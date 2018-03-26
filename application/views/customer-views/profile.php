<div class="container">
	<article>
		<section>
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-head-line">Profile</h1>
				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class=" col-sm-12 toppad">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title" style="font-size:24px;"><i class="far fa-address-card"  style="font-size:36px;"></i><?php echo " ".$this->session->userdata('username');?></h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3 button" align="center">
									<!-- <img alt="User Pic" src="img/ed.jpg" class="img-square img-responsive"> -->
									<button id="editbtn" class="btn btn-primary"><i class="fa fa-cog"></i> Edit Profile</button>
									<a href="<?php echo base_url("Main/logout")?>" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
								</div>
								<div class=" col-md-9 col-lg-9 ">
									<table class="table table-user-information">
										<tbody>
											<tr>
												<th>Name:</th>
												<td><?php echo $this->session->userdata('name');?></td>
											</tr>
											<tr>
												<th>Email:</th>
												<td><?php echo $this->session->userdata('email');?></td>
											</tr>
											<tr>
												<th>Sex:</th>
												<td><?php echo $this->session->userdata('sex');?></td>
											</tr>

											<tr>
												<th>Billing Address</th>
												<td><?php echo $this->session->userdata('billadd');?></td>
											</tr>
											<tr>
												<th>Delivery Address</th>
												<td>
													<?php echo $this->session->userdata('deladd');?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</article>
</div>
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
						<label for="name" class="label-control col-md-4">Username</label>
						<div class="col-md-8">
							<input type="text" name="username" class="form-control" value="<?php echo $this->session->userdata('username');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="label-control col-md-4">First Name</label>
						<div class="col-md-8">
							<input type="text" name="custfname" class="form-control" value="<?php echo $this->session->userdata('fname');?>">
						</div>
					</div>					
					<div class="form-group">
						<label for="name" class="label-control col-md-4">Last Name</label>
						<div class="col-md-8">
							<input type="text" name="custlname" class="form-control" value="<?php echo $this->session->userdata('lname');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="label-control col-md-4">Email</label>
						<div class="col-md-8">
							<input type="text" name="custemail" class="form-control" value="<?php echo $this->session->userdata('email');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="label-control col-md-4">Password</label>
						<div class="col-md-8">
							<input type="password" name="password" class="form-control" value="<?php echo $this->session->userdata('pass');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="label-control col-md-4">Sex</label>
						<div class="col-md-8">
							<select name="custsex" class="form-control">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="label-control col-md-4">Billing Address</label>
						<div class="col-md-8">
							<input type="text" name="billadd" class="form-control" value="<?php echo $this->session->userdata('billadd');?>">
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="label-control col-md-4">Delivery Address</label>
						<div class="col-md-8">
							<input type="text" name="deladd" class="form-control" value="<?php echo $this->session->userdata('deladd');?>">
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
