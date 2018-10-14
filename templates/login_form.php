<div class='container-fluid'>
	<div class="row justify-content-center">
		<div class="col-md-4">
			<form action="members.php" method="POST" class="form-signin" role="form">
				<?php
				if(!empty($values["error"]))
				{
					?>
					<div class="alert alert-danger">
						<?=$values["error"]?>
					</div>
					<?php
				} 
				if(!empty($values["message"]))
				{
					?>
					<div class="alert alert-info">
						<?=$values["message"]?>
					</div>
					<?php
				}  
				?>
				<div class="form-group">
					<label for="uname">User Name</label>
					<input type="text" id="uname" name="uname" required="" class="form-control" />
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Login</button>
				<hr>
				<a href="register.php" class="btn btn-link btn-block">Register</a>

			</form>
		</div>
	</div>
</div>
