<?php
	require("../includes/config.php"); 
	$news = query("select id, title, day from news order by day desc");
	render("news_list.php", [ "title" => "News Feed", "news" => $news]);
?>
