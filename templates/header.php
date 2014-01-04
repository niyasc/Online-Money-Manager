<header>
        <?php if (isset($title)): ?>
            <title>Online Expense Manager : <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Online Expense Manager</title>
        <?php endif ?>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        
</header>
<body bgcolor=black>
<a href=../html>
<table class='header-bg'>
	<tr>
		<td>
			<div class='header'>
			Expense Manager
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class='promo'>
			Record and track your expenses online
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="text-align:center">
    			<div class="btn-group">
    				<a class='btn' href='./home.php'>Home</a>
    				<a class='btn' href='members.php'>Manage Expenses</a>
    				<a class='btn' href='about.php'>About Us</a>
    			</div>
			</div>
		</td>
	</tr>
</table>
</a>
