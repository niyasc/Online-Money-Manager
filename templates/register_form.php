<div class='container-fluid'>
	<div class="row justify-content-center">
		<div class="col-md-4">
			<form action="register.php" method="POST">
				<?php
				if(!empty($values["error"]))
				{
					?>
					<div class="alert alert-danger">
						<?=$values["error"]?>
					</div>
					<?php
				} ?>
				<div class="form-group">
					<label for="uname">User Name</label>
					<input type="text" id="uname" name="uname" required="" class="form-control" />
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
				<div class="form-group">
					<label for="passwordconf">Confirm Password</label>
					<input type="passwordconf" name="passwordconf" class="form-control" id="password">
				</div>

				<button type="submit" class="btn btn-primary btn-block">Register</button>
				<hr>
				<a href="members.php" class="btn btn-link btn-block">Login</a>
			</form>
		</div>
	</div>
</div>
