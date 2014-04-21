<?php
	require("../includes/config.php"); 
	if(isset($_GET["id"]))
	{
		$news = query("select title, day,content from news where id = ?", $_GET["id"]);
		if(count($news)==0)
			redirect("home.php");
		else 
		{
			$news_list = query("select id, title, day from news order by day limit 0,10");
			render("news_detailed.php", [ "title" => $news[0]["title"], "news" => $news[0], "list" => $news_list]);
		}
	}
	else
		redirect("home.php");
?>
