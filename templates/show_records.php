<?php
	$records=$values["records"];
	
	//print_r($records);
?>
<table class='table table-striped table-bordered' style="width:1200px;margin-left:auto;margin-right:auto">
	<tr>
		<td style="width:200px">
			<?php require("../templates/member_menu.php") ?>
		</td>
		<td>
			<table style="width:900px">
				<tr>
					<td>
					<h3>Show Records </h3>
					</td>
				</tr>
				<tr>
					<td style="text-align:center">
						<table class='table table-striped table-bordered' style="margin-left:auto;margin-right:auto">
							<tr style="font-weight:bold">
								<td style="width:100px">
									S.No
								</td>
								<td style="width:200px">
									Date
								</td>
								<td style="width:300px">
									Item
								</td>
								<td>
									Expense
								</td>
								
							</tr>
							<?php
								$i=1;
								$total=0;
								foreach($records as $item)
								{
							?>
							<tr>
								<td>
									<?=$i?>
								</td>
								<td>
									<?=$item['Day']?>
								</td>
								<td>
									<?=$item['Item']?>
								</td>
								<td>
									<?=$item['Expense']?>
								</td>
							</td>
							<?php
									$i++;
									$total+=$item['Expense'];
									
								}
							?>
							<tr style="font-weight:bold">
								<td>
								</td>
								<td>
								</td>
								<td>
									Total
								</td>
								<td>
									<?=$total?>
								</td>
							</tr>
								
							
							
						</table>
					</td>
				</tr>
				
			</table>
		</td>
	</tr>
</table>
