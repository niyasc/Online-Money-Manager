<form action="register.php" method="POST">
<?php
	if(!empty($values["error"]))
	{
?>
<div style="text-align:center">
<label class='label label-important' >

		<?=$values["error"]?>

</label>
</div>
<?php
	}  
?>
<table class='table table-bordered' style="margin-left:auto;margin-right:auto;width:500px">

	<tr>
		<td style="text-align:left">
			<label>User name</label>
		</td>
		<td style="text-align:left">
			<input type="text" placeholder="Username" name="uname" required=""/>
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Password</label>
		</td>
		<td style="text-align:left">
			<input type="password" id='password' placeholder="password" name="password" required=""/>
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Confirm password</label>
		</td>
		<td style="text-align:left">
			<input type="password" id='passwordconf' placeholder="password again" name="confirmation" required=""/>
		</td>
	</tr>
	
			
</table>
<table style="text-align:center;margin-left:auto;margin-right:auto">
	<tr>
		<td style="text-align:center">
			<input type="submit" class="btn" value="Register"/>
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			OR
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			<a href="members.php" class="btn">Login</a>
		</td>
	</tr>
</table>
</form>
