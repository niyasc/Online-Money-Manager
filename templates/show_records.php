<?php
	$records=$values["records"];
	
	//print_r($records);
?>
<script type="text/javascript">
function isValidDate(date_val)
{
        var matches = /(\d{4})[-\/](\d{2})[-\/](\d{2})/.exec(date_val);

        if (matches == null)
         {
            alert("Enter Date of birth in YYYY-MM-DD format")
            return false;
         }
         return true;
}

function checkDates() {
  var to = document.getElementsByName('date2')[0].value;
  var from = document.getElementsByName('date1')[0].value;
  var curdate=new Date();
  if(to>curdate||to<from||from==''||to==''||!isValidDate(to)||!isValidDate(from))
  {
  	alert('Please verify dates!');
  	return false;
  }
}
</script>
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
					<td>
						<form action='members.php' method='GET' onsubmit="return checkDates()"> 
						<input type='hidden' name='page' value='show_records'>
						<table class='table table-striped table-bordered' style='width:100%'>
							<tr>
								<td>
									From
								</td>
								<td>
									<input type='date' name='date1' value="<?=$values['from']?>">
								</td>
								<td>
									Upto
								</td>
								<td>
									<input type='date' name='date2' value="<?=$values['to']?>">
								</td>
								<td>
									<input type='submit' value='Refresh'>
								</td>
							</tr>
						</table>
						</form>
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
