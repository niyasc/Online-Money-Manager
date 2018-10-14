<div class='container-fluid'>
	<div class="row">		
		<div class="col-md-9 order-md-2">
			<h3>Add Record</h3>
			<hr>
			<?php
			if(!empty($values["error"]))
			{
				?>
				<div class="alert alert-danger">
					<?=$values["error"]?>
				</div>
				<?php
			} 
			if(!empty($values["message"]))
			{
				?>
				<div class="alert alert-info">
					<?=$values["message"]?>
				</div>
				<?php
			}  
			?>

			<form method="post" action="add-expense.php">
				<div class="form-group">
					<label for="date">Date</label>
					<input class='form-control' type="date" name="date" required="" value="<?=date('Y-m-d')?>"/>
				</div>
				<div class="form-group">
					<label for="category">Category</label>
					<select id="category" class='form-control' name='category' autofocus>
						<?php
						foreach($values["categories"] as $category)
						{
							echo "<option>";
							echo $category["category"];
							echo "</option>";
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="item">Item</label>
					<input class = 'form-control'  type="text" name="item" required="" />
				</div>
				<div class="form-group">
					<label for="amount">Amount</label>
					<input class = 'form-control'  type="text" name="price" required=""/>
				</div>

				<input class = 'btn btn-primary btn-block'  type="submit" class="btn" value="Add Record"/>
			</div>
			<div class="col-md-3 order-md-1">
				<?php require("../templates/member_menu.php") ?>
			</div>
		</div>
	</div>
</form>