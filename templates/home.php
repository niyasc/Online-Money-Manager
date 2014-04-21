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
					<td style="text-align:justify;font-size:20px;">
						<div id="comslider_in_point_214345"></div><script type="text/javascript">var oCOMScript214345=document.createElement('script');oCOMScript214345.src="http://commondatastorage.googleapis.com/comslider/target/users/1398099616xef15dfdc4f22301cf9b2a470cc9c96ba/comslider.js?timestamp=1398100013";oCOMScript214345.type='text/javascript';document.getElementsByTagName("head").item(0).appendChild(oCOMScript214345);</script>
					</td>
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
