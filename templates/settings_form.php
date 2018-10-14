<div class='container-fluid'>
	<div class="row">		
		<div class="col-md-9 order-md-2">
			<h3>SETTINGS</h3>
			<hr>
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

			<h4>ADD CATEGORY</h4>
			<form action='settings.php' method='POST'>
				<input class = 'form-control'  type='text' name='category' placeholder='Category' required=''/>
				<input   class='btn btn-block btn-primary' type='submit' value='Add'>
			</form>
			<hr>

			<h4>CHANGE PASSWORD</h4>
			<form action="settings.php" method='POST'>
				<input class = 'form-control'  type='password' name='passwd1' placeholder='New Password' required=''/>
				<input class = 'form-control'  type='password' name='passwd2' placeholder='Confirm Password' required=''/>
				<input class='btn btn-block btn-primary' type='submit' value='Change'>
			</form>
		</div>
		<div class="col-md-3 order-md-1">
			<?php require("../templates/member_menu.php") ?>
		</div>
	</div>
</div>