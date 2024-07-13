<?php
require_once __DIR__.'/../auth/authcore_login_check.php';

require_once __DIR__.'/login-header.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';


?>

<style type="text/css">
.xc-card-body-1{
	max-width: 380px;

}
</style>


<!-- wrapper -->
<div class="wrapper">
	<div class="section-authentication-login d-flex align-items-center justify-content-center">
		<div class="row">
			<div class="col-12 col-lg-12 mx-auto">
				<div class="card radius-15">
					<div class="row no-gutters">
						<div class="col-lg-12">
							<div class="card-body p-md-5 xc-card-body-1">
								<form name="login-form" class="login-form" action="process_login.php" method="post">

									<div class="text-center">
										<img src="<?php echo SITE_URL?>assets/images/ls-logo.svg" width="80" alt="">
									</div>

									<div class="login-separater text-center"> <span> LOGIN WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-group mt-4">
										<label>Email Address</label>
										<input type="text" class="form-control"  placeholder="Enter your email address" required name="email" />
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password"  id="password"  required name="password" class="form-control" placeholder="Enter your password" />
									</div>

									<?php
									if (isset($_GET['error'])) {
										echo '<span class="pull-left errorinfo">Invalid credentials.</span>';
									}
									if (isset($_GET['errorlck'])) {

										echo '<span class="pull-left errorinfo">User Access Denied! <br>please contact support </span> ';
									}
									?> 

									<div class="btn-group mt-3 w-100">
										<button type="button"  onclick="formhash(this.form, this.form.password);"  class="btn btn-primary btn-block">Log In</button>
									</button>
								</div>
							</form>

							</div>
						</div>

					</div>
					<!--end row-->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end wrapper -->



<?php
require_once __DIR__.'/login-footer.php';


?>
