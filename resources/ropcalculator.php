<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 

<head><title>Istara's Chosen - RoP Calculator</title>
	<!-- SCRIPTS -->
		<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
		<link rel="icon" type="image/png" href="../images/favicon32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="../images/favicon16.png" sizes="16x16" />
	<!-- END SCRIPTS -->

<!-- HEADER IMAGE -->
	<a href="../index.php"><img src="../images/istaras_chosen_logo.png" id="logo" /></a>
	<img src="../images/header_screenshot.png" id="headerscreenshot" />
	<script src="../script.js"></script>
<!-- END HEADER IMAGE -->
</head>
<body>
<section>
	<!--BEGIN NAVIGATION -->
	<div class="navbox">
		<?php include("../navigation.html");?>
	</div>
	<!-- END NAVIGATION -->
	<article>
		<header class="article border">Rite of Passage Calculator</header>
	<p style="font-size:.75em">Last Updated by Racktor, November 27th, 2019</p>
			<br/>
			<center><i><a href="index.php">&larr; Return to Resources</a></i></center>
			<br/>
		<header class="article border">Calculator</header>
			<div class="equipmentbox">
			<div class="equipmentbox-item"><p>Please enter your character's information below.</p>
			<p><b>Adventure Level</b> </br></br>
				<input type="number" name="level" id="alevel" min="30" max="100" value="30"></p>
			<p><b>Faction</b> </br> </br>
				<input type="radio" name="faction" id="lunus" value="lunus" checked>Lunus<br>
				<input type="radio" name="faction" id="helian" value="helian">Helian
			</p>
			<p><button onclick="validationCheck()">Calculate</button></p></div>
			<div class="equipmentbox-item"><p id="output"></p></div>
			</div>
			
		<header class="article border">Reaching The Skill Shown</header>
			<p>The calculator assumes a few things. As long as you follow the list below, you should be able to hit the listed skill.			</p> 
			<ul>
				<li><b>Scales.</b> You need your tier's best <u>Power</u> scales techniqued with the correct skill. Not armor, not strength, not focus - power. It makes a slight difference that can throw you off in tight numbers.</li>
				<li><b>Buffs.</b> You need to be buffed with Primal Roar and Promote Intellect. The Promote Intellect is based on your <i>tier</i>, meaning you may need someone else to cast it on you if you cannot scribe your tier's Promote Intellect.</li>
				<li><b>Masteries.</b> For Helians, every 10 levels, you can do a quest that gives you +10 Spellcrafting skill, starting at level 10. You are expected to have as many as you can get.</li>
				<li><b>Machine.</b> Helians are expected to stand at a T6 Machine. Only lairs can have T6 machines, so ask your server's community for the easiest one to access.</li>
			</ul>
			<p>If you have your masteries, are wearing your scales, standing at a machine, and are buffed, you'll be fine. The calculator rounds down at every point just in case to avoid rounding errors. If you are one or two skill off, a buff from a biped should fix it.</p>
			<p>More experienced players may notice I've left out al ot of possible buffs - if I were to calculate literally everything, you could probably get level 20 minimum at every level. However, it's just not helpful to say 'you can get level 20 if you acquire every item in the game' so I left it at dragon-centric, self-acquired items. Tool claws and cogs were also excluded, partly by choice and partly by oversight.</p>
		<header class="article border">How It Works</header>
			<p>While there are many things you craft in the RoP, the main sticklers will always be the Obsidian Mirror for Lunus at 300 Transmutation and the Prismatic Focus for Helians at 450 Spellcraft. If you can hit those two numbers, you can hit everything else. I've based this calculator off of that rule, a few assumptions, and a lot of math.</p>
			<p>The assumptions are as follows.</p>
			<ul>
				<li><b>You gain Transmutation and Spellcraft from Power and Focus.</b> 7% of your Power and 3% of your Focus become Transmutation skill, and it's 5% for both for Spellcraft. As you level, you gain 8 Power and 7 Focus per level, resulting in a small gain of Spellcraft and Transmutation as you level up. From your entered adventure level, I can find out how much skill you're getting from that level alone.</li>
				<li><b>You have your Spellcraft masteries completed. (Helian)</b> The minimum level for the Rite of Passage is 20, so I'm assuming you have maxed your masteries as far as you can go to that point at the least. From there, I figure out how much skill you still need and seperate it into 10-level chunks to which I add a bonus 10 skill for each additional mastery.</li>
				<li><b>You have the best techniqued scales you can.</b> Every 10 levels you gain a new scale and every 20 you gain a new tier. You get a lot of skill from a mix of <i>Power</i> base scales techniqued with Spellcraft or Transmutation. It's trickly for Helians at level 39 or below as your craft determines your tier, but the calculator takes that into account as well by checking first if your adventure is lower than your craft (you will never be level 30 and below 40 craft for the Helian RoP unless you are collecting buffs from every player you know and using items).</li>
				<li><b>You are buffed with Dragon buffs.</b> I excluded biped buffs for the sake of brevity and access to all players. Promote Intellect gives 24 + 18*(Tier - 1) Focus and Power. Both of those factor into your skills. Additionally, Primal Roar gives between 100-250 Power in these ranges, which can give a surprisingly large boost. I check your level for what Roar you have and what tier you are for Promote Intellect and factor those in.</li>
				<li><b>You are standing at a machine if you're Helian.</b> Helians actually don't need to use the Tower of Nature to craft the Prismatic Focus and can go anywhere. So you can use a regular machine to boost your spellcraft by 90 points if it's T6 - which is a massive difference of over 10 levels of craft.</li>
			</ul>
			<p>With the numbers I gain from these assumptions, I use a lot of math to calculate how much Transmutation/Spellcraft skill you can have at level 20 craft. If it's enough, we're good! If not, from there, I subtract what you have from the required amount. I check this amount for the 'crafting bracket' you will be in - if you need 90 or less skill, you'll be in the third bracket, meaning in your 30s. From there, I can assume you will get your T3 mastery. 10 levels + 10 skill from the mastery = 90. This rule follows for the rest of the brackets. I take this bracket value and multiply it by 10 for however much mastery bonus you get, subtract 20 from it to account for the original 2 masteries I assumed, and add it in to your final total. Finally, I subtract your final total from the required skill and divide it by 8 (the skill you get per level) and add that amount onto 20 (the base) or 40 (if you are a lv 39 or below Helian).</p>
</article>
	<!--BEGIN SIDEBAR -->
	<div class="sidebarbox">
		<?php include("../sidebar.html");?>
	</div>
	<!-- END SIDEBAR -->
</section>
</body>
</html>