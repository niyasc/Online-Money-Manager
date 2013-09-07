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
			<label>Email Address</label>
		</td>
		<td style="text-align:left">
			<input type="email" placeholder="email" name="email" required=""/>
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
	<tr>
		<td style="text-align:left">
			<label>First Name</label>
		</td>
		<td style="text-align:left">
			<input type="text" placeholder="First name" name="fname" required=""/>
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Last Name</label>
		</td>
		<td style="text-align:left">
			<input type="text" placeholder="Last name" name="lname" required=""/>
		</td>
	</tr>

	<tr>
		<td style="text-align:left">
			<label>Course</label>
		</td>
		<td style="text-align:left">
			<select name="course">
				<option value='none'>Choose one</option>
				<option value='Degree'>Degree</option>
				<option value='PG'>PG</option>
				<option value='M.Phil'>M.Phil</option>
				<option value='Phd'>Phd</option>
			</select>
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Department</label>
		</td>
		<td style="text-align:left">
			<input type="text" placeholder="Department" name="department" required=""/>
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Passout year</label>
		</td>
		<td style="text-align:left">
			<select name='passout-year'>
			<option value='none'>Choose year</option>
			<?php
				$i=1921;
				while($i<2020)
				{
					print "<option>".$i."</option>";
					$i++;
				}
			?>
			</select>
				
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Mobile Number(Delhi)</label>
		</td>
		<td style="text-align:left">
			<input type="text" placeholder="Mobile Number" name="phone-delhi" required=""/>
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Show numbers to other members</label>
		</td>
		<td style="text-align:left">
			<input type="checkbox" name="show-delhi"/>
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Phone Number(kerala)</label>
		</td>
		<td style="text-align:left">
			<input type="text" placeholder="Mobile Number" name="phone-kerala" required=""/>
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Show numbers to other members</label>
		</td>
		<td style="text-align:left">
			<input type="checkbox" name="show-kerala"/>
		</td>
	</tr>
	<tr>
		<td style="text-align:left">
			<label>Location in Kerala</label>
		</td>
		<td style="text-align:left">
			<input type="text" placeholder="Location" name="location" required=""/>
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
