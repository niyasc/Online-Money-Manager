<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["uname"]))
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide a username"]);
        }
        else if (empty($_POST["password"]))
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide a password"]);
        }
	else if ($_POST["password"]!=$_POST["confirmation"])
        {
            render("register_form.php", ["title" => "Register","error"=>"Passwords donot match"]);
        }
        else{
        // query database for user
       $rows = query("SELECT * FROM accounts WHERE uname = ?", $_POST["uname"]);
       	if(count($rows)==1)
       	{
       		 render("register_form.php", ["title" => "Register","error"=>"Username already taken"]);
       	}
       	else
       	{
       	
       		query("insert into accounts(uname,password) values(?,password(?))",$_POST["uname"],$_POST["password"]);
       		$id=query("select id from accounts where uname=?",$_POST["uname"]);
       		$id=$id[0]["id"];
       		query("insert into categories values(?,'Other')",$id);
       		redirect("account_created.php");
        	//redirect("members.php");
    	}
    	}
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Log In"]);
    }

?>
