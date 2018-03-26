<?php
    if(isset($_SESSION['username'])){
        redirect('Main/profile');
    }
?>
<div class="container">
	<article>
		<section>
			<div>
				<h3 class="subTitle">LOGIN</h3>
			</div>
		</section>
		<section>
			<form id="loginform" method="POST">
				<div class="col-sm-12 col-xs-12 col-md-6">
					<div class="form-group">
						<input type="username" class="form-control" placeholder="Username" name="username" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary" id="loginbtn">Login</button>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-6">
					<label>Not yet registered?</label>
					<br/>
					<a href="<?= base_url("Main/registration "); ?>">
						<button type="button" class="btn">Register Here!</button>
					</a>
				</div>
			</form>
        </section>
	</article>
</div>
