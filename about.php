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
			<h1>Overview of the New Zealand Parliament</h1>
    <p>The New Zealand Parliament is the country's supreme legislative body, consisting of the Sovereign (the monarch or their representative, the Governor-General) and the House of Representatives. It operates under a mixed-member proportional (MMP) electoral system.</p>
    
    <h2>Key Components</h2>
    
    <h3>The Sovereign</h3>
    <ul>
        <li><strong>Role:</strong> The Sovereign is the formal head of state, performing ceremonial duties. The monarch is represented in New Zealand by the Governor-General.</li>
        <li><strong>Governor-General:</strong> The Governor-General gives royal assent to bills, opens and dissolves Parliament, and appoints the Prime Minister.</li>
    </ul>
    
    <h3>The House of Representatives</h3>
    <ul>
        <li><strong>Composition:</strong> The House has 120 Members of Parliament (MPs), elected every three years through the MMP system.</li>
        <li><strong>Electoral System:</strong> Voters cast two votes: one for a political party and one for a local electorate MP. This system ensures proportional representation.</li>
    </ul>
    
    <h2>Functions of Parliament</h2>
    
    <h3>Legislation</h3>
    <ul>
        <li><strong>Passing Laws:</strong> Parliament's primary role is to pass laws. Bills are introduced, debated, and voted on in the House of Representatives. Once a bill passes all stages, it receives royal assent and becomes law.</li>
    </ul>
    
    <h3>Government Formation</h3>
    <ul>
        <li><strong>Majority Rule:</strong> The political party or coalition with the majority of seats in the House forms the government. The leader of this party is appointed Prime Minister by the Governor-General.</li>
    </ul>
    
    <h3>Oversight and Accountability</h3>
    <ul>
        <li><strong>Questioning:</strong> Parliament holds the government accountable through questioning, debates, and select committees.</li>
        <li><strong>Committees:</strong> Select committees scrutinize legislation, government policies, and public spending.</li>
    </ul>
    
    <h3>Representation</h3>
    <ul>
        <li><strong>Constituent Interests:</strong> MPs represent their constituents' interests, bringing local issues to national attention.</li>
    </ul>
    
    <h2>Select Committees</h2>
    <ul>
        <li><strong>Role:</strong> Select committees play a crucial role in reviewing legislation and government activities. They consist of MPs from different parties and cover various policy areas, such as finance, health, and education.</li>
        <li><strong>Public Engagement:</strong> Committees often invite public submissions and hold hearings, allowing citizens to participate in the legislative process.</li>
    </ul>
    
    <p>This structure ensures that New Zealand's parliamentary system is democratic, transparent, and representative of its citizens' diverse views.</p>

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