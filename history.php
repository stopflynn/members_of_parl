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
			<h1>History of the New Zealand Parliament</h1>
    <p>The New Zealand Parliament has a rich history that reflects the country's journey towards democracy, independence, and inclusive governance. Understanding this history provides valuable insights into how our parliamentary system has evolved to meet the needs of all New Zealanders.</p>

    <h2>Early Beginnings</h2>
    <p>The roots of the New Zealand Parliament date back to the early 19th century:</p>
    <ul>
        <li><strong>1840 - Treaty of Waitangi:</strong> Signed between the British Crown and various Māori chiefs, the Treaty of Waitangi established British sovereignty over New Zealand and laid the foundation for the country's legal and political systems.</li>
        <li><strong>1852 - New Zealand Constitution Act:</strong> This Act, passed by the British Parliament, established the framework for representative government in New Zealand, creating a bicameral General Assembly consisting of a Legislative Council and a House of Representatives.</li>
    </ul>

    <h2>Development of Parliamentary Democracy</h2>
    <p>As New Zealand grew, so did its parliamentary system:</p>
    <ul>
        <li><strong>1854 - First Parliament:</strong> The first New Zealand Parliament met in Auckland. The initial structure included an appointed Legislative Council and an elected House of Representatives.</li>
        <li><strong>1867 - Māori Representation Act:</strong> This Act established four Māori electorates, ensuring representation for Māori in Parliament.</li>
        <li><strong>1876 - Abolition of Provinces:</strong> The provincial government system was abolished, centralizing legislative power within the national Parliament.</li>
    </ul>

    <h2>Moves Towards Independence</h2>
    <p>New Zealand's parliamentary system continued to evolve, reflecting its growing independence from Britain:</p>
    <ul>
        <li><strong>1947 - Statute of Westminster Adoption Act:</strong> This Act marked New Zealand's legislative independence from the British Parliament, allowing New Zealand to amend its own constitution.</li>
        <li><strong>1950 - Abolition of the Legislative Council:</strong> The upper house of Parliament was abolished, making New Zealand's Parliament unicameral, consisting solely of the House of Representatives.</li>
    </ul>

    <h2>Modern Developments</h2>
    <p>Recent decades have seen significant changes aimed at enhancing democratic representation and governance:</p>
    <ul>
        <li><strong>1993 - Introduction of MMP:</strong> The mixed-member proportional (MMP) electoral system was adopted following a public referendum. This system ensures that the composition of Parliament more accurately reflects the votes of the electorate.</li>
        <li><strong>2003 - Supreme Court Act:</strong> This Act established the Supreme Court of New Zealand as the highest court, replacing the Privy Council in London and further asserting judicial independence.</li>
        <li><strong>2020 - Diversity in Parliament:</strong> The 2020 general election saw the most diverse Parliament in New Zealand's history, with increased representation for women, Māori, Pasifika, and other minority groups.</li>
    </ul>

    <h2>Parliament Today</h2>
    <p>Today, the New Zealand Parliament continues to adapt and grow, reflecting the dynamic and diverse society it represents. Key features include:</p>
    <ul>
        <li><strong>Commitment to Inclusivity:</strong> Ongoing efforts to ensure that Parliament represents all New Zealanders, including traditionally underrepresented communities.</li>
        <li><strong>Engagement with Citizens:</strong> Promoting public participation in the legislative process through consultations, submissions, and direct engagement with MPs.</li>
        <li><strong>Transparency and Accountability:</strong> Ensuring that parliamentary proceedings are open and transparent, with robust mechanisms for holding the government accountable.</li>
    </ul>

    <p>For more information on the history and functioning of the New Zealand Parliament, please visit the <a href="https://www.parliament.nz/en/" target="_blank">official New Zealand Parliament website</a>.</p>

    <p>Understanding the history of our Parliament helps us appreciate the foundations of our democratic system and the ongoing efforts to build a fairer and more inclusive New Zealand.</p>


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