<table class = 'table table-bordered' style="width:1200px; margin-left:auto; margin-right:auto;">
	<tr >
		<td >
			<ul>
			<?php
				//print_r($values);
				foreach($values["news"] as $new)
				{
					echo "<li> <a href='news_detailed.php?id=".$new['id']."'>".$new['title']."</a> </li>";
				}
			?>
			</ul>
		</td>
	</tr>
</table>
