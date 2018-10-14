<head>
	<?php if (isset($title)): ?>
		<title>Online Expense Manager : <?= htmlspecialchars($title) ?></title>
		<?php else: ?>
			<title>Online Expense Manager</title>
		<?php endif ?>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet"/>
		<script type="text/javascript" src="js/popper.min.js" defer=""></script>
		<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js" defer=""></script>
		<script type="text/javascript" src="js/bootstrap.min.js" defer=""></script>
		<script type="text/javascript" src="js/main.js" defer=""></script>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<a class="navbar-brand" href="#">Expense Manager</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="members.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
