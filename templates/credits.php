<div class='content'>
<?php
	date_default_timezone_set('Asia/Calcutta');
?>
<table class='table table-striped table-bordered' style="width:1200px;margin-left:auto;margin-right:auto;height:100%">
	<tr>
		<td style="width:200px">
			<?php require("../templates/member_menu.php") ?>
		</td>
		<td>
			<table style="width:700px">
				<tr>
					<td>
					<h3>credit Recrods</h3>
					</td>
				</tr>
				<tr>
					<td>
					<form action="credits.php" method="POST">
						<table class='table table-striped table-bordered' style="width:100%;margin-left:auto;margin-right:auto">
							<tr>
								<td>
									Date
								</td>
								<td>
									<input class = 'form-control'  type="date" name="date" placeholder="Date" required="" value="<?=date('Y-m-d')?>"/>
							</tr>
							<tr>
								</td>
								<td>
									Second Party
								</td>
								<td>
									<input class = 'form-control'  type="text" name="second" placeholder="Name of second party" required=""/>
							</tr>
							<tr>
								</td>
								<td>
									Amount
								</td>
								<td>
									<input class = 'form-control'  type="text" name="amount" placeholder="Amount" required="""/>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input class = 'btn btn-primary btn-block'  type='submit' class='btn' value='Add'>
								</td>
						</table>
						</form>
					</td>
				</tr>
				
			</table>
			<table class = 'table table-striped table-bordered' style="width:700px">
				<tr>
					<td>
						<h4>S.No</h4>
					</td>
					<td>
						<h4>Date</h4>
					</td>
					<td>
						<h4>Second Party</h4>
					</td>
					<td>
						<h4>Amount</h4>
					</td>
					<td>
						<h4>Status</h4>
					</td>
				</tr>
				<?php
					$i = 0;
					foreach($values["records"] as $record)
					{
						$i += 1;
						echo "<tr>";
							echo "<td>";
								echo $i;
							echo "</td>";
							echo "<td>";
								echo $record["day"];
							echo "</td>";
							echo "<td>";
								echo $record["otherparty"];
							echo "</td>";
							echo "<td>";
								echo $record["amount"];
							echo "</td>";
							echo "<td>";
								if($record["status"]=="0")
								{
									echo "<a href='credits.php?action=finish&id=".$record["id"]."' class='btn btn-primary'>Close credit</a>";
								}
								else
								{
									echo "Completed";
								}
								
							echo "</td>";
						echo "</tr>";
					}
			?>
			</table>
		</td>
	</tr>
</table>
</div>
