<div class='container-fluid'>
	<div class="row">		
		<div class="col-md-9 order-md-2">
			<h3>SUMMARY</h3>
			<hr>
			<p>Summary from <?=$values["start"]?> to <?=$values["end"]?></p>
			<table class='table table-striped table-bordered'>
				<tr>
					<td>
						Total Expense
					</td>
					<td>
						<?=$values["total"]?>
					</td>
				</tr>
				<tr>
					<td>
						Days Elapsed
					</td>
					<td>
						<?=$values["days"]?>
					</td>
				</tr>
				<tr>
					<td>
						Average Daily Expense
					</td>
					<td>
						<?=round($values["average"],2)?>
					</td>
				</tr>
				<tr>
					<td>
						Current Balance
					</td>
					<td>
						<?=round($values["cb"],2)?>
					</td>
				</tr>
				<tr>
					<td>
						Current Bank Balance
					</td>
					<td>
						<?=round($values["cbb"],2)?>
					</td>
				</tr>

			</table>
		</div>
		<div class="col-md-3 order-md-1">
			<?php require("../templates/member_menu.php") ?>
		</div>
	</div>
</div>