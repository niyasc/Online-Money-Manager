<div class='content'>
<table class='table table-bordered table-striped' style="width:1200px; margin-left:auto;margin-right:auto;">
	<tr>
		<td >
			<table class='table table-bordered table-striped' style="width:750px; margin-left:auto;margin-right:auto;height:100%">
				<tr>
					<td>
						<h2>
						Record and Track Your Expenses
						</h2>
					</td>
				</tr>
				<tr>
					
				</tr>
			</table>
		</td>
		<td>
			<table class='table table-bordered table-striped' style="width:400px; margin-left:auto;margin-right:auto;height:100%">
				<tr>
					<td style="height:20px">
						<h4>
						News & Updates
						</h4>
					</td>
				</tr>
				<tr>
					<td>
					
						<ul>
							<?php
								foreach($news as $new)
								{
									echo "<li> <a href='news_detailed.php?id=".$new['id']."'>".$new['title']."</a> </li>";
								}
							?>
						</ul>
						<div style= "text-align:center">
							<a href='news-list.php'> View All News</a>
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>
