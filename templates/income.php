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
					<h3>Income Recrods</h3>
					</td>
				</tr>
				<?php
					if(!empty($values["error"]))
					{
				?>
				<tr>
					<td style="text-align:center">
					<label class="label label-important">
					<?=$values["error"]?>
					</label>
					</td>
				</tr>
				<?php
					}
					
				?>
				
				<?php
					if(!empty($values["message"]))
					{
				?>
				<tr>
					<td style="text-align:center">
					<label class="label label-success">
					<?=$values["message"]?>
					</label>
					</td>
				</tr>
				<?php
					}
					
				?>
				<tr>
					<td>
					<form action="income.php" method="POST">
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
									Source of income
								</td>
								<td>
									<input class = 'form-control'  type="text" name="source" placeholder="Source of income" required="" autofocus />
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
									<input type='submit' class='btn btn-primary btn-block' value='Add'>
								</td>
						</table>
						</form>
					</td>
				</tr>
				
			</table>
			<table class='table table-striped table-bordered' style="width:700px">
	<tr>
		<td>
			<h4>S.No</h4>
		</td>
		<td>
			<h4>Date</h4>
		</td>
		<td>
			<h4>Source</h4>
		</td>
		<td>
			<h4>Amount</h4>
		</td>
	</tr>
	<?php
		$i=1;
		foreach($values["records"] as $record)
		{
			echo "<tr>";
				echo "<td>";
					echo $i;
				echo "</td>";
				echo "<td>";
					echo $record["day"];
				echo "</td>";
				echo "<td>";
					echo $record["source"];
				echo "</td>";
				echo "<td>";
					echo $record["amount"];
				echo "</td>";
			echo "</tr>";
			$i += 1;
		}
	?>
			
			
</table>
		</td>
	</tr>
</table>

</div>
