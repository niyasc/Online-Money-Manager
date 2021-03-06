<?php
	require("../includes/config.php"); 
	
	if(!empty($_SESSION["uname"]))
	{
		
		if(!empty($_POST["second"]))
		{
			$uid = query("select id from accounts where uname = ?",$_SESSION["uname"]);
			$uid = $uid["0"]["id"];
			query("insert into debit(uid, day, otherparty, amount,status) values(?, ?, ?, ?,'0')", $uid, $_POST["date"], $_POST["second"], $_POST["amount"]);
			$cb = query("select balance from accounts where id = ?", $uid);
			$cb = $cb["0"]["balance"];
			$nb = $cb-$_POST["amount"];
			query("update accounts set balance=? where id=?",$nb, $uid);
			$records = query("select * from debit where uid = ?", $uid);
			render("debits.php", ["title"=>"Debit records", "records"=>$records, "message"=>"Record closed"]);
		}
		else if(!empty($_GET["action"]))
		{
			$id = $_GET["id"];
			query("update debit set status='1' where id=?",$id);
			$amount = query("select amount from debit where id=?",$id);
			$amount = $amount["0"]["amount"];
			
			$uid = query("select id from accounts where uname = ?",$_SESSION["uname"]);
			$uid = $uid["0"]["id"];
			
			$cb = query("select balance from accounts where id = ?", $uid);
			$cb = $cb["0"]["balance"];
			$nb = $cb+$amount;
			query("update accounts set balance=? where id=?",$nb, $uid);
			
			$records = query("select * from debit  where uid = ?", $uid);
			render("credits.php", ["title"=>"Debit records", "records"=>$records,"message"=>"Record Added"]);
		}
		else
		{
			$uid = query("select id from accounts where uname = ?",$_SESSION["uname"]);
			$uid = $uid["0"]["id"];
			$records = query("select * from debit  where uid = ?", $uid);
			render("debits.php", ["title"=>"Debit records", "records"=>$records]);
		}
	}
	else
	{
		render("login_form.php", ["title"=>"Log In"]);
	}
