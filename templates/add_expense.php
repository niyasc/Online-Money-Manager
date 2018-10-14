<div class='container-fluid'>
	<div class="row">		
		<div class="col-md-9 order-md-2">
			<h3>Add Record</h3>
			<hr>
		</div>
		<div class="col-md-3 order-md-1">
			<?php require("../templates/member_menu.php") ?>
		</div>
	</div>
</div>
<div class='container'>
	<div class="row">
		<div class="col-md-3">
			<?php require("../templates/member_menu.php") ?>
		</div>
		<div class="col-md-9">

			<tr>
				<td>
					<h3>Add Record</h3>
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

			<form method="post" action="add-expense.php">
				<tr>
					<td style="text-align:center;margin-left:auto;margin-right:auto">

						<table class='table table-striped table-bordered' style="margin-left:auto;margin-right:auto; width:100%">
							<tr>
								<td>
									Date
								</td>
								<td>
									<input class = 'form-control'  type="date" name="date" placeholder="Date" required="" value="<?=date('Y-m-d')?>"/>
								</td>
							</tr>
							<tr>
								<td>
									Category
								</td>
								<td>
									<select class='form-control' name='category' autofocus>
										<?php
										foreach($values["categories"] as $category)
										{
											echo "<option>";
											echo $category["category"];
											echo "</option>";
										}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									Item
								</td>
								<td>
									<input class = 'form-control'  type="text" name="item" placeholder="Item" required="" />
								</td>
							</tr>
							<tr>
								<td>
									Expense
								</td>
								<td>
									<input class = 'form-control'  type="text" name="price" placeholder="Expense" required=""/>
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td style="text-align:center">
									<input class = 'btn btn-primary btn-block'  type="submit" class="btn" value="Add Record"/>
								</td>
							</tr>

						</table>
					</td>
				</tr>

			</form>

		</table>
	</td>
</tr>
</table>
</div>
