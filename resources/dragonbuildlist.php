<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 

<head><title>IC - Dragon Build List</title>
	<!-- SCRIPTS -->
		<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
		<link rel="icon" type="image/png" href="../images/favicon32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="../images/favicon16.png" sizes="16x16" />
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
		<header class="article border">Dragon Build List</header>
		<p style="font-size:.75em">Written by Racktor, February 17th 2020</p>
			<br/>
			<center><i><a href="index.php">&larr; Return to Guides</a></i></center>
			<br/>
			<ul>
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#melee">Melee</a></li>
				<li><a href="#caster">Caster</a></li>
				<li><a href="#hybrid">Hybrid</a></li>
			</ul>
		<a name="introduction"><header class="subsection border">Introduction</header></a>
			<p>This resource is a simple page that compiles information from other more in-depth guides for quick reference. If you want to read more into the builds listed here and the thought process to forming them, please see the <a href="dragonbuilds.php" target="_blank">Introduction to Dragon Builds</a> page and, later, the Meta Dragon Builds page.</p>
			<p>Builds will include scales, claws, and - for hybrid and caster builds - spells. As of right now, this is a work in progress and not completed.</p>
		<a name="melee"><header class="subsection border">Melee</header></a>
			<?php include("../resources/builds/dragon_default_melee.html");?>
		<a name="caster"><header class="subsection border">Caster</header></a>
			<?php include("../resources/builds/dragon_default_caster.html");?>
	</article>
	<!--BEGIN SIDEBAR -->
	<script src="../script.js"></script>
	<div class="sidebarbox">
		<?php include("../sidebar.html");?>
	</div>
	<!-- END SIDEBAR -->
</section>
</body>
</html>