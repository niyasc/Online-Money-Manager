
<?php
$records=$values["records"];
?>
<div class='container-fluid'>
	<div class="row">		
		<div class="col-md-9 order-md-2">
			<h3>Expense Records</h3>
			<hr>
			<form action='members.php' method='GET' onsubmit="return checkDates()"> 
				<input type='hidden' name='page' value='expense_records'>
				<div class="form-group">
					<label id="date1">From</label>
					<input class='form-control' type='date' name='date1' value="<?=$values['from']?>">
				</div>
				<div class="form-group">
					<label id="date2">Upto</label>
					<input class='form-control' type='date' name='date2' value="<?=$values['to']?>">
				</div>
				<input type='submit' value='Refresh' class='btn btn-primary btn-block'>
			</form>
			<hr>
			<table class='table table-bordered table-sm'>
				<thead>
					<th>S.No</th>
					<th>Date</th>
					<th>
						Item
					</th>
					<th>
						Category
					</th>
					<th>
						Expense
					</th>

				</thead>
				<?php
				$i=1;
				$total=[];
				foreach($categories as $category)
				{
					$total[$category["category"]]=0;
				}
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
							<?=$item['Category']?>
						</td>
						<td>
							<?=$item['Expense']?>
						</td>
					</td>
					<?php
					$i++;
					$total[$item['Category']]+=$item['Expense'];

				}
				?>
			</table>
			<hr>
			<h4>Total</h4>
			<table class='table table-bordered table-sm'>
				<tr>
					<td>
						<h4>Category</h4>
					</td>
					<td>
						<h4>Expense</h4>
					</td>

				</tr>
				<?php
				$t=0;
				foreach($total as $key=>$value)
				{
					echo "<tr>";
					echo "<td>";
					echo $key;
					echo "</td>";
					echo "<td>";
					echo $value;
					echo "</td>";
					echo "</tr>";
					$t+=$value;
				}
				print "<tr>";
				print "<td>";
				print "<h4>Total</h4>";
				print "</td>";
				print "<td>";
				print "<h4>".$t."</h4>";
				print "</td>";
				print "</tr>";
				?>
			</table>
		</div>
		<div class="col-md-3 order-md-1">
			<?php require("../templates/member_menu.php") ?>
		</div>
	</div>
</div>