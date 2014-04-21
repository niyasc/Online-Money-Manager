<?php

    // configuration
    require("../includes/config.php"); 

    $news = query("select id, title, day from news order by day limit 0,10");
    render("home.php",["title"=>"Home Page", "news" => $news]);

?>
