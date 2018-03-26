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
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title" style="font-size:24px;">
								<i class="far fa-address-card" style="font-size:36px;"></i> <?php echo $this->session->userdata('name');?></h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3 button" align="center">
									<img alt="User Pic" src="img/ed.jpg" class="img-square img-responsive">
									<a href="#" class="btn btn-primary">
										<i class="fa fa-cog"></i> Edit Profile</a>
									<a href="#" class="btn btn-danger">
										<i class="fas fa-sign-out-alt"></i> Logout</a>
								</div>
								<div class=" col-md-9 col-lg-9 ">
									<table class="table table-user-information">
										<tbody>
											<tr>
												<th>Position:</th>
												<td>
													<?php echo $this->session->userdata('position');?>
												</td>
											</tr>
											<tr>
												<th>Date of Birth</th>
												<td>
													<?php echo $this->session->userdata('dob');?>
												</td>
											</tr>
											<tr>
												<th>Sex</th>
												<td>
													<?php echo $this->session->userdata('sex');?>
												</td>
											</tr>
											<tr>
												<th>Home Address</th>
												<td>
													<?php echo $this->session->userdata('address');?>
												</td>
											</tr>
											<tr>
												<th>Email</th>
												<td>
													<?php echo $this->session->userdata('email');?>
												</td>
											</tr>
											<tr>
												<th>Phone Number</th>
												<td>
													<?php echo $this->session->userdata('phoneno');?>
												</td>
											</tr>
											<tr>
												<th>Hire date:</th>
												<td>
													<?php echo $this->session->userdata('date-registered');?>
												</td>
											</tr>
											<tr>
												<th>Profile updated:</th>
												<td>
													<?php echo $this->session->userdata('date-updated');?>
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
