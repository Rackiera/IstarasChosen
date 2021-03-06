<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 

<head><title>IC - Biped Crafting Guide</title>
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
		<header class="article border">Biped Crafting Guide</header>
		<p style="font-size:.75em">Written by Racktor, October 27th 2017 - Last Updated August 1st 2018</p>
			<br/>
			<center><i><a href="index.php">&larr; Return to Guides</a></i></center>
			<br/>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#firstschool">Your First School</a></li>
					<ul>
						<li><a href="#firstschool-blk">Blacksmith</a></li>
						<li><a href="#firstschool-out">Outfitter</a></li>
						<li><a href="#firstschool-sch">Scholar</a></li>
					</ul>
				<li><a href="#leveling-basic">Leveling Basic Schools</a></li>
					<ul>
						<li><a href="#roadmap-basic">Basic School Roadmap</a></li>
					</ul>
				<li><a href="#leveling-construction">Leveling Construction Schools</a></li>
					<ul>
						<li><a href="#construct-carpenter">Carpenter</a></li>
						<li><a href="#construct-enchanter">Enchanter</a></li>
						<li><a href="#construct-fitter">Fitter</a></li>
						<li><a href="#construct-mason">Mason</a></li>
						<li><a href="#construct-weaver">Weaver</a></li>
					</ul>
				<li><a href="#leveling-confectioner">Leveling Confectioner</a></li>
				<li><a href="#leveling-GMC">GMC Roadmap</a></li>
			</ul>
		<a name="intro"><header class="subsection border">Introduction</header></a>
			<p>All together, bipeds have a grand total of 19 crafting schools. Of these, five are construction schools for plot building. This guide is not meant to be a concrete path that you <i>must</i> follow to "correctly" level your schools; it is meant to give you a feel for what biped craft leveling is like, especially if you've never touched it, and some suggestions as to how to tackle it. There's hundreds of combinations from which you could choose when it comes to leveling paths. Do what makes you comfortable and aim for the schools you want; not everyone needs to be a GMC!</p>
			<p>To begin, let's set down some basics. For most of the crafting schools, you can organise them into some general categories based on their primary purpose/a source of their experience - metal, wood, stone, cloth, and essence schools. Below is a list of the associated schools. Schools marked with an asterisk (*) appear in multiple categories.</p>
			<p>If you want a list of all skills that a school gives, please use <a href="http://istariareference.com/">Istaria Reference</a>'s school charts. They are extremely useful for this sort of information.
			<ul>
				<li><b>Essence Schools</b></li>
				<ul>
					<li>Alchemist</li>
					<li>Enchanter</li>
					<li>Gatherer*</li>
					<li>Scholar*</li>
					<li>Spellcrafter*</li>
				</ul>
				<li><b>Fabric Schools</b></li>
				<ul>
					<li>Gatherer*</li>
					<li>Outfitter*</li>
					<li>Tailor</li>
					<li>Weaver</li>
				</ul>
				<li><b>Metal Schools</b></li>
				<ul>
					<li>Armorer</li>
					<li>Blacksmith</li>
					<li>Fitter</li>
					<li>Jeweler</li>
					<li>Miner*</li>
					<li>Outfitter*</li>
					<li>Tinkerer</li>
					<li>Weaponsmith</li>
				</ul>
				<li><b>Stone Schools</b></li>
				<ul>
					<li>Mason</li>
					<li>Miner*</li>
					<li>Scholar*</li>
					<li>Spellcrafter*</li>
				</ul>
				<li><b>Wood Schools</b></li>
				<ul>
					<li>Carpenter</li>
					<li>Gatherer*</li>
					<li>Fletcher</li>
				</ul>
			</ul>
			<p>You may notice in this list that Confectioner is missing. This is due to the fact that it shares absolutely no experience-gaining resources with other schools; it is worthy of a category of its own and will be explained later.</p>
			<p>When choosing schools to level, it's a good idea to work in a pattern where you can use the skills gained in one school to work on another school. For example, if you notice, some schools in the list above share categories. So if you are starting in Blacksmith, which is the general recommendation, you can then use Blacksmith to level up Outfitter, which is a school in both the metal and fabric schools. You can level up outfitter very swiftly with the metal skills you've gained in Blacksmith, then piggyback off of Outfitter's clothworking gain to work up the other fabric schools.</p>
			<p>Remember that for schools that require you to deconstruct something, use the highest skill formula that you are <i>optimum</i> on; it is <i>not</i> worth using a higher skill formula if you are not optimum on it if you have a lower skill formula that you are optimum with. Be aware that even if you consume more resources per item in the next formula up, it still gives more exp per raw resource if and only if you are optimum. If you are not convinced of my math, try it for yourself; create and deconstruct a few items from both formulas and divide your EXP by the resources consumed.</p>
			<p>To further that point, do not process raw materials unless you are 3:1 on them at the very least. 4:1 and 5:1 proficiency just ends up with you wasting resources and getting little EXP in the end. Have someone process the resource for you or work on a lower tier until you can work up the skill to process the next tier at 3:1. T6 Dragon machines in their lairs work very well for this as they add +90 skill over an expert biped shop that adds +75.</p>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
		<a name="firstschool"><header class="subsection border">Your First School</header></a>
			<p>The first school you choose to level is entirely up to you, however, it is recommended you start in one of the basic schools offered on Spirit Isle - Outfitter, Blacksmith, and Scholar. All the other schools require you to have at least 100 base of a specific skill as well as level 10 in your current crafting school except for Jeweler. You can pick up Jeweler any time, but it is not offered at Spirit Isle and you have to seek out a trainer in the world.</p>
			<p>Most recommend you start in Blacksmith, especially if you do not have friends or guild mates who can craft you the tools you need as you level up. Blacksmith will let you keep your own tools up to date for all of your classes and provides a good basic basis of a few processing skills.</p>
			<p>If you do have friends who will help you, however, and you are leveling a craft school simply to accompany your adventure school, take a craft school that helps your adventure school. Scholar will increase your focus and power the most (7 points per level) while Outfitter adds to your dexterity (8/level). Blacksmith is more strength-oriented, giving 8 per level. If you're working up a melee school, Blacksmith is a good choice. Scholar may work for spellcasters (I generally do not recommend starting in Scholar) and Outfitter works well for ranged classes.</p>
			<p>Whichever school you choose to level first, work up on a related resource you feel comfortable with. Below I will list the general course of leveling that may prove the easiest in my own opinion, but is in no way a strict path that you cannot deviate from.</p>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
			<a name="firstschool-blk"><p class="border">Blacksmith</p></a>
				<p>Leveling blacksmith consists of hopping between stone and metal resources to produce tools appropriate to your level. In the beginning, using Sandstone will generally be the easiest course of action as the area around Nuthala has a good amount of motherlodes and rich nodes that you can gather from. Sandstone Golems dot the area and may prove a problem if you are not on their level, but as long as you keep to the outskirts, you should be fine.</p>
				<p>Construct and deconstruct Essence Siphons to begin with (Minimum Skill of 1 and Optimum of 100) and work your way up to better stone tools that require higher skill. (Brew Stirrers are a good choice - they are require minimum skill of 100.)</p>
				<p>Once you move into T2, you can use Slate if you can handle the Slate Golems at Slate Crest as there are a few mother lodes out there and (if you are on Chaos) a vault nearby. Otherwise, there is Iron available outside of Bristugo that is guarded by Iron Golems that can be used to level Blacksmithing. There is also some guarded iron east and southeast of Chiconis, though its usefulness depends on the construction of nearby lairs. Unguarded slate is out by Snowfall, but the nodes are only regular nodes and thus very irritating to gather.</p>
				<p>Good metal tools to deconstruct include Mining Picks and Fitting Hammers.</p>
				<p>Granite is the most easily gathered resource for T3 at Drift Point as both Chaos and Order have a nearby Stoneworking shop and vault for you to utilize. However, the Granite there is well guarded by Granite Golems. If this is not an option for you, there is rich and mother lodes of Dark Iron unguarded outside of Summit. On at least Chaos, there is also a shop up the hill for processing.</p>
				<p>Past T3, you are going to want to delve right into the mines at Mithril's Anvil and gather platinum. Inside the mine itself is safe, but outside of it, you're going to meet high level Mithril Golems - you can likely avoid them easily enough, but it can still be risky. Platinum is the easiest material out of T4 to get your hands on, though, and can be made into Jewelry Pliers for experience.</p>
				<p>If you cannot handle the Mithril Golems even with avoidance, there is Cobalt north of Dralk nearby a crafting lair that offers unguarded nodes up to rich. The Valley of Repose's volcano on Trandalar also offers rich nodes of Obsidian as well as golems to gather from. Unguarded Obsidian is available south of Dralk on the path towards Lantenal the Hermit but can prove frustrating to use as there are no player machines nearby nor any way to access storage nor any nodes above basic nodes.</p>
				<p>For tier 5, you can continue using platinum for as long as you can bear to stretch the usefulness of the resource or you can move to mithril. Mithril is not unguarded anywhere and is primarily available in Mithril's Anvil. MA has player shops nearby and some of the nodes can be gathered from without worry of being attacked by the golems, but it is still rather dangerous if you aren't paying careful attention to the movements of any nearby golems.</p>
				<p>It's also possible to level on marble, though marble is only gathered in really any good quantity at the Marble Quarry which is an unfortunately long distance from nearby shops, which makes it less desirable to use than mithril.</p>
				<p>Following is an 'at a glance' guide with formulas and their skill levels. The resource names link out to Istaria Reference with a marker on recommended spot(s) to gather the aforementioned resources. <b>This is <i>not</i> all of the spawn points of the resource.</b> It's simply my most recommended areas; feel free to ignore my recommendations.</p>
				<ul>
					<li><b>T1</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=19412%2C+22714&showpad=" target="_blank">Sandstone</a> (Recommended):</i> 
					<ul>
						<li>Essence Siphon (Min. 1 - Opt. 100)</li>
						<li>Clay Scoop (Min. 50 - Opt. 150)</li>
						<li>Brew Stirrer (Min. 100 - Opt. 200)</li>
						<li>Essence Structurer (Min. 150 - Opt. 250)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=19740%2C22548%0D%0A19724%2C22726&showpad=" target="_blank">Bronze</a>:</i> 
					<ul>
						<li>Mining Pick (Min. 1 - Opt. 100)</li>
						<li>Salvage Awl (Min. 50 - Opt. 150)</li>
						<li>Cooking Knife (Min. 100 - Opt. 200)</li>
						<li>Masonry Trowel (Min. 150 - Opt. 250)</li>
					</ul>
					</li>
					<li><b>T2</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=22989%2C20537%0D%0A23671%2C29989&showpad=" target="_blank">Slate</a> (Recommended):</i>
					<ul>
						<li>Essence Siphon (Min. 200 - Opt. 325)</li>
						<li>Clay Scoop (Min. 250 - Opt. 375)</li>
						<li>Brew Stirrer (Min. 300 - Opt. 425)</li>
						<li>Essence Structurer (Min. 350 - Opt. 475)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=22214%2C+22902%0D%0A24940%2C+22036%0D%0A24380%2C+21416&showpad=" target="_blank">Iron</a>:</i> 
					<ul>
						<li>Mining Pick (Min. 200 - Opt. 325)</li>
						<li>Salvage Awl (Min. 250 - Opt. 375)</li>
						<li>Cooking Knife (Min. 300 - Opt. 425)</li>
						<li>Masonry Trowel (Min. 350 - Opt. 475)</li>
					</ul>
					</li>
					<li><b>T3</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=24442%2C+30740&showpad=" target="_blank">Granite</a> (Recommended):</i>
					<ul>
						<li>Essence Siphon (Min. 400 - Opt. 550)</li>
						<li>Clay Scoop (Min. 450 - Opt. 650)</li>
						<li>Brew Stirrer (Min. 500 - Opt. 650)</li>
						<li>Essence Structurer (Min. 550 - Opt. 700)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=28076%2C+35778%0D%0A24520%2C+29660&showpad=" target="_blank">Steel</a>:</i> 
					<br/>
					<ul>
						<li>Mining Pick (Min. 400 - Opt. 550)</li>
						<li>Salvage Awl (Min. 450 - Opt. 650)</li>
						<li>Cooking Knife (Min. 500 - Opt. 650)</li>
						<li>Masonry Trowel (Min. 550 - Opt. 700)</li>
					</ul>
					</li>
					<li><b>T4</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=26839%2C+24828&showpad=" target="_blank">Platinum</a> (Recommended):</i>
					<ul>
						<li>Fabric Scissors (Min. 600 - Opt. 775)</li>
						<li>Gem Cutter (Min. 650 - Opt. 825)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=25841%2C+34975&showpad=" target="_blank">Obsidian</a>:</i>
					<ul>
						<li>Essence Siphon (Min. 600 - Opt. 775)</li>
						<li>Clay Scoop (Min. 650 - Opt. 825)</li>
						<li>Brew Stirrer (Min. 700 - Opt. 875)</li>
						<li>Essence Structurer (Min. 750 - Opt. 925)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=29696%2C+29162&showpad=" target="_blank">Cobalt</a>:</i> 
					<ul>
						<li>Mining Pick (Min. 600 - Opt. 775)</li>
						<li>Salvage Awl (Min. 650 - Opt. 825)</li>
						<li>Cooking Knife (Min. 700 - Opt. 875)</li>
						<li>Masonry Trowel (Min. 750 - Opt. 925)</li>
					</ul>
					</li>
					<li><b>T5</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=27172%2C+25910&showpad=" target="_blank">Marble</a>:</i>
					<ul>
						<li>Essence Siphon (Min. 800 - Opt. 1000)</li>
						<li>Clay Scoop (Min. 850 - Opt. 1050)</li>
						<li>Brew Stirrer (Min. 900 - Opt. 1100)</li>
						<li>Essence Structurer (Min. 950 - Opt. 1150)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=" target="_blank">Mithril</a> (Recommended):</i> 
					<ul>
						<li>Mining Pick (Min. 800 - Opt. 1000)</li>
						<li>Salvage Awl (Min. 850 - Opt. 1050)</li>
						<li>Cooking Knife (Min. 900 - Opt. 1100)</li>
						<li>Masonry Trowel (Min. 950 - Opt. 1150)</li>
					</ul>
					</li>
				</ul>
				<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
			<a name="firstschool-out"><p class="border">Outfitter</p></a>
				<p>Outfitters can use metal and fabric as their primary leveling materials through the levels, processing it into armor for experience. Beginning on outfitter is the easiest if you use bronze, as there are some motherlodes and bronze golems outside of Nuthala. Nuthala also offers shops for processing it on both the live servers for convenience and skill bonuses. If you are not on-level the golems might prove a problem, but otherwise they're more of a pest than an irritant. When using metal, construct and deconstruct Ringmail Belts (Skill 1 - Opt 100) to begin with and then move onto Gauntlets (50-150) and finally Chestguards (90-190).</p>
				<p>Flax is your other option for tier 1, but is not available in as much abundance as bronze. If you want to make the attunement run to Dalimond, it <i>is</i> present in nodes up to Abundant outside of the city and can easily be processed in the neigboring city of Bristugo. If you work with fabrics like flax, xonstruct and deconstruct cloth tunics, gloves, belts this time around.</p>
				<p>T2 is best done in a similar fashion with Iron, which can be gathered outside of Bristugo. However, it's guarded by Iron Golems, so be wary. Another (guarded) location is outside of Chiconis along the path towards Selen along the south end of the Granitefall Mountains. However, this is far from civilization and you will be dependent on nearby lairs for any processing needs.</p>
				<p>If you don't mind spiders and being forced to use a vault, there is a field including Bountiful nodes of Flax outside of South March.</p>
				<p>Dark Iron/Steel is your best bet for T3; it can be gathered unguarded outside of Summit with scarce motherlodes and somewhat common Rich Nodes while Acul offers abundant motherlodes with guarding Nickel Golems.</p>
				<p>Once you reach T4, gathering silk is likely preferable above cobalt. Look for silk outside of Aughundell to the north east; be wary of the nearby Shadow Spiders, but there should be nodes up to Bountiful that are left unguarded.</p>
				<p>If you wish to process cobalt instead, Falathien makes a good spot; there are unguarded nodes up to Rich and on Chaos, vaults and shops nearby in the surrounding settlements. There is also a world machine directly next to the resource as well.</p>
				<p>Once into T5, gathering mithril is one of two good options; there are some sections at Mithril's Anvil that are unguarded, but a majority of it is covered by roaming Mithril Golems, so proceed with caution. In comparison to your other option, Ironsilk, the field is much larger and offers the possibility for many players to gather at once.</p>
				<p>Ironsilk, however, is the safer option to work off of and can be gathered unguarded from nodes up to Bountiful to the east of Aughundell down the path from the Silk mentioned earlier. There is a world machine directly next to the resource and places for plots down the road with possible vaults / player shops on them.</p>
				<p>Following is an 'at a glance' guide with formulas and their skill levels. The resource names link out to Istaria Reference with a marker on recommended spot(s) to gather the aforementioned resources. <b>This is <i>not</i> all of the spawn points of the resource.</b> It's simply my most recommended areas; feel free to ignore my recommendations.</p>
				<ul>
					<li><b>T1</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=22453%2C22664%0D%0A20462%2C+24186&showpad=" target="_blank">Flax</a>:</i> 
					<ul>
						<li>Cloth Belt (Min. 1 - Opt. 100)</li>
						<li>Cloth Gloves (Min. 50 - Opt. 150)</li>
						<li>Cloth Tunic (Min. 90 - Opt. 190)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=19740%2C22548%0D%0A19724%2C22726&showpad=" target="_blank">Bronze</a> (Recommended):</i> 
					<ul>
						<li>Ringmail Belt (Min. 1 - Opt. 100)</li>
						<li>Ringmail Gauntlets (Min. 50 - Opt. 150)</li>
						<li>Ringmail Chestguard (Min. 90 - Opt. 190)</li>
					</ul>
					</li>
					<li><b>T2</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=23324%2C+19630&showpad=" target="_blank">Kenaf</a>:</i> 
					<ul>
						<li>Cloth Belt (Min. 200 - Opt. 350)</li>
						<li>Cloth Gloves (Min. 250 - Opt. 375)</li>
						<li>Cloth Tunic (Min. 190 - Opt. 415)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=22214%2C+22902%0D%0A24940%2C+22036%0D%0A24380%2C+21416&showpad=" target="_blank">Iron</a>  (Recommended):</i> 
					<ul>
						<li>Ringmail Belt (Min. 200 - Opt. 350)</li>
						<li>Ringmail Gauntlets (Min. 250 - Opt. 375)</li>
						<li>Ringmail Chestguard (Min. 190 - Opt. 415)</li>
					</ul>
					</li>
					<li><b>T3</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=24632%2C25946%0D%0A&showpad=" target="_blank">Cotton</a>:</i> 
					<ul>
						<li>Cloth Belt (Min. 400 - Opt. 550)</li>
						<li>Cloth Gloves (Min. 450 - Opt. 600)</li>
						<li>Cloth Tunic (Min. 490 - Opt. 640)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=28076%2C+35778%0D%0A24520%2C+29660&showpad=" target="_blank">Steel</a> (Recommended):</i> 
					<ul>
						<li>Ringmail Belt (Min. 400 - Opt. 550)</li>
						<li>Ringmail Gauntlets (Min. 450 - Opt. 600)</li>
						<li>Ringmail Chestguard (Min. 490 - Opt. 640)</li>
					</ul>
					</li>
					<li><b>T4</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=25552%2C+26406%0D%0A%0D%0A&showpad=" target="_blank">Silk</a> (Recommended):</i> 
					<ul>
						<li>Cloth Belt (Min. 600 - Opt. 775)</li>
						<li>Cloth Gloves (Min. 650 - Opt. 825)</li>
						<li>Cloth Tunic (Min. 690 - Opt. 865)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=29696%2C+29162&showpad=" target="_blank">Cobalt</a>:</i> 
					<ul>
						<li>Ringmail Belt (Min. 600 - Opt. 775)</li>
						<li>Ringmail Gauntlets (Min. 650 - Opt. 825)</li>
						<li>Ringmail Chestguard (Min. 690 - Opt. 865)</li>
					</ul>
					</li>
					<li><b>T5</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=26230%2C+26468%0D%0A%0D%0A&showpad=" target="_blank">Ironsilk</a> (Either Or):</i> 
					<ul>
						<li>Cloth Belt (Min. 800 - Opt. 1000)</li>
						<li>Cloth Gloves (Min. 850 - Opt. 1050)</li>
						<li>Cloth Tunic (Min. 890 - Opt. 1090)</li>
					</ul>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=" target="_blank">Mithril</a> (Either Or):</i> 
					<ul>
						<li>Ringmail Belt (Min. 800 - Opt. 1000)</li>
						<li>Ringmail Gauntlets (Min. 850 - Opt. 1050)</li>
						<li>Ringmail Chestguard (Min. 890 - Opt. 1090)</li>
					</ul>
					</li>
				</ul>
				<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
			<a name="firstschool-sch"><p class="border">Scholar</p></a>
				<p>I would like to start out by saying I do not recommend starting in scholar, though it is possible. It doesn't offer as much usefulness as outfitter (ability to make armor) or blacksmith (ability to make weapons and tools). In scholar, your ability is essentially limited to being able to quarry stone and gems and harvest essence from wisps or residues. You can create spells and scrolls, but these items are the most easily obtained in the world from other players. On the contrary, scholar does offer focus and power skill that is otherwise not received from basic craft schools.</p>
				<p>That being said, if you still want to pursue this route, start with sandstone in T1. Your only real option to level off of in this school when starting is specific stone tools or spells. Scrolls are far too complex to be useful to level off of in any quantity. Sandstone can easily be gathered at Nuthala. Both spells and tools work well in this tier as T1 spells do not require an essence.</p>
				<p>Once T2 starts, I highly advise against leveling with spells. While you may gain more experience crafting orbs, bricks, and spellshards before crafting them into and deconstructing spells, it is a much longer process that likely doesn't give as much EXP per hour as just workin with tools. Now, slate is best gathered at Slate Crest on the Dalimond Peninsula, but this is guarded by Slate Golems. If you want unguarded resources, there are rich nodes in Central Valley that are not guarded by anything as well as regular nodes in Snowfall.</p>
				<p>T3 is done with Granite, which is gathered most effectively at Drift Point. Be wary of the Granite Golems guarding the area; they are everywhere and cover most of the resources, including the motherlodes. Throughout Aughundell Mines and nearby South Gate there is somewhat unguarded Granite, though in lesser quantities and spread out more.</p>
				<p>T4 kicks off with likely the worst resource to gather among all of the resources listed here - Obsidian. Obsidian can be gathered the most easily at the Valley of Repose's volcano, though be wary of the Obsidian Golems guarding the resources. The resources there only reach up to Rich nodes, but other areas that are nearby any sort of processing area only have regular nodes or are out in the middle of nowhere. However if you truly cannot handle the golems, an unguarded patch of regular nodes exists south of Dralk nearby a public crafting lair.</p>
				<p>Finally, T5 is done with Marble which can be acquired at the Marble Quarry. Be wary of the Marble Golems that spawn throughout the area, though you should be able to pick off nodes from the edges without ever getting into a fight with the golems.</p>
				<ul>
					<li><b>T1</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=19412%2C+22714&showpad=" target="_blank">Sandstone</a>:</i> 
					<ul>
						<li>Essence Siphon (Min. 1 - Opt. 100)</li>
						<li>Clay Scoop (Min. 50 - Opt. 150)</li>
						<li>Brew Stirrer (Min. 100 - Opt. 200)</li>
						<li>Essence Structurer (Min. 150 - Opt. 250)</li>
					</ul>
					<br/>
					<li><b>T2</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=22989%2C20537%0D%0A23671%2C29989&showpad=" target="_blank">Slate</a>:</i>
					<ul>
						<li>Essence Siphon (Min. 200 - Opt. 325)</li>
						<li>Clay Scoop (Min. 250 - Opt. 375)</li>
						<li>Brew Stirrer (Min. 300 - Opt. 425)</li>
						<li>Essence Structurer (Min. 350 - Opt. 475)</li>
					</ul>
					<br/>
					<li><b>T3</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=24442%2C+30740&showpad=" target="_blank">Granite</a>:</i>
					<ul>
						<li>Essence Siphon (Min. 400 - Opt. 550)</li>
						<li>Clay Scoop (Min. 450 - Opt. 650)</li>
						<li>Brew Stirrer (Min. 500 - Opt. 650)</li>
						<li>Essence Structurer (Min. 550 - Opt. 700)</li>
					</ul>
					<br/>
					</li>
					<li><b>T4</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=25841%2C+34975&showpad=" target="_blank">Obsidian</a>:</i>
					<ul>
						<li>Essence Siphon (Min. 600 - Opt. 775)</li>
						<li>Clay Scoop (Min. 650 - Opt. 825)</li>
						<li>Brew Stirrer (Min. 700 - Opt. 875)</li>
						<li>Essence Structurer (Min. 750 - Opt. 925)</li>
					</ul>
					<br/>
					<li><b>T5</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=27172%2C+25910&showpad=" target="_blank">Marble</a>:</i>
					<ul>
						<li>Essence Siphon (Min. 800 - Opt. 1000)</li>
						<li>Clay Scoop (Min. 850 - Opt. 1050)</li>
						<li>Brew Stirrer (Min. 900 - Opt. 1100)</li>
						<li>Essence Structurer (Min. 950 - Opt. 1150)</li>
					</ul>
				</ul>
				<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
		<a name="leveling-basic"><header class="subsection border">Leveling Basic Schools</header></a>
			<p>Leveling your basic schools - defined here as any non-primary skill system school (so non-construction and non-confectioner) - follows a very similar pattern. Some schools have unique quirks that should be taken into account before leveling and they will be looked into here.</p>
			<p>Recall from the introduction that every formula that you use here should be the best one you are <i>optimal</i> at and nothing more or nothing less to maximize your EXP gain as much as possible. Do not process resources you are not 3:1 at and avoid swapping to another tier too early (swapping when 5:1 or 4:5 on the next tier) or lingering on a tier too long (continuing on TX until you're already at 2:1 on the next tier).</p>
			<p>This section of the guide will be written as if you are following a similar pattern to one I will be describing in a moment. I will be describing none of these schools as if being leveled without at least having the ability to process T5 materials base materials and then, after or before leveling on these resources, process those into refined forms that give you experience for each individual school. If you do run into this roadblock, refer to the first school guides above and apply your own intuition to figure out a plan of action to tackle the school.</p>
			<p>With all that said and done, allow me to dispel a common rumor: having your salvaging skill too high will destroy your experience. This is not entirely false; having your salvaging skill higher than your current processing skills can hurt your EXP gain from deconstructing whatever processed item you are making. However, the drop in EXP is not large enough to justify you ignoring it entirely. Furthermore, if you keep your salvaging skill on level with your other processing skills, it should not bother you at all.</p>
			<p>Also, you can do a bit of messing around with tools to use tools that cap your salvaging skill very low so you can gain more experience when deconstructing higher-level items, though this can be a pain if you're processing many resources at once. In the end, salvaging experience doesn't make up enough of your experience gain overall to be worried about in such great detail.</p>
			<p>Even after all of this deliberation on the topic of salvaging EXP, if you are still concerned about it being hurt by having too much salvaging skill, just remember to avoid the schools that give salvaging until the very end of your leveling experience - Miner, Gatherer, and Tinkerer.</p>
			<a name="roadmap-basic"><header class="subsection2 border">Basic School Roadmap</header></a>
			<p>Now, for the leveling pattern - I am going to assume you are starting with Blacksmith for ease of reference and considering it is the most common and most recommended starting school for leveling.</p>
			<p>This is the pattern that I used when leveling my GMC, Kerrsol, up to max with a few adjustments that I have learned from future-me that would've helped past-me. My goal was to get as many useful schools up to max as fast as possible so I could be self-sufficient sooner. So, I focused initially on schools that focused on my own equipment before branching out and working on schools that were more luxury than necessity.</p>
			<p>This order is <b>flexible</b> as long as you manage your skills correctly. The general advice for leveling up will stay the same as long as you maintain the same previous skills for each school. For example, if you want to make your own bows earlier, you can slip in Fletcher right after Blacksmith instead of waiting a few schools forward.</p>
			<p>Normally, I level Miner and Gatherer during the construction schools as they do not gain experience from processing these raw resources. However, if you need the better gathering skills from these two schools, I have added in recommendations on where to start leveling these schools. I still maintain that it is easiest to level them alongside the construction ones, but it's understandable that you may require better gathering ability earlier on. (And plus, not everyone wants construction schools)</p>
			<ol>
				<li><b><a href="http://istariareference.com/schools.asp?school=Blacksmith">Blacksmith</a> to 100</b> (Follow first school guide).</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Outfitter">Outfitter</a> to 100</b> - Craft (and store!) <a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=">Mithril Bars</a> until you are of high enough skill to craft/deconstruct Ringmail or Scalemail Belts, Gauntlets, or Chestguards. (Platemail forms work better if you have them, but these are drop only.) Use the mithril bars you used to level prior at first and if you do not hit 100, continue to work with Mithril until you are.</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Tailor">Tailor </a> to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=26230%2C+26468%0D%0A%0D%0A&showpad=">Ironsilk Spools</a> and process them into Ironsilk Belts, Gloves, and Tunics. (Padded versions of these are better if you have the drop-only forms.) Craft and deconstruct those to 100.</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Jeweler">Jeweler</a> to 100</b> - Craft (and store) <a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=">Mithril Bars</a> until you are of the skill to create T5 jewelry. Once you can, craft Strength Rings, then Dexterity Rings, then Dexterity Necklaces and deconstruct them to level yourself the last bunch of levels. These items are made with Fire Opal, so be ready to gather a second resource and store it somewhere before combining the two.</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Armorer">Armorer</a>  to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=">Mithril bars</a> again and follow the same pattern for Outfitter. It's possible you will have extra Mithril Bars from Jeweler - use those and your skills from Outfitter to make the same armors from the school.
					<ul>
						<li>Alternatively, craft the Mithril Bars in Miner to gain Miner exp.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Weaponsmith">Weaponsmith</a> to 100</b> - <a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=">Same pattern</a> as above except making weapons. Good weapons to deconstruct are Hatchets and Long Swords. Fine versions of these are good for higher skills, but are drop-only.
					<ul>
						<li>Alternatively, craft the Mithril Bars in Miner to gain Miner exp.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Fletcher">Fletcher</a> to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=27578%2C+25542&showpad=">Yew Boards</a> until you can process them into Yew Shortbows and Yew Heavy Crossbows. If you have the fine versions of these formulas, you may find them of use for higher school formulas.
					<ul>
						<li>Alternatively, if you need an early Miner/Gatherer, craft the Yew Boards in Gatherer to gain Gatherer exp once you no longer gain any sizeable experience for Fletcher itself.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Scholar">Scholar</a> to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=27172%2C+25910&showpad=">Marble Bricks</a> into Essence Siphons, Clay Scoops, Brew Stirrers, or Essence Structurers (depending on optimum skill) and deconstruct them.
					<ul>
						<li>Alternatively, craft the Marble Bricks in Miner to gain Miner exp.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Alchemist">Alchemist</a> to 100</b> - There are multiple routes to this that I know of and may recommend.
					<ol>
						<li>Craft and store <a href="http://istariareference.com/istariamap.asp?loc=28333%2C+25389%0D%0A28529%2C+25417&showpad=">Shining Essence Orbs</a>. Once you're high enough skill to make it, craft these orbs into Shining Cognitive Suspensions. You can stop the processing chain here or you can process these further into Bolster Power or Focus potions if you gather Ground Peridot and Glass Vials as well. However, be aware that this formula is drop-only.</li>
						<li>Craft and store <a href="http://istariareference.com/istariamap.asp?loc=28333%2C+25389%0D%0A28529%2C+25417&showpad=">Tainted Shining Essence Orbs</a>. You can then use these once you have high enough skill alongside water to make Shining Kinetic Suspensions. These can then be made alongside Ground Fire Opal to make Bolster Dexterity or Bolster Strength potions.</li>
						<li>Craft yourself as high as you can using either of the two previous methods (with or without potions) and then create T5 Dyes from ground gems and water. Alternatively, craft yourself from 0 to 100 entirely on Dyes and ground gems. (This is generally what I would consider the hardest route.)</li>
					</ol>
				<li><b><a href="http://istariareference.com/schools.asp?school=Spellcrafter">Spellcrafter</a> to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=27172%2C+25910&showpad=">Marble Bricks</a> into Marble Spellshards and Shining Essence into <a href="http://istariareference.com/istariamap.asp?loc=28333%2C+25389%0D%0A28529%2C+25417&showpad=">Shining Essence Orbs</a> then construct them into spells. Deconstruct these spells for experience. Good spells to use are Binding Crystals, Energy Resistance, Clumsiness, Stinging Cold, and Blood Bolt.
					<ul>
						<li>Alternatively, craft the Marble Bricks in Miner to gain Miner exp and/or craft the Shining Essence Orbs in Gatherer to gain Gatherer exp.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Tinkerer">Tinkerer</a> to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=">Mithril Bars</a> into tools and deconstruct those tools (Mining Pick, Salvage Awl, Cooking Knife, Masonry Trowel).
					<ul>
						<li>Alternatively, craft the Mithril Bars in Miner to gain Miner exp.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Miner">Miner</a> to 100</b> - If you have no plans to level the construction schools, leveling Miner to 100 if you have not already done so would fit in here. If you have the Master formulas, craft Adamantium Bars/Travertine Bricks to 100. Alternatively, craft Mithril Bars/Marble Bricks to 100.</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Gatherer">Gatherer</a> to 100</b> - If you have no plans to level the construction schools, leveling Gatherer to 100 if you have not already done so would fit in here. If you have the Master formulas, craft Thornwood Boards/Radiant Essence Orbs to 100. Alternatively, craft Yew Boards/Shining Essence Orbs to 100.</li>
			</ol>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
		<a name="leveling-construction"><header class="subsection border">Leveling Construction Schools</header></a>
			<p>Leveling construction schools is pretty similar to starting over in a way. You have to go back through the tiers of resources and craft them all into on-tier finished products to gain EXP for them as you do not gain EXP for anything other than finished building resources and applying said resources.</p>
			<p>When leveling construction schools, it is extremely useful to have your own plot, if only for a month. Placing a Grand Warehouse on that plot is essentially guaranteed to have enough space for you to place resources to level yourself up to 100 in all five schools.</p>
			<p>Other than having to go through the tiers again, leveling construction schools is functionally similar to your other schools. Make sure you don't process a resource that you aren't 3:1 on (though you won't gain experience from it - more on that in a moment) and make sure you're creating what you're optimum on. All building schools have two resources per tier - a 'basic' and a 'complex' resource. Both take the same kind of processed basic resource, but require different amounts of skill to create. Be sure to create the one that you are <i>optimum</i> on and do not move away from it until you're optimum on the next one up in your tier.</p>
			<p>Since you do not receive experience for processing raw resources and since you will be processing a lot of them, it is a great idea to level Miner and Gatherer at this stage as you go. This is the most efficient time to level them as you will not be sapping EXP from your other schools nor will you lose any to the abyss of the primary skill system.</p>
			<p>Leveling these schools is pretty straight forward overall as there aren't hundreds of forms to choose from, but knowing the best places to gather resources is a good skill that will make your life easier. Thus, I will include a list similar to the first school guide that lists the resource locations, the formulas, and their skill levels per school.</p>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
			<a name="construct-carpenter"><p class="border">Carpenter</p></a>
				<p>Carpenter is a wood-based school that is good to level alongside of Gatherer. (See the introduction for deeper advice on leveling.)</p>
				<ul>
					<li><b>T1</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=26744%2C+24938%0D%0A19972%2C+23442&showpad=" target="_blank">Cedar</a>:</i> 
					<ul>
						<li>Cedar Construction Timber (Min. 1 - Opt. 200)</li>
						<li>Cedar Construction Braces (Min. 100 - Opt. 300)</li>
					</ul>
					</li>
					<li><b>T2</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=22140%2C+22913&showpad=" target="_blank">Elm</a>:</i> 
					<ul>
						<li>Elm Construction Timber (Min. 200 - Opt. 425)</li>
						<li>Elm Construction Braces (Min. 300 - Opt. 525)</li>
					</ul>
					</li>
					<li><b>T3</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=26756%2C+25084%0D%0A22614%2C+26414&showpad=" target="_blank">Oak</a>:</i> 
					<br/>
					<ul>
						<li>Oak Construction Timber (Min. 400 - Opt. 650)</li>
						<li>Oak Construction Braces (Min. 500 - Opt. 750)</li>
					</ul>
					</li>
					<li><b>T4</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=26656%2C+25068&showpad=" target="_blank">Maple</a>:</i> 
					<ul>
						<li>Maple Construction Timber (Min. 600 - Opt. 875)</li>
						<li>Maple Construction Braces (Min. 700 - Opt. 975)</li>
					</ul>
					</li>
					<li><b>T5</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=27578%2C+25542&showpad=" target="_blank">Yew</a>:</i> 
					<ul>
						<li>Yew Construction Timber (Min. 800 - Opt. 1000)</li>
						<li>Yew Construction Braces (Min. 900 - Opt. 1100)</li>
					</ul>
					</li>
					<li><b>T6</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=28828%2C+24292%0D%0A28956%2C+24936&showpad=" target="_blank">Thornwood</a>:</i> 
					<ul>
						<li>Thornwood Construction Timber (Min. 800 - Opt. 1000)</li>
						<li>Thornwood Construction Braces (Min. 900 - Opt. 1100)</li>
					</ul>
					</li>
				</ul>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
			<a name="construct-enchanter"><p class="border">Enchanter</p></a>
				<p>Enchanter is a fabric-based school that is good to level alongside of Gatherer. (See the introduction for deeper advice on leveling.)</p>
				<ul>
					<li><b>T1</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=19902%2C+23479&showpad=" target="_blank">Dim Essence</a>:</i> 
					<ul>
						<li>Dim Essence Construction Sphere (Min. 1 - Opt. 200)</li>
						<li>Dim Essence Construction Source (Min. 100 - Opt. 300)</li>
					</ul>
					<li><b>T2</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=21920%2C+22922%0D%0A22345%2C+22494&showpad=" target="_blank">Pale Essence</a>:</i> 
					<ul>
						<li>Pale Essence Construction Sphere (Min. 200 - Opt. 425)</li>
						<li>Pale Essence Construction Source (Min. 300 - Opt. 525)</li>
					</ul>
					<li><b>T3</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=23886%2C+15356%0D%0A26243%2C+23919&showpad=" target="_blank">Glowing Essence</a>:</i> 
					<ul>
						<li>Glowing Essence Construction Sphere (Min. 400 - Opt. 650)</li>
						<li>Glowing Essence Construction Source (Min. 500 - Opt. 750)</li>
					</ul>
					<li><b>T4</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=25074%2C+23128%0D%0A25062%2C+23416&showpad=" target="_blank">Bright Essence</a>:</i> 
					<ul>
						<li>Bright Essence Construction Sphere (Min. 600 - Opt. 875)</li>
						<li>Bright Essence Construction Source (Min. 700 - Opt. 975)</li>
					</ul>
					<li><b>T5</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=28333%2C+25389%0D%0A28529%2C+25417&showpad=" target="_blank">Shining Essence</a>:</i> 
					<ul>
						<li>Shining Essence Construction Sphere (Min. 800 - Opt. 1000)</li>
						<li>Shining Essence Construction Source (Min. 900 - Opt. 1100)</li>
					</ul>
					</li>
					<li><b>T6</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=28838%2C+24278%0D%0A28564%2C+24120%0D%0A28762%2C+23924&showpad=" target="_blank">Radiant Essence</a>:</i> 
					<ul>
						<li>Radiant Essence Construction Sphere (Min. 800 - Opt. 1000)</li>
						<li>Radiant Essence Construction Source (Min. 900 - Opt. 1100)</li>
					</ul>
				</ul>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
			<a name="construct-fitter"><p class="border">Fitter</p></a>
				<p>Fitter is a metal-based school that is good to level alongside of Miner. (See the introduction for deeper advice on leveling.)</p>
				<ul>
					<li><b>T1</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=19740%2C22548%0D%0A19724%2C22726&showpad=" target="_blank">Bronze</a>:</i> 
					<ul>
						<li>Bronze Construction Sheeting (Min. 1 - Opt. 200)</li>
						<li>Bronze Construction Jointing (Min. 100 - Opt. 300)</li>
					</ul>
					</li>
					<li><b>T2</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=22214%2C+22902%0D%0A24940%2C+22036%0D%0A24380%2C+21416&showpad=" target="_blank">Iron</a>:</i> 
					<ul>
						<li>Iron Construction Sheeting (Min. 200 - Opt. 425)</li>
						<li>Iron Construction Jointing (Min. 300 - Opt. 525)</li>
					</ul>
					</li>
					<li><b>T3</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=28076%2C+35778%0D%0A24520%2C+29660&showpad=" target="_blank">Steel</a>:</i> 
					<br/>
					<ul>
						<li>Steel Construction Sheeting (Min. 400 - Opt. 650)</li>
						<li>Steel Construction Jointing (Min. 500 - Opt. 750)</li>
					</ul>
					</li>
					<li><b>T4</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=29696%2C+29162&showpad=" target="_blank">Cobalt</a>:</i> 
					<ul>
						<li>Cobalt Construction Sheeting (Min. 600 - Opt. 875)</li>
						<li>Cobalt Construction Jointing (Min. 700 - Opt. 975)</li>
					</ul>
					</li>
					<li><b>T5</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=" target="_blank">Mithril</a>:</i> 
					<ul>
						<li>Mithril Construction Sheeting (Min. 800 - Opt. 1000)</li>
						<li>Mithril Construction Jointing (Min. 900 - Opt. 1100)</li>
					</ul>
					</li>
					<li><b>T6</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=29112%2C+26652&showpad=" target="_blank">Adamantium</a>:</i> 
					<ul>
						<li>Adamantium Construction Sheeting (Min. 800 - Opt. 1000)</li>
						<li>Adamantium Construction Jointing (Min. 900 - Opt. 1100)</li>
					</ul>
					</li>
				</ul>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
			<a name="construct-mason"><p class="border">Mason</p></a>
				<p>Mason is a stone-based school that is good to level alongside of Miner. (See the introduction for deeper advice on leveling.)</p>
				<ul>
					<li><b>T1</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=19412%2C+22714&showpad=" target="_blank">Sandstone</a>:</i> 
					<ul>
						<li>Sandstone Construction Block (Min. 1 - Opt. 200)</li>
						<li>Sandstone Construction Keystones (Min. 100 - Opt. 300)</li>
					</ul>
					<br/>
					<li><b>T2</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=22989%2C20537%0D%0A23671%2C29989&showpad=" target="_blank">Slate</a>:</i>
					<ul>
						<li>Slate Construction Block (Min. 200 - Opt. 425)</li>
						<li>Slate Construction Keystones (Min. 300 - Opt. 525)</li>
					</ul>
					<br/>
					<li><b>T3</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=24442%2C+30740&showpad=" target="_blank">Granite</a>:</i>
					<ul>
						<li>Granite Construction Block (Min. 400 - Opt. 650)</li>
						<li>Granite Construction Keystones (Min. 500 - Opt. 750)</li>
					</ul>
					<br/>
					</li>
					<li><b>T4</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=25841%2C+34975&showpad=" target="_blank">Obsidian</a>:</i>
					<ul>
						<li>Obsidian Construction Block (Min. 600 - Opt. 875)</li>
						<li>Obsidian Construction Keystones (Min. 700 - Opt. 975)</li>
					</ul>
					<br/>
					<li><b>T5</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=27172%2C+25910&showpad=" target="_blank">Marble</a>:</i>
					<ul>
						<li>Marble Construction Block (Min. 800 - Opt. 1000)</li>
						<li>Marble Construction Keystones (Min. 900 - Opt. 1100)</li>
					</ul>
					</li>
					<li><b>T6</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=29508%2C+27404%0D%0A30006%2C+27490&showpad=" target="_blank">Travertine</a>:</i> 
					<ul>
						<li>Travertine Construction Block (Min. 800 - Opt. 1000)</li>
						<li>Travertine Construction Keystones (Min. 900 - Opt. 1100)</li>
					</ul>
					</li>
				</ul>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
			<a name="construct-weaver"><p class="border">Weaver</p></a>
				<p>Weaver is a fabric-based school that is good to level alongside of Gatherer. (See the introduction for deeper advice on leveling.)</p>
				<ul>
					<li><b>T1</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=22453%2C22664%0D%0A20462%2C+24186&showpad=" target="_blank">Flax</a>:</i> 
					<ul>
						<li>Flax Construction Bolt (Min. 1 - Opt. 200)</li>
						<li>Flax Construction Tapestries (Min. 100 - Opt. 300)</li>
					</ul>
					<li><b>T2</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=23324%2C+19630&showpad=" target="_blank">Kenaf</a>:</i> 
					<ul>
						<li>Kenaf Construction Bolt (Min. 200 - Opt. 425)</li>
						<li>Kenaf Construction Tapestries (Min. 300 - Opt. 525)</li>
					</ul>
					<li><b>T3</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=24632%2C25946%0D%0A&showpad=" target="_blank">Cotton</a>:</i> 
					<ul>
						<li>Cotton Construction Bolt (Min. 400 - Opt. 650)</li>
						<li>Cotton Construction Tapestries (Min. 500 - Opt. 750)</li>
					</ul>
					<li><b>T4</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=25552%2C+26406%0D%0A%0D%0A&showpad=" target="_blank">Silk</a>:</i> 
					<ul>
						<li>Silk Construction Bolt (Min. 600 - Opt. 875)</li>
						<li>Silk Construction Tapestries (Min. 700 - Opt. 975)</li>
					</ul>
					<li><b>T5</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=26230%2C+26468%0D%0A%0D%0A&showpad=" target="_blank">Ironsilk</a>:</i> 
					<ul>
						<li>Ironsilk Construction Bolt (Min. 800 - Opt. 1000)</li>
						<li>Ironsilk Construction Tapestries (Min. 900 - Opt. 1100)</li>
					</ul>
					</li>
					<li><b>T6</b>
					<br/>
					<i><a href="http://istariareference.com/istariamap.asp?loc=28572%2C+24120%0D%0A28816%2C+24222&showpad=" target="_blank">Steelsilk</a>:</i> 
					<ul>
						<li>Steelsilk Construction Bolt (Min. 800 - Opt. 1000)</li>
						<li>Steelsilk Construction Tapestries (Min. 900 - Opt. 1100)</li>
					</ul>
				</ul>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
		<a name="leveling-confectioner"><header class="subsection border">Leveling Confectioner</header></a>
			<p>Confectioner is a very unique school when it comes to leveling as it not only uses the primary skill system similar to construction schools (meaning it only gains EXP from the finished product), but it also uses resources entirely unique to its school. There is nearly no overlap with other schools and thus you can essentially level this at any time, though you may run into problems with tools or gathering rates if you do not level at least Blacksmith prior.</p>
			<p>It is recommended you have a full set of Cooking teched gear when leveling confectioner so you can make the highest tier dish you are optimal.</p>
			<p>When leveling confectioner, try to focus on making sides and deserts. Main and sometimes appetizer dishes will usually ask for harder resources to gather in bulk than others. Sides and desserts award a good amount of EXP while being relatively simple in comparison.</p>
			<p>Furthermore, avoid making any dishes that use meat (such as the aforementioned main dishes), bonus resources, or bought resources (this will sap you of your money fast). You will end up very frustrated with yourself if you rely on these for your dishes as not only is the gathering speed very slow, it's a very active gathering process in which you have to move around a lot rather than focus on a few nodes for a while/</p>
			<p>Good dishes to focus on will include berries, a spice or two, possibly milk, and maybe bread or water. Be ready to run around the world looking for these resources; they're very spread out and there's far too many to list here, so please look at <a href="istariareference.com">Istaria Reference</a>'s map or the Wiki sites' pages on <a href="http://www.istaria-lexica.de/Confectioner_Herbs_and_Spices">Herbs and Spices</a> and other <a href="http://www.istaria-lexica.de/Confectioner#Formulas">Confectioner-related formulas</a>.</p>
			<p>When wearing an armor set techniqued with Cooking, it is possible that at level 70, you can not only scribe, but also make T6 sides, if not at optimal. T6 dishes award insane amounts of EXP so if you can get your hands on those formulas, it is a good idea to craft them.<p>
			<p>When looking for an amount to make per dish, a good amount to aim for is approximately 1000-3000 depending on how low of a tier you are in. The higher your tier, the more dishes you're going to want to make. Be sure you can secure some good space in shops as well, sometimes for a few days; confectioner is not a school that you can toss a few things together after work in. You have to have time, patience, and the space to place everything.</p>
			<p>Confectioner is one of my personal favorite schools to level because it was so in-depth and introduced me to so many new resources. Have fun with it and cook up something nice!</p>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
		<a name="leveling-GMC"><header class="subsection border">GMC Roadmap</header></a>
			<p>So you want to level to GMC? GMC is a big undertaking and can take a lot of time, but with proper thought, is a relatively easy thing to accomplish. Sit back and get ready for a lot of mining!</p>
			<p>To start, I will reiterate what I've said through this guide many times: everything I list or say here is completely up to your interpretation. There is no actual 'perfect' way to level one way or another. My list following this introduction is simply my own personal way I leveled with some adjustments as I looked back on my experience.</p>
			<p>As long as you are aware of what your skills are, what skills other schools use to level, and what you want to work on first, you will be fine to do whatever order works best for you.</p>
			<p>I will also quote what I had written earlier in the basic school leveling guide as a preface:</p>
				<p style="margin-left:3em; font-style:italic;">With all that said and done, allow me to dispel a common rumor: having your salvaging skill too high will destroy your experience. This is not entirely false; having your salvaging skill higher than your current processing skills can hurt your EXP gain from deconstructing whatever processed item you are making. However, the drop in EXP is not large enough to justify you ignoring it entirely. Furthermore, if you keep your salvaging skill on level with your other processing skills, it should not bother you at all.</p>
				<p style="margin-left:3em; font-style:italic;">Also, you can do a bit of messing around with tools to use tools that cap your salvaging skill very low so you can gain more experience when deconstructing higher-level items, though this can be a pain if you're processing many resources at once. In the end, salvaging experience doesn't make up enough of your experience gain overall to be worried about in such great detail.</p>
				<p style="margin-left:3em; font-style:italic;">Even after all of this deliberation on the topic of salvaging EXP, if you are still concerned about it being hurt by having too much salvaging skill, just remember to avoid the schools that give salvaging until the very end of your leveling experience - Miner, Gatherer, and Tinkerer.</p>
			<p>Now, allow me to give you my list of what I recommend when going for a GMC. A lot of this is copied from my basic leveling roadmap, so if you've read that, you'll notice a lot of repeat.</p>
			<ol>
				<li><b><a href="http://istariareference.com/schools.asp?school=Blacksmith">Blacksmith</a> to 100</b> (Follow first school guide).</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Outfitter">Outfitter</a> to 100</b> - Craft (and store!) <a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=">Mithril Bars</a> until you are of high enough skill to craft/deconstruct Ringmail or Scalemail Belts, Gauntlets, or Chestguards. (Platemail forms work better if you have them, but these are drop only.) Use the mithril bars you used to level prior at first and if you do not hit 100, continue to work with Mithril until you are.</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Tailor">Tailor </a> to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=26230%2C+26468%0D%0A%0D%0A&showpad=">Ironsilk Spools</a> and process them into Ironsilk Belts, Gloves, and Tunics. (Padded versions of these are better if you have the drop-only forms.) Craft and deconstruct those to 100.</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Jeweler">Jeweler</a> to 100</b> - Craft (and store) <a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=">Mithril Bars</a> until you are of the skill to create T5 jewelry. Once you can, craft Strength Rings, then Dexterity Rings, then Dexterity Necklaces and deconstruct them to level yourself the last bunch of levels. These items are made with Fire Opal, so be ready to gather a second resource and store it somewhere before combining the two.</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Armorer">Armorer</a>  to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=">Mithril bars</a> again and follow the same pattern for Outfitter. It's possible you will have extra Mithril Bars from Jeweler - use those and your skills from Outfitter to make the same armors from the school.
					<ul>
						<li>Alternatively, if you need an early Miner/Gatherer, craft the Mithril Bars in Miner to gain Miner exp.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Weaponsmith">Weaponsmith</a> to 100</b> - <a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=">Same pattern</a> as above except making weapons. Good weapons to deconstruct are Hatchets and Long Swords. Fine versions of these are good for higher skills, but are drop-only.
					<ul>
						<li>Alternatively, if you need an early Miner/Gatherer, craft the Mithril Bars in Miner to gain Miner exp.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Fletcher">Fletcher</a> to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=27578%2C+25542&showpad=">Yew Boards</a> until you can process them into Yew Shortbows and Yew Heavy Crossbows. If you have the fine versions of these formulas, you may find them of use for higher school formulas.
					<ul>
						<li>Alternatively, if you need an early Miner/Gatherer, craft the Yew Boards in Gatherer to gain Gatherer exp once you no longer gain any sizeable experience for Fletcher itself.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Scholar">Scholar</a> to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=27172%2C+25910&showpad=">Marble Bricks</a> into Essence Siphons, Clay Scoops, Brew Stirrers, or Essence Structurers (depending on optimum skill) and deconstruct them.
					<ul>
						<li>Alternatively, if you need an early Miner/Gatherer, craft the Marble Bricks in Miner to gain Miner exp.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Alchemist">Alchemist</a> to 100</b> - There are multiple routes to this that I know of and may recommend.
					<ol>
						<li>Craft and store <a href="http://istariareference.com/istariamap.asp?loc=28333%2C+25389%0D%0A28529%2C+25417&showpad=">Shining Essence Orbs</a>. Once you're high enough skill to make it, craft these orbs into Shining Cognitive Suspensions. You can stop the processing chain here or you can process these further into Bolster Power or Focus potions if you gather Ground Peridot and Glass Vials as well. However, be aware that this formula is drop-only.</li>
						<li>Craft and store <a href="http://istariareference.com/istariamap.asp?loc=28333%2C+25389%0D%0A28529%2C+25417&showpad=">Tainted Shining Essence Orbs</a>. You can then use these once you have high enough skill alongside water to make Shining Kinetic Suspensions. These can then be made alongside Ground Fire Opal to make Bolster Dexterity or Bolster Strength potions.</li>
						<li>Craft yourself as high as you can using either of the two previous methods (with or without potions) and then create T5 Dyes from ground gems and water. Alternatively, craft yourself from 0 to 100 entirely on Dyes and ground gems. (This is generally what I would consider the hardest route.) Blood Dye is usually recommended once you can craft it as it is the only T5 dye that requires 2 T5 resources to craft, requiring you to gather 3 resources instead of 4.</li>
					</ol>
				<li><b><a href="http://istariareference.com/schools.asp?school=Spellcrafter">Spellcrafter</a> to 100</b> - There are two routes that I am aware of.
					<ol>
						<li>Craft <a href="http://istariareference.com/istariamap.asp?loc=27172%2C+25910&showpad=">Marble Bricks</a> into Marble Spellshards and Shining Essence into <a href="http://istariareference.com/istariamap.asp?loc=28333%2C+25389%0D%0A28529%2C+25417&showpad=">Shining Essence Orbs</a> then construct them into spells. Deconstruct these spells for experience. Good spells to use are Binding Crystals, Energy Resistance, Clumsiness, Stinging Cold, and Blood Bolt.</li>
						<li>Craft <a href="http://istariareference.com/istariamap.asp?loc=27172%2C+25910&showpad=">Marble Bricks</a> until you can process them into tools that require Sculpting skill (ex. Essence Structurer), deconstruct, and repeat.</li>
					</ol>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Tinkerer">Tinkerer</a> to 100</b> - Craft <a href="http://istariareference.com/istariamap.asp?loc=26918%2C+24898&showpad=">Mithril Bars</a> into tools and deconstruct those tools (Mining Pick, Salvage Awl, Cooking Knife, Masonry Trowel).
					<ul>
						<li>Alternatively, if you need an early Miner/Gatherer, craft the Mithril Bars in Miner to gain Miner exp.</li>
					</ul>
				</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Fitter">Fitter</a> to 100</b> - Level using T1-T5 metals built into the highest resource you are optimum at and apply to world projects or your plot if you have one (Recommended structure: Grand Warehouse - Check <a href="#construct-fitter">Construction Schools - Fitter</a> section for details).</li>
					<ul>
						<li>As Fitter gains no EXP from it, be sure to craft the bars in Miner to gain Miner exp.</li>
					</ul>
				<li><b><a href="http://istariareference.com/schools.asp?school=Mason">Mason</a> to 100</b> - Level using T1-T6 stone built into the highest resource you are optimum at and apply to world projects or your plot if you have one (Recommended structure: Grand Warehouse - Check <a href="#construct-mason">Construction Schools - Mason</a> section for details).</li>
					<ul>
						<li>As Mason gains no EXP from it, be sure to craft the bricks in Miner to gain Miner exp.</li>
					</ul>
				<li><b><a href="http://istariareference.com/schools.asp?school=Carpenter">Carpenter</a> to 100</b> - Level using T1-T6 wood built into the highest resource you are optimum at and apply to world projects or your plot if you have one (Recommended structure: Grand Warehouse - Check <a href="#construct-carpenter">Construction Schools - Carpenter</a> section for details).</li>
					<ul>
						<li>As Carpenter gains no EXP from it, be sure to craft the boards in Gatherer to gain Gatherer exp.</li>
					</ul>
				<li><b><a href="http://istariareference.com/schools.asp?school=Enchanter">Enchanter</a> to 100</b> - Level using T1-T6 essence built into the highest resource you are optimum at and apply to world projects or your plot if you have one (Recommended structure: Grand Warehouse - Check <a href="#construct-enchanter">Construction Schools - Enchanter</a> section for details).</li>
					<ul>
						<li>As Enchanter gains no EXP from it, be sure to craft the orbs in Gatherer to gain Gatherer exp.</li>
					</ul>
				<li><b><a href="http://istariareference.com/schools.asp?school=Weaver">Weaver</a> to 100</b> - Level using T1-T6 fabrics built into the highest resource you are optimum at and apply to world projects or your plot if you have one (Recommended structure: Grand Warehouse - Check <a href="#construct-weaver">Construction Schools - Weaver</a> section for details).</li>
					<ul>
						<li>As Weaver gains no EXP from it, be sure to craft the spools in Gatherer to gain Gatherer exp.</li>
					</ul>
				<li><b><a href="http://istariareference.com/schools.asp?school=Miner">Miner</a> to 100</b> - Miner can be leveled to 100 very easily alongside Fitter and and Mason, the Metal and Stone construction schools. As they do not gain processing EXP, you lose out on nothing and gain everything for Miner. Swap to Miner when leveling those schools to get yourself maxed out However, if you are not maxed out at this time, craft Adamantium Bars or Travertine Bricks to level yourself to max if you have the T6 formulas. Otherwise, use Mithril Bars or Marble Bricks.</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Gatherer">Gatherer</a> to 100</b> -  Gatherer can also be leveled to 100 very easily alongside the fabric, essence, and wood construction schools - Weaver, Enchanter, and Carpenter. As they do not gain processing EXP, you lose out on nothing and gain everything for Gatherer. Swap to Gatherer when leveling those schools to get yourself maxed out. If you still aren't by now, make the T6 resources of the aforementioned categories if you have the T6 formulas and, if not, the T5 ones to get the last few levels.</li>
				<li><b><a href="http://istariareference.com/schools.asp?school=Confectioner">Confectioner</a> to 100</b> - Confectioner can be leveled really at any time during this process as long as you have sufficient Foraging skill, but I left it as one of my last schools as I wanted to have the ability to tech my own gear in preparation for it. Check the <a href="#leveling-confectioner">Leveling Confectioner</a> section for more detail!
			</ol>
			<p>Done all of that? Got that beautiful 234 Craft Rating? Go check out Solistan in Dalimond to get your well-earned Grand Master Crafter title. Well done, Gifted! Now prepare to be bothered by every dragon and biped out there for everything you know!</p>
			<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
		</article>
	<!--BEGIN SIDEBAR -->
	<div class="sidebarbox">
		<?php include("../sidebar.html");?>
	</div>
	<!-- END SIDEBAR -->
</section>
</body>
</html>