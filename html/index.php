<?php

    // configuration
    require("../includes/config.php"); 

    // render portfolio
    if(!empty($_SESSION["uname"]))
    	redirect("members.php");
    else
    	redirect("home.php");

?>
