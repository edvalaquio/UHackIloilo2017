<div class="container">
	<div class="row index-login">
		<div class="panel-group col-xs-10 col-md-6">
			<div class="panel panel-primary">
				<!-- <div class="panel-heading text-center">
					<h1 class="display-6">Login</h1>
				</div> -->
				<div class="panel-body">
					<form>
						<fieldset class="index-login-form">
							<h1 class="text-center display-3">Login</h1>
							<!-- <legend class="text-center display-3">Login</legend> -->
							<div class="form-group col-lg-12">
								<!-- <div class="col-lg-10"> -->
									<input type="text" ng-model="username" class="form-control" id="inlineFormInputGroup" placeholder="Username">
								<!-- </div> -->
							</div>
							<div class="form-group col-lg-12">
								<!-- <div class="col-lg-10"> -->
									<input type="password" ng-model="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">
								<!-- </div> -->
							</div>
	<!-- 						<div class="form-check mb-2 mr-sm-2 mb-sm-0">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox"> Remember me
								</label>
							</div> -->
							<!-- <div class="form-group"> -->
								<div class="col-xs-12 index-login-button">
									<button ng-click="loginUser()" type="submit" class="btn btn-primary">Submit</button>
									<!-- <a href="#!/profile" class="btn btn-primary">Submit</a> -->
								</div>
							<!-- </div> 	 -->
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>