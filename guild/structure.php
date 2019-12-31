<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 

<head><title>Istara's Chosen - Guild Structure</title>
	<!-- SCRIPTS -->
		<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
		<link rel="icon" type="image/png" href="../images/favicon32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="../images/favicon16.png" sizes="16x16" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- END SCRIPTS -->

<!-- HEADER IMAGE -->
	<a href="../index.php"><img src="../images/istaras_chosen_logo.png" id="logo" /></a>
	<img src="../images/header_screenshot.png" id="headerscreenshot" />
<!-- END HEADER IMAGE -->
</head>
<body onload="homeNavigation(); sidebar();">
<section>
	<!--BEGIN NAVIGATION -->
	<div class="navbox">
		<?php include("../navigation.html");?>
	</div>
	<!-- END NAVIGATION -->
	<article>
		<center><img style="max-width:75%;" src="../images/guildstructure.png"/></center>
			<center><i><a href="index.php">&larr; Return to Guild Information</a></i></center>
		<div class="seperator"></div>
			<p>Below are all of the ranks in the guild, their available actions, and their use. If you are looking for a list of people in each rank, please see <a href="members.php">the members page</a>.</p>
		<header class="subsection border">Ranks</header>
			<br/>
			<b>Overseer</b>
			<br/>
			<p>Overseers are co-guildmasters and is reserved for foundational members who have and continue to be an outstanding support for the guild.</p>
			<p>Overseer's available actions:</p>
			<ul>
				<li>Remove member</li>
				<li>Add member</li>
				<li>Edit ranks structure</li>
				<li>Edit command structure</li>
				<li>Edit mission statement</li>
				<li>Change rank</li>
				<li>Award points</li>
				<li>Edit URL</li>
				<li>Edit event</li>
				<li>Add event</li>
				<li>Remove event</li>
				<li>Edit quote</li>
				<li>Edit MOTD</li>
			</ul>
			<b>Preserver</b>
			<br/>
			<p>This is the main officer rank. This rank is for members who have proven to be exceptionally trust-worthy. Anyone in this rank know what they are doing and should provide help when called upon if at all possible.</p>
			<p>Preserver's available actions:</p>
			<ul>
				<li>Remove member</li>
				<li>Add member</li>
				<li>Change rank</li>
				<li>Award points</li>
				<li>Edit event</li>
				<li>Add event</li>
				<li>Edit MOTD</li>
			</ul>
			<b>Guardian</b>
			<br/>
			<p>This is the rank between protector and officer that allows for some minor guild organisational benefits but without the overarching power that the higher ranks have.</p>
			<p>Guardian's available actions:</p>
			<ul>
				<li>Add member</li>
				<li>Edit event</li>
				<li>Add event</li>
				<li>Change rank</li>
				<li>Award points</li>
			</ul>
			<b>Protector</b>
			<br/>
			<p>The average member rank. This rank is for members who have played long enough to be of service to the guild. In this rank, you are expected to be helpful where possible and active semi-regularly.</p>
			<p>Protector's available actions:</p>
			<ul>
				<li>Add member</li>
				<li>Edit event</li>
				<li>Add event</li>
			</ul>
			<b>Apprentice</b>
			<br/>
			<p>The newest member rank. This rank is for members who haven't quite proven themselves yet, though we trust that you will strive to improve and the guild is here to help you do that.</p>
			<p>Apprentice's available actions:</p>
			<ul>
				<li>Add event</li>
			</ul>
			<b>Inactive</b>
			<br/>
			<p>This rank is the temporary default for new and unconfirmed members until a higher-ranking player can update their rank. This rank is also a warning sign for players who have been inactive too long and are possibly on the chopping block the next time the guild purges inactive members.</p>
			<p>If you are in this rank and have either never been promoted or have been demoted to here, let someone in the Guardian, Preserver, or Overseer ranks know to get your rank changed.</p>
			<p>Inactive's available actions:</p>
			<ul>
				<li>None</li>
			</ul>
</article>
	<!--BEGIN SIDEBAR -->
	<div class="sidebarbox">
		<?php include("../sidebar.html");?>
	</div>
	<!-- END SIDEBAR -->
</section>
<script src="../script.js"></script>
</body>
</html>