<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 

<head><title>Istara's Chosen - Epic Monster Guide</title>
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
<body id="main" onload="homeNavigation(); sidebar();">
<section>
	<!--BEGIN NAVIGATION -->
	<div class="navbox">
		<?php include("../navigation.html");?>
	</div>
	<!-- END NAVIGATION -->
	<article>
		<header class="article border">Epic Monster Guides</header>
	<p style="font-size:.75em">Written by Racktor &amp; Co., April 17th, 2019</p>
			<br/>
			<center><i><a href="index.php">&larr; Return to Guides</a></i></center>
			<br/>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#greater">Greater Epics</a></li>
					<ul>
						<li><a href="#falgut">Falgut the Slaver</a></li>
						<li><a href="#reklar">General Reklar Plaguebearer</a></li>
					</ul>
				<li>Lesser Epics</li>
					<ul>
						<li><a href="#aop">Avatar of Pain</a></li>
					</ul>
			</ul>
			<br/>
		<a name="introduction"><header class="subsection border">Introduction</header></a>
			<p>Epic monsters are the final boss monsters in Istaria. They are seperated into two categories: greater and lesser. These do not distinguish levels of difficulty, but rather levels of reward. Greater bosses give a greater reward and are involved in the creation of epic weapons and armor, dropping essences required in these. Lesser bosses don't give any essences or have any related weapons or armor, but they still drop epic tokens, some crates, and count for their own daily and part of the weekly quest.</p>
			<p>As of right now, the epics are categorized as such:</p>
			<ul>
			<li>Greater Epics</li>
				<ul>
				<li><a href="http://www.istaria-lexica.de/Falgut_the_Slaver">Falgut the Slaver</a></li>
				<li><a href="http://www.istaria-lexica.de/General_Reklar_Plaguebearer">General Reklar Plaguebearer</a></li>
				<li><a href="http://www.istaria-lexica.de/Greater_Anchor">Greater Anchor</a></li>
				<li><a href="http://www.istaria-lexica.de/Memory_of_Elial">Memory of Elial</a></li>
				<li><a href="http://www.istaria-lexica.de/Shaloth_the_Queen">Shaloth the Queen</a></li>
				<li><a href="http://www.istaria-lexica.de/Son_Of_Gigaroth">Son of Gigaroth</a></li>
				<li><a href="http://www.istaria-lexica.de/Surtheim">Surtheim</a></li>
				<li><a href="http://www.istaria-lexica.de/Valkor_The_Impaler">Valkor the Impaler</a></li>
				</ul>
			<li>Lesser Epics</li>
				<ul>
				<li><a href="http://www.istaria-lexica.de/Avatar_of_Pain">Avatar of Pain</a></li>
				<li><a href="http://www.istaria-lexica.de/Daknor_The_Berserk">Daknor the Berserk</a></li>
				<li><a href="http://www.istaria-lexica.de/Fafnir_the_Defiler">Fafnir the Defiler</a></li>
				<li><a href="http://www.istaria-lexica.de/Gruk_the_Frigid">Gruk the Frigid</a></li>
				<li><a href="http://www.istaria-lexica.de/Lesser_Anchor">Lesser Anchor</a></li>
				<li><a href="http://www.istaria-lexica.de/Project_X">Project X</a></li>
				</ul>
			</ul>
			<p>Each individual epic has its own set of abilities that make it unique and differentiates each fight. Most notable are the greater epics, who are the most different with specific tactics, but lesser epics are generally more alike. While there certainly are unique lesser epics, the majority of them are relatively samey.</p>
			<p>In the upcoming sections, I will address what the general tactics are for fighting each boss, what is usually recommended for a group composition, and other details specific to each boss, beginning with greater epics.</p>
			<p>In general, however, there are a few very good tactics you want to try to repeat across every fight. They are as follows:</p>
			<ul>
				<li><b>Snarl uptime.</b> All of your dragons should try and chain Snarl, or at least keep the debuff up on the boss. Snarl makes the boss have a 65% reduced chance to hit, often causes them to miss critical attacks. Two dragons are enough to keep Snarl up on a boss at all times, so simply keep an eye on the bar and cast it if the buff fades.</li>
				<li><b>Staggering Howl and delay/recyle modifiers.</b> Dragons have a major delay modifier in Staggering Howl, increasing both by 50%. Keeping these sorts of debuffs up on a boss is extremely useful, as it makes them take 50% longer to use an ability/cast a spell and also 50% longer to get anything back while the debuff is up. Essentially, the boss is hitting you 50% slower in all cases, which means you're taking less damage, and thus less stress on the healer.</li>
				<li><b>Dragon Breezes and Aura of Health.</b> Dragons have three Breeze spells that are AoE - Refreshing, Rejuvenating, and regular Breeze. These stack with the biped healer Aura of Health, allowing a group to constantly regenerate a notable amount of health. Keeping these buffs up will help keep your party alive.</li>
				<li><b>Constrict Blood.</b> While particularly useful in some fights, Constrict Blood is just a good thing to have overall. A Bloodmage ability, it reduces the max health of an enemy by 30%. They do not regain this health once they take damage, meaning you have effectively removed 30% of the boss' health in <i>one hit</i>. On a boss like Falgut with nearly 1,000,000 HP, that's equivalent to doing 300,000 damage in one hit.</li>
			</ul>
			<p>Note: I am not the be all and end all of epic fighting. If you have any observations, suggestions, or tactics you think are good here, feel free to suggest them to me and I will gladly add in any valid tactics.</p>
				<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
		<a name="greater"><header class="subsection border">Greater Epics</header></a>
			<center><a name="falgut"><img src="../images/boss-falgut.png" style="max-width:80%;"></a></center>
				<table>
					<tr>
						<td><b>Health</b></td>
						<td><b>Damage Types</b></td>
						<td><b>Resistances</b></td>
						<td><b>Weaknesses</b></td>
						<td><b>Notable Guards</b></td>
					</tr>
					<tr>
						<td>~1,000,000</td>
						<td>Blight, Slash, Spirit (Ice, Flame, Energy)</td>
						<td>Primal, Spirit, Nature, Ice, Flame, Energy</td>
						<td>Life, Mind, Crush, Slash</td>
						<td><a href="http://www.istaria-lexica.de/Slaver%27s_Guard">Slaver's Guards</a></td>
					</tr>
				</table>
		<header class="subsection border" style="font-size:1.0em;"><i>General</i></header>
				<p>Falgut the Slaver is an epic added with the Niesa's Fate update in 2016. He has a few notable mechanics as well as a very sizable health pool (approximately 1,000,000 HP) and multiple followers known as Slaver's Guards (each with 87,300 HP). His resistances and weaknesses force you to use a Damage Crystal of Blight to maximize your damage. The drawback - a lack of Primal resistance - shouldn't bother you in the slightest.</p>
		<header class="subsection border" style="font-size:1.0em;"><i>Mechanics</i></header>
				<p>In order to fight Falgut, you have to use Shards (or slivers) of Freedom. He has an AoE aura called "Enslaved", which prevents you from doing anything - even recalling. The 'Freedom' buff counteracts this and is only available through the Shards or Slivers. The Slivers are dropped from monsters nearby Falgut's tower when using Inspire Freedom. 3 Slivers make a Shard, which has 10 uses that gives a 10-minute buff per use. You will want at least one shard for a fight, depending on how many players you have. Two or three is safer, but you may be able to scrape by with one.</p>
				<p>Falgut's only unique attack is related to the Enslavement debuff. He has an ability that can counteract the Freedom buff, stripping it from someone at random. When this happens, it is expected that others "Use" their shard/sliver on the player that was stripped, replenishing the buff, or the player runs out of the range of the debuff and re-uses their own shard/sliver.</p>
				<p>He has a few guards around him that deal a moderate amount of damage and have a notable amount of health.</p>
		<header class="subsection border" style="font-size:1.0em;"><i>Group Composition</i></header>
				<p><b>Recommended Party Size:</b> 10+, simply for the higher DPS to kill him faster.</p>
				<p><b>Healers:</b> As Falgut does not do much DPS, you should only need one healer. Experienced groups can probably not even run a healer and instead have individual party members focus on healing themselves.</p>
				<p><b>DPS:</b> As many DPS characters as possible is recommended. Falgut's high health pool makes the fight long and drawn out, so the more damage the better.</p>
				<p><b>Other:</b> A Bloodmage that can hit Falgut with "Constrict Blood" is extremely useful, as it drops his health by 20% immediately at the start of the fight.</p>
		<header class="subsection border" style="font-size:1.0em;"><i>Tactics</i></header>
				<p>Fighting Falgut himself is pretty easy, just very long. Simply kill his adds when they spawn, and then focus all your high-damaging abilities on Falgut himself. He will occasionally use an ability that will strip the Freedom buff from a party member. When he does this, another party member must use their shard <i>on</i> the affected person to allow them to act again. Otherwise, they must leave his Enslavement aura's range and re-use their own shard.</p>
				<p style="clear:both"><i><a href="#top">Return to Top <span style="font-size:.75em;">&#9650;</span></a></i></p>
		<header class="subsection border"></header>
			<center><a name="reklar"><img src="../images/boss-reklar.png" style="max-width:80%;"></a></center>
				<table>
					<tr>
						<td><b>Health</b></td>
						<td><b>Damage Types</b></td>
						<td><b>Resistances</b></td>
						<td><b>Weaknesses</b></td>
						<td><b>Notable Guards</b></td>
					</tr>
					<tr>
						<td>~430,000</td>
						<td>Slash, Blight, Pierce</td>
						<td>None</td>
						<td>None</td>
						<td><a href="http://www.istaria-lexica.de/Fallen_Plague-Dragon">Fallen Plague-Dragons</a> <br> <a href="http://www.istaria-lexica.de/Fallen_Plague-Warrior">Fallen Plague-Warriors</a></td>
					</tr>
				</table>
		<header class="subsection border" style="font-size:1.0em;"><i>General</i></header>
			<p>Reklar is often spoken of in fear for good reason; he is a more tactical boss, with a lot of higher DPS abilities, dispels, and a damage-convert mechanic that leaves your entire group relying on one party member to stay alive and keep a buff up.</p>
			<p>His health, however, is mediocre compared to some other epics and he himself is not too complicated to understand. Your best bet against Reklar is a good healer and a group that has updated armor.</p>
		<header class="subsection border" style="font-size:1.0em;"><i>Mechanics</i></header>
			<p><b>Primal Boon and the Boon Caster.</b> Reklar's primary mechanic is the spell Primal Boon. You get it from an NPC in a lair north of Dralk; it requires 1000 Primal and 1 Ethereal Shard to cast. The buff lasts 10 seconds and allows you to damage Reklar. Ethereal Shards are dropped by the creatures around Reklar's fortress. Per fight, you will need between 40 and 100 shards depending on your boon caster's skill and the length of the fight.</p>
			<p>Your boon caster should be doing nothing but focusing on managing Primal Boon. The buff lasts 10 seconds, but it takes 4 or so seconds to go through a full cast of the spell. If you let it autocast, you will eat more than twice as many shards as you need. The boon caster should cancel the autocast every time after cast, then wait until the Boon's buff has 4 seconds left. Only then should they begin to cast it again.<p>
			<p>In the meantime, the boon caster can fit in some abilities or spells to help damage. They should focus on keeping Alacrity up on themselves, as should the healer.</p>
			<p><b>Plague Breath.</b> Plague Breath is a special ability unique to Reklar. It not only does a good deal of damage, but it applies a debuff that will try to dispel buffs on you. Left unchecked, this can cause your group to lose all of their buffs over time. A big enough group can ignore this and power through, but smaller groups will want to be cautious that they aren't losing important buffs such as Alacrity.</p>
			<p><b>Terrifying Roar.</b> This is another unique ability from Reklar. It turns you into a wisp, colloquially known as being "wisped". It lasts 32 seconds and cannot be dispelled, leaving you helpless as you cannot do any actions or move. Healers and Boon Casters should call out if they are wisped, so the group knows to either stop DPS (for the boon caster) or focus extra heals on themselves and the healer.</p>
			<p><b>Paralyzing Breath.</b> While not as well known, this is another Reklar-specific ability. It causes a painful Life DoT with a 6-second stun and root in an area, which can cripple a group that's already low on health.</p>
		<header class="subsection border" style="font-size:1.0em;"><i>Group Composition</i></header>
			<p><b>Recommended Party Size:</b> 8-14</p>
			<p><b>Healers:</b> You will want at least one Healer for this fight. Two is a nice boost, but most groups can do with one good Healer. You will want at least one Healer per 9 other characters.</p>
			<p><b>DPS:</b> You will want at least 6 (experienced) to 10 (newer) DPS characters on Reklar. More DPS is helpful, but too many will cause the Healer to be stressed and spread thin across many characters; if you go over 9 DPS, it becomes more preferable to have two healers to share the load.</p>
			<p><b>Other:</b> You need one Dragon as a dedicated Boon Caster. A secondary 'backup caster' with about 25% of the Ethereal Shards can be assigned in case the main Boon Caster gets wisped.</p>
		<header class="subsection border" style="font-size:1.0em;"><i>Tactics</i></header>
			<p>Outside of dealing with his specific mechanics (which is gone over in the mechanic section), you want to try to stack all of your group on one entrance of his castle. Utilize Resistance Crytals of Blight to try to minimize the damage from Plague Breath and have bipeds priorize Health buffs on all characters to soak up damage.</p>
			<p>Pull Reklar to the corner you are stacked in and kill his adds as fast as possible. Do not loot them; once looted, their bodies despawn faster and thus respawn faster. (Possibly untrue; untested, but common belief)</p>
			<p>Reorganise your group window so that your Healer is on top with the Boon Caster right below to give you easy access/awareness for when your Caster or Healer is dying or dead. Keep an eye on your buffs to make sure you are not losing important ones, like Alacrity.<p>
			<p>Otherwise, focus on your role and keep an eye on your health, the monsters window, and your allies. The longer the fight goes on, the more likely you are to lose; try to end it as swiftly as possible with the amount of players you have.</p>
		</article>
	<!--BEGIN SIDEBAR -->
	<div class="sidebarbox">
		<?php include("../sidebar.html");?>
	</div>
	<!-- END SIDEBAR -->
</section>
</body>
</html>