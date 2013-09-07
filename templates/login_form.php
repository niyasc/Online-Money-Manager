<form action="members.php" method="POST">
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
<table style="margin-left:auto;margin-right:auto">

	<tr>
		<td style="text-align:left">
			<label>Username</label>
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			<input type="text" placeholder="Username" name="uname" required=""/>
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Password</label>
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			<input type="password" placeholder="Password" name="password" required=""/>
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			<input type="submit" class="btn" value="Login"/>
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			OR
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			<a href="register.php" class="btn">Register</a>
		</td>
	</tr>
			
</table>
</form>
