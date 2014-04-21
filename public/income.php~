<?php
	require("../includes/config.php"); 
	
	if(!empty($_SESSION["uname"]))
	{
		if(empty($_POST["source"]))
		{
			$id = query("select id from accounts where uname = ?",$_SESSION["uname"]);
			$id = $id["0"]["id"];
			$records = query("select * from income where id = ?", $id);
			render("income.php", ["title"=>"Income records", "records"=>$records]);
		}
		else
		{
			$id = query("select id from accounts where uname = ?",$_SESSION["uname"]);
			$id = $id["0"]["id"];
			query("insert into income values(?, ?, ?, ?)", $id, $_POST["date"], $_POST["source"], $_POST["amount"]);
			$cb = query("select balance from accounts where id = ?", $id);
			$cb = $cb["0"]["balance"];
			$nb = $cb+$_POST["amount"];
			query("update accounts set balance=? where id=?",$nb, $id);
			$records = query("select * from income where id = ?", $id);
			render("income.php", ["title"=>"Income records", "records"=>$records]);
		}
	}
	else
	{
		render("login_form.php", ["title"=>"Log In"]);
	}
