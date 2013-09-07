<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	if(empty($_POST["date"]) or empty($_POST["item"]) or empty($_POST["price"]))
    	{
    		render("add_record.php",["title"=>"Add Record","error"=>"Please fill all entries"]);
    	}
    	else if(!is_valid_date($_POST["date"]))
    	{
    		render("add_record.php",["title"=>"Add Record","error"=>"Invalid Date format"]);
    	}
    	else 
    	{
    		query("insert into expense(User,Item,Day,Expense) values((select id from accounts where uname=?),?,?,?)",$_SESSION["uname"],$_POST["item"],$_POST["date"],$_POST["price"]);
    		render("add_record.php",["title"=>"Add Record","message"=>"Value added successfully"]);
    	}
    }
    else
    {
    	print "something went wrong";
    }
    	
