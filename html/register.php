<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["email"]))
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide a email"]);
        }
        else if (empty($_POST["password"]))
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide a password"]);
        }
	else if ($_POST["password"]!=$_POST["confirmation"])
        {
            render("register_form.php", ["title" => "Register","error"=>"Passwords donot match"]);
        }
        else if (empty($_POST["fname"]))
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide first name"]);
        }
        else if (empty($_POST["lname"]))
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide last name"]);
        }
        else if (empty($_POST["department"]))
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide department"]);
        }
        else if (empty($_POST["phone-delhi"]))
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide phone number"]);
        }
        else if (empty($_POST["phone-kerala"]))
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide phone number"]);
        }
        else if (empty($_POST["phone-kerala"]))
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide location in kerala"]);
        }
        else if ($_POST["course"]=='none')
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide a course"]);
        }
        else if ($_POST["passout-year"]=='none')
        {
            render("register_form.php", ["title" => "Register","error"=>"Please provide a passout year"]);
        }
        else
        {
        	if(empty($_POST["show-delhi"]))
       	{
       		$show_delhi=False;
       	}
       	else
       	{
       		$show_delhi=True;
       	}
       	if(empty($_POST["show-kerala"]))
       	{
       		$show_kerala=False;
       	}
       	else
       	{
       		$show_kerala=True;
       	}
        // query database for user
       $rows = query("SELECT * FROM members WHERE email = ?", $_POST["email"]);
       	if(count($rows)==1)
       	{
       		 render("register_form.php", ["title" => "Register","error"=>"email already taken"]);
       	}
       	else{
       	
       		query("insert into members(email,password,fname,lname,course,department,passout_year,phone_delhi,show_delhi,phone_kerala,show_kerala,location) values(?,password(?),?,?,?,?,?,?,?,?,?,?)", $_POST["email"],$_POST["password"],$_POST["fname"],$_POST["lname"],$_POST["course"],$_POST["department"],$_POST["passout-year"],$_POST["phone-delhi"],$show_delhi,$_POST["phone-kerala"],$show_kerala,$_POST["location"]);
		//print_r($_POST);
        	render("message.php",["title"=>"Regisration success","message"=>"You have been registered succesfully"]);
    		}
        }
        
       
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Log In"]);
    }

?>
