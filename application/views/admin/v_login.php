<div style="height: auto; background-color: #fff;" class="main-page">
		<div style="background-color: #fff" ;>
			<div class="login-tengah">
				<!--Card-->
				<div class="card card-cascade wider" style="margin-bottom: 70px">
					<!--Card image-->
					<div class="view overlay hm-white-slight text-xs-center flex-center">
						<h3>Login</h3>
					</div>
					<!--/Card image-->
					<!--Card content-->
					<div class="card-block text-xs-center">
						<div class="text-center" style="padding:50px 0">
							<!-- Main Form -->
							<div class="login-form-1">
								<form id="login-form" class="text-left" action="<?php echo base_url('admin/login'); ?>" method="POST">
									<div class="login-form-main-message"></div>
									<div class="main-login-form">
										<div class="login-group">
											<div class="form-group">
												<label for="lg_username" class="sr-only">Username</label>
												<input type="text" name="username" class="form-control" placeholder="username" required autofocus>
											</div>
											<div class="form-group">
												<label for="lg_password" class="sr-only">Password</label>
												<input type="password" name="password" class="form-control" placeholder="Password" required>
											</div>
										</div>
										<?php echo $error; ?>
										<button type="submit" class="login-button">LOGIN</button>
									</div>
								</form>
							</div>
							<!-- end:Main Form -->
						</div>
					</div>
					<!--/.Card content-->
				</div>
				<!--/.Card-->
			</div>
		</div>
	</div>
