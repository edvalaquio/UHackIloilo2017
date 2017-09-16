<div class="container">
	<div class="row index-register">
		<div class="panel-group col-xs-6">
			<div ng-init="userType=''" ng-show="!userType" class="panel panel-primary index-register-choice">
				<div class="panel-body index-register-type">
					<p class="text-center">Choose your type of user you will register as:</p>
					<span class="index-register-buttons">
						<button ng-click="userType='org'" class="btn btn-primary btn-lg">Organization</button>
						<button ng-click="userType='indi'" class="btn btn-secondary btn-lg">Individual</button>
					</span>
				</div>
			</div>
			<div ng-show="userType" class="panel panel-primary">
				<div class="panel-body" >
					<div ng-show="userType=='indi'">
						<form class="form-horizontal">
							<fieldset>
								<legend class="text-center display-4">Register as an Individual</legend>
								<div class="form-group">
									<label for="inputEmail" class="col-lg-2 control-label">Email</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputEmail" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-lg-2 control-label">Username</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputEmail" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-lg-2 control-label">Password</label>
									<div class="col-lg-10">
										<input type="password" class="form-control" id="inputPassword" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="textArea" class="col-lg-2 control-label">Textarea</label>
									<div class="col-lg-10">
										<textarea class="form-control" rows="3" id="textArea"></textarea>
										<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-10 col-lg-offset-2">
										<button type="reset" class="btn btn-default">Cancel</button>
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div ng-show="userType=='org'">
						<form class="form-horizontal">
							<fieldset>
								<legend class="text-center display-4">Register your Organization</legend>
								<div class="form-group">
									<label for="inputEmail" class="col-lg-2 control-label">Email</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputEmail" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-lg-2 control-label">Username</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputEmail" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-lg-2 control-label">Password</label>
									<div class="col-lg-10">
										<input type="password" class="form-control" id="inputPassword" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="textArea" class="col-lg-2 control-label">Textarea</label>
									<div class="col-lg-10">
										<textarea class="form-control" rows="3" id="textArea"></textarea>
										<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-10 col-lg-offset-2">
										<button type="reset" class="btn btn-default">Cancel</button>
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<p ng-show="userType=='org'">Not sure? Try signing up as an <a ng-click="userType='indi'" class="text-info">individual</a>.</p>
					<p ng-show="userType=='indi'">Have an org? <a ng-click="userType='org'" class="text-info">Register</a> it now!</p>
				</div>
			</div>
		</div>
	</div>
</div>