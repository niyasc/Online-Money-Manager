<div class='content'>
<form action="members.php" method="POST" class="form-signin" role="form">
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
	if(!empty($values["message"]))
	{
?>
<div style="text-align:center">
<label class='label label-success' >

		<?=$values["message"]?>

</label>
</div>
<?php
	}  
?>
<table  class="" style="margin-left:auto;margin-right:auto; width:300px">

	<tr>
		<td style="text-align:left; padding-top:10px">
			<label>Username</label>
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			<input type="text" placeholder="Username" name="uname" required="" class="form-control" />
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Password</label>
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			<input type="password" placeholder="Password" name="password" required="" class="form-control" >
		</td>
	</tr>
	<tr>
		<td>
		</td>
	</tr>
	<tr>
		<td style="text-align:center; padding-top:10px">
			<input type="submit" class="btn btn-primary" value="Login"/>
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			OR
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			<a href="register.php" class="btn btn-default">Register</a>
		</td>
	</tr>
			
</table>

</form>
</div>
