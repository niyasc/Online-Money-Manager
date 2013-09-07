<table class='table table-striped table-bordered' style="width:1200px;margin-left:auto;margin-right:auto">
	<tr>
		<td style="width:200px">
			<?php require("../templates/member_menu.php") ?>
		</td>
		<td>
			<table style="width:900px">
				<tr>
					<td>
					<h3>Welcome <?=$values["info"]["fname"]?></h3>
					</td>
				</tr>
				<tr>
					<td style="text-align:center">
						<table class='table table-striped table-bordered' style="margin-left:auto;margin-right:auto">
							<tr>
								<td>
									First Name
								</td>
								<td>
									<?=$values["info"]["fname"]?>
								</td>
							</tr>
							<tr>
								<td>
									Last Name
								</td>
								<td>
									<?=$values["info"]["lname"]?>
								</td>
							</tr>
							<tr>
								<td>
									Course
								</td>
								<td>
									<?=$values["info"]["course"]?>
								</td>
							</tr>
							<tr>
								<td>
									Department
								</td>
								<td>
									<?=$values["info"]["department"]?>
								</td>
							</tr>
							<tr>
								<td>
									Passout Year
								</td>
								<td>
									<?=$values["info"]["passout_year"]?>
								</td>
							</tr>
							<tr>
								<td>
									Location in Kerala
								</td>
								<td>
									<?=$values["info"]["location"]?>
								</td>
							</tr>
							<tr>
								<td>
									Phone(Delhi)
								</td>
								<td>
									<?=$values["info"]["phone_delhi"]?>
								</td>
							</tr>
							<tr>
								<td>
									Phone(Kerala)
								</td>
								<td>
									<?=$values["info"]["phone_kerala"]?>
								</td>
							</tr>
							<tr>
								<td>
									Email
								</td>
								<td>
									<?=$values["info"]["email"]?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				
			</table>
		</td>
	</tr>
</table>
