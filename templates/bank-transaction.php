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
					<h3>Bank Transactions</h3>
					</td>
				</tr>
				<tr>
					<td>
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
									Type of transaction
								</td>
								<td>
									<select class='form-control' name='type'>
										<option>Deposit</option>
										<option>Withdraw</option>
										<option>Transfer</option>
										<option>Deduction</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									Description
								</td>
								<td>
									<input class = 'form-control' type = 'text' name = 'description'>
								</td>
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
					</td>
				</tr>
				
			</table>
		</td>
	</tr>
</table>
</div>
