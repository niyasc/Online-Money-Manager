<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if(!empty($_SESSION["uname"]))
    {
    	if(empty($_GET["page"]) or ($_GET["page"]=="statistics"))
    	{	$start=query("select start from accounts where uname=?",$_SESSION["uname"]);
    		$end=query("select end from accounts where uname=?",$_SESSION["uname"]);
    		if($start[0]["start"]==NULL)
    		{
    			$start=query("select min(Day) from expense where User=(select id from accounts where uname=?)",$_SESSION["uname"]);
    			$end=query("select max(Day) from expense where User=(select id from accounts where uname=?)",$_SESSION["uname"]);
    			$start=$start[0]["min(Day)"];
    			$end=$end[0]["max(Day)"];
    		}
    		else
    		{
    			$start=$start[0]["start"];
    			$end=$end[0]["end"];
    		}
    		$total=query("select sum(Expense) from expense where User=(select id from accounts where uname=?) and Day>=? and Day<=?",$_SESSION["uname"],$start,$end);
    		$days=query("select datediff(?,?)",$end,$start);
    		//print_r($total);
    		$total=$total[0]["sum(Expense)"];
    		$days=$days[0]["datediff(?,?)"];
    		if($days==0)
    		{
    			$average=$total;
    		}
    		else
    		{
    			$average=$total/$days;
    		}
    		//print $days;
    		//print $total;
    		render("statistics.php",["title"=>"Statistics","total"=>$total,"average"=>$average,"days"=>$days,"start"=>$start,"end"=>$end]);
    	}
    	else if($_GET["page"]=="add_record")
    	{
    		$categories=query("select category from categories where uid=(select id from accounts where uname=?)",$_SESSION["uname"]);
    		render("add_record.php",["title"=>"Add Record","categories"=>$categories]);
    	}
    	else if($_GET["page"]=="show_records")
    	{
    		if(!empty($_GET["date1"])&&!empty($_GET["date2"]))
    		{
    			$start=$_GET["date1"];
    			$end=$_GET["date2"];
    			$records=query("select Item,Day,Expense from expense where User=(select id from accounts where uname=?) and Day>=? and Day<=? order by Day asc",$_SESSION["uname"],$start,$end);
    		}
    		else
    		{
    			$start=query("select start from accounts where uname=?",$_SESSION["uname"]);
    		$end=query("select end from accounts where uname=?",$_SESSION["uname"]);
    		if($start[0]["start"]==NULL)
    		{
    			$start=query("select min(Day) from expense where User=(select id from accounts where uname=?)",$_SESSION["uname"]);
    			$end=query("select max(Day) from expense where User=(select id from accounts where uname=?)",$_SESSION["uname"]);
    			$start=$start[0]["min(Day)"];
    			$end=$end[0]["max(Day)"];
    		}
    		else
    		{
    			$start=$start[0]["start"];
    			$end=$end[0]["end"];
    		}
    			$records=query("select Item,Day,Expense,Category from expense where User=(select id from accounts where uname=?) and Day>=? and Day<=? order by Day asc",$_SESSION["uname"],$start,$end);
    		}
    		$categories=query("select category from categories where uid=(select id from accounts where uname=?)",$_SESSION["uname"]);
    		render("show_records.php",["title"=>"Show Records","records"=>$records,"from"=>$start,"to"=>$end,"categories"=>$categories]);
    	}
    	else
    	{
    		echo "page not found";
    	}
    	
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["uname"]))
        {
            render("login_form.php", ["title" => "Log In","error"=>"Please provide user name"]);
        }
        else if (empty($_POST["password"]))
        {
            render("login_form.php", ["title" => "Log In","error"=>"Please provide a password"]);
        }

        // query database for user
        $rows = query("SELECT * FROM accounts WHERE uname = ? and password=password(?)", $_POST["uname"],$_POST["password"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
        	$_SESSION["uname"]=$_POST["uname"];
        	redirect("members.php");
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
