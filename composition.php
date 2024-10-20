<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="Creative Commons Showcase" name="description">
	<meta content="Creative Commons, images, gallery" name="keywords">
	<meta content="Flynn Nisbett" name="author">
	<meta content="width=device-width,initial-scale=1.0" name="viewport">
	<title>Current Members of Parliament</title><!-- Edit the link below / replace with your chosen google font -->
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="css/layout.css" rel="stylesheet">
	<link href="css/simple-lightbox.css" rel="stylesheet"><!-- Edit the name of your style sheet 'foo' is not a valid name!! -->
	<link href="css/layout.css" rel="stylesheet">
	<link href="css/navigation.css" rel="stylesheet"><!-- Link to JQuery -->

	<script src="js/j_query_min.js">
	</script>
</head>
<body>
<div class="wrapper">
		<div class="header"><img alt="s" class="responsive" src="images/header.png"></div><!-- / logo -->
		<div class="nav">

		
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a class="dropbtn" href="about.php">About<i class="fa fa-chevron-down"></i></a>
					<ul class="dropdown">
						<li>
							<a href="structure.php">Structure</a>
						</li>
						<li>
							<a href="powers.php">Powers</a>
						</li>
						<li>
							<a href="history.php">History</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="composition.php">Composition</a>
				</li>
				<li>
					<a href="login.php">Login</a>
				</li>
			</ul>
		</div>

		<div class="box main">
			<div class="info-text">
			<body>
    <h1>Current composition</h1>
    <p> Composition image </p>
    <p> Database </p>	

</div><!-- /info text -->
		</div><!-- /main div -->
		<div class="box footer">
			CC yourname 20XX
		</div>
	</div><!--/wrapper -->
	<!-- add jquery to bottom of pages -->
	<script>
	   $('.dropbtn').click(function()
	       {
	           $('dropdown').toggleClass('display');

	       }
	   )

	   // Make navigation button clickable

	   $('.fa-bars').click(function()
	   {
	       $('.menu-content').toggle();

	   })
	</script>
</body>
</html>