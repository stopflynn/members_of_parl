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
    <h1>Parliament and the Courts: Understanding their powers</h1>
    <p>The New Zealand Parliament and the judiciary are two fundamental pillars of our democracy, each with distinct roles and responsibilities. While Parliament has the authority to make laws, the courts interpret and apply these laws. Understanding the relationship between these two institutions is crucial for appreciating the checks and balances within our political system.</p>

    <h2>Legislative Power</h2>
    <p>As the supreme legislative body, the New Zealand Parliament has the authority to:</p>
    <ul>
        <li><strong>Make Laws:</strong> Parliament enacts legislation that forms the basis of New Zealand's legal framework. Bills are proposed, debated, and passed through the House of Representatives before receiving royal assent to become law.</li>
        <li><strong>Amend Laws:</strong> Parliament can amend existing laws to address new issues, reflect societal changes, or correct deficiencies in current legislation.</li>
        <li><strong>Repeal Laws:</strong> Parliament has the power to repeal outdated or unnecessary laws, ensuring the legal system remains relevant and effective.</li>
    </ul>

    <h2>Judicial Independence</h2>
    <p>The judiciary operates independently of Parliament to ensure fair and impartial administration of justice. Key principles include:</p>
    <ul>
        <li><strong>Interpretation of Laws:</strong> Courts interpret and apply laws passed by Parliament, ensuring they are implemented correctly and justly.</li>
        <li><strong>Judicial Review:</strong> Courts have the authority to review the actions of public bodies, including Parliament, to ensure they comply with the law and respect individual rights.</li>
        <li><strong>Independence:</strong> Judges are appointed to act without interference from Parliament or the executive, maintaining the separation of powers essential for a functioning democracy.</li>
    </ul>

    <h2>Checks and Balances</h2>
    <p>The relationship between Parliament and the courts is governed by a system of checks and balances designed to prevent abuse of power:</p>
    <ul>
        <li><strong>Rule of Law:</strong> Both Parliament and the courts operate under the rule of law, which ensures that all actions are grounded in law and that legal principles are upheld.</li>
        <li><strong>Judicial Oversight:</strong> Courts can review legislation to ensure it complies with higher laws, such as the New Zealand Bill of Rights Act 1990, and can provide interpretations that guide the application of laws.</li>
        <li><strong>Parliamentary Sovereignty:</strong> While courts can interpret and review laws, Parliament retains the ultimate authority to make and amend legislation.</li>
    </ul>

    <h2>Engaging with the Process</h2>
    <p>Citizens play a crucial role in this system by participating in the legislative process and holding both Parliament and the judiciary accountable. You can:</p>
    <ul>
        <li><strong>Submit to Select Committees:</strong> Provide input on proposed legislation during public consultations.</li>
        <li><strong>Engage with MPs:</strong> Contact your local MP to discuss concerns or support for legislative initiatives.</li>
        <li><strong>Stay Informed:</strong> Follow court cases and legal developments that impact your rights and society.</li>
    </ul>

    <p>For more information on the powers of the New Zealand Parliament and the judiciary, visit the <a href="https://www.parliament.nz/en/" target="_blank">official New Zealand Parliament website</a> and the <a href="https://www.courtsofnz.govt.nz/" target="_blank">New Zealand Courts website</a>.</p>

    <p>Understanding the balance of power between Parliament and the courts helps ensure a robust and fair democratic system for all New Zealanders.</p>
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