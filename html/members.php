<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if(!empty($_SESSION["email"]))
    {
    	if(empty($_GET["view"]))
    	{
    		$info=query("select * from members where email=?",$_SESSION["email"]);
    		$info=$info[0];
    		render("show_profile.php",["title"=>"Member profile","info"=>$info]);
    	}
    	else if($_GET["view"]=="profile")
    	{
    		$info=query("select * from members where email=?",$_SESSION["email"]);
    		$info=$info[0];
    		render("show_profile.php",["title"=>"Member profile","info"=>$info]);
    	}
    	else if($_GET["view"]=="member_list")
    	{
    		$info=query("select * from members order by fname");
    		render("list_members.php",["title"=>"Member List","info"=>$info]);
    	}
    	else if($_GET["view"]=="show_member")
    	{
    		$info=query("select * from members where id=?",$_GET["id"]);
    		$info=$info[0];
    		render("show_member.php",["title"=>"Show Member","info"=>$info]);
    	}
    	
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["email"]))
        {
            render("login_form.php", ["title" => "Log In","error"=>"Please provide email id"]);
        }
        else if (empty($_POST["password"]))
        {
            render("login_form.php", ["title" => "Log In","error"=>"Please provide a password"]);
        }

        // query database for user
        $rows = query("SELECT * FROM members WHERE email = ? and password=password(?)", $_POST["email"],$_POST["password"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
        	$_SESSION["email"]=$_POST["email"];
    		$info=query("select * from members where email=?",$_SESSION["email"]);
    		$info=$info[0];
    		render("show_profile.php",["title"=>"Member profile","info"=>$info]);
        }
        else
        {
        	render("login_form.php", ["title" => "Log In","error"=>"Invalid username or password"]);
        }
    }
    else
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }

?>
