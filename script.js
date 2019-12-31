// Gear Menu
var id;
function squish(id) {
	var clickCheck = document.getElementById(id).style.width;
	var selected;
	selected = id;
	if (clickCheck === '75%') {
			for (id=1; id < 11; id++) {
				document.getElementById(id).setAttribute("style","width:30%;padding-top:30%;")
				document.getElementById("simpletext"+id).setAttribute("style","visibility:visible;");
				document.getElementById("detailedtext"+id).setAttribute("style","visibility:hidden;font-size:0em;")
			}
	} else {
			for (id=1; id < 11; id++) {
				if (id !== selected) {
				document.getElementById(id).setAttribute("style","width:0%;padding-top:0%;");
				document.getElementById("simpletext"+id).setAttribute("style","visibility:hidden;");
			} else { 
				document.getElementById("simpletext"+id).setAttribute("style","visibility:hidden;");
				document.getElementById("detailedtext"+id).setAttribute("style","visibility:visible;font-size:1em;");
				document.getElementById(id).setAttribute("style","width:75%;padding-top:75%;");
			}
		}
	}
}

//ROP CALCULATOR
function validationCheck() {
	var adv = document.getElementById("alevel").value;
  var tpPower = document.getElementById("tpPower").value;
  var tpFocus = document.getElementById("tpFocus").value;
  if (adv < 30 || adv > 100 || isNaN(adv)) {
    document.getElementById("output").innerHTML = "Please enter a level between 30 and 100.";
  } else if (tpPower < 0 || tpPower > 600 || isNaN(tpPower) || tpFocus < 0 || tpFocus > 600 || isNaN(tpFocus)) {
    document.getElementById("output").innerHTML = "Please enter a training point value between 0 and 600.";
  } else {
    calculateCraft(adv,tpPower,tpFocus);
}
}

function hideMenus() {
	if (document.getElementById("gearless").checked === true) {
			document.getElementById("gearlessHideable").style.visibility = "visible";
			document.getElementById("gearlessHideable").style.height = "auto";
			document.getElementById("maxUnteched").checked = false;
	}	else { document.getElementById("gearlessHideable").style.visibility ="hidden";
			document.getElementById("gearlessHideable").style.height = "0";
			document.getElementById("gearlessUnteched").checked = false; }
	
	if (document.getElementById("max").checked === true) {
			document.getElementById("maxHideable").style.visibility = "visible";
			document.getElementById("gearlessUnteched").checked = false;
			}	else {
			document.getElementById("maxHideable").style.visibility ="hidden";
			document.getElementById("maxUnteched").checked = false;
		}
	
	if (document.getElementById("max").checked === true && document.getElementById("helian").checked === true) {
			document.getElementById("machineHideable").style.visibility = "visible";
			}	else {
			document.getElementById("machineHideable").style.visibility ="hidden";
		}
}

function calculateCraft(adv,tpPower,tpFocus) {
	
	//Defining variables and setting standard variables
  var advLowCheck,negativeCheck,advBracket,advTier,advPower,advFocus,advBuff,advRoar,totalFocus,totalPower,totalTra,totalSpl,initNeeded,finalNeeded,craftingLevel,extra,total;
  var lunus = document.getElementById("lunus").checked;
  var helian = document.getElementById("helian").checked;
	var gearless = document.getElementById("gearless").checked;
	var opt = document.getElementById("opt").checked;
	var max = document.getElementById("max").checked;
	var unteched = false;
	var base = 180;
	var advScales = 0;
	var scaleTechs = 0;
  var DRAfoc = 7;
  var DRApow = 8;
  var techmod = 4;
  var masteryScales = 10;
  var traPwrMod = 0.07;
  var traFocMod = 0.03;
  var splPwrFocMod = 0.05;
  var skillLvl = 8;
	var machine = false;
	var cBracket = 2;
	
	//Defining unteched
	if (document.getElementById("gearlessUnteched").checked === true || document.getElementById("maxUnteched").checked === true) {
		unteched = true;
	}
	if (document.getElementById("machine").checked === true) {
		machine = true;
	}
	
	//Finding which primal roar you will use
	if (adv < 59) {
		advRoar = 100;
	} else if (adv < 69 && adv >= 59) {
		advRoar = 150;
	} else if (adv < 89 && adv>= 69) {
		advRoar = 200;
	} else {
		advRoar = 250;
	}
	
	// Checking for if your craft level is higher than your adventure level.
	advLowCheck = (helian === true && adv < 40)
	
	// Finding your tier and bracket if your adv determines it.
	advBracket = Math.floor(adv/10);
		if (adv < 40) { // Tier
			advTier = 2;
		} else if(adv >= 40 && adv < 60) {
			advTier = 3;
		} else if(adv >= 60 && adv < 80) {
			advTier = 4;
		} else {
			advTier = 5;
		}
	//Setting tier to 3 and bracket to 4 if your craft is higher. ( assume lv 40)
	//Base is set to a base of 40 crafting.
	if (advLowCheck === true && max === false) {
		advTier = 3;
		advBracket = 4;
		base = 340;
	} else if (advLowCheck === false && max === true) {
		base = 160;
	} else if (advLowCheck === true && max === true) {
		base = 320;
	}
	// Calculating final values of power and focus.
		advPower = adv*DRApow + tpPower/4;
		advFocus = adv*DRAfoc + tpFocus/4;
		advBuff = 18 + 24*(advTier - 1);
		if (opt === true) {
		advScales = (advBracket + 1) * advTier * masteryScales;	
		scaleTechs = (advBracket + 1) * advTier * techmod;
		} else if (unteched === true) {
		advScales = (advBracket + 1) * advTier * masteryScales;	
		}
		
	// Totals
		if (max === true && unteched === false) {
			totalFocus = advFocus;
			totalPower = advPower;
		} else if (max === true && unteched === true) {
		totalFocus = advFocus;
		totalPower = advPower + advScales;
		} else {
		totalFocus = advFocus + advBuff;
		totalPower = advPower + advBuff + advScales + advRoar;
		}
	
	// Direct skill bonuses as they are constant
	
	// LUNUS
  if (lunus === true) {
		//Total transmutation from adventure and its related buffs + base 20 craft.
		base = 160;
		totalTra = totalPower * traPwrMod + totalFocus * traFocMod + scaleTechs + base;
		finalNeeded = 300-Math.floor(totalTra);
		
		if (finalNeeded < 0) {
			finalNeeded = 0;
		}
		//Calculating the craft level with 8 skill/lvl
		craftingLevel = 20 + Math.ceil(finalNeeded/8);
		
		//The total skill amount for results
		total = Math.floor(totalTra) + 8*Math.ceil(finalNeeded/8)
		
		//Finding the extra amount
		extra = total - 300
		
		//Writing the output
		if (extra > 30) {
			document.getElementById("output").innerHTML = "You need to be at least <b> level " + craftingLevel + "</b> in Dragon Crafter to complete the Lunus RoP. Following the guidelines listed below, you should be around " + total + " Transmutation. <br> You'll have about " + extra + " extra transmutation skill that you do not need. You can decide for yourself what you don't want to do to save time. <br> Your stats come from the following sources. The total number here may be slightly off due to rounding.";
		} else {
			document.getElementById("output").innerHTML = "You need to be <b> level " + craftingLevel + "</b> in Dragon Crafter to complete the Lunus RoP. Following the guidelines listed below, you should be around " + total + " Transmutation. You will only have about " + extra + " extra. <br><br> Your stats come from the following sources. The total number here may be slightly off due to rounding.";
		}
		//Listing statistic sources
			document.getElementById("statsource_machine").innerHTML = "";
			document.getElementById("statsource_all").innerHTML = " <li> <i>Adventure Level:</i> " + Math.floor((advPower-tpPower)*traPwrMod + (advFocus-tpFocus)*traFocMod) + " Transmutation.</li>" + "<li> <i>Training Points:</i> " + Math.floor((tpPower*traPwrMod) + (tpFocus*traFocMod)) + " Transmutation.</li>" + "<li> <i>Craft Level:</i> " + Math.floor(craftingLevel*8) + " Transmutation.</li>";
		if (gearless === true || opt === true) {
			document.getElementById("statsource_buff").innerHTML = "<li> <i>Promote Intellect:</i> " + Math.floor(advBuff * traPwrMod + advBuff*traFocMod) + " Transmutation.</li>" + "<li> <i>Primal Roar:</i> " + Math.floor(advRoar * traPwrMod) + " Transmutation.</li>";
		} else {
			document.getElementById("statsource_buff").innerHTML = "";
		}
		if (opt === true) {
			document.getElementById("statsource_gear").innerHTML = "<li> <i>Craft Scales:</i> " + Math.floor((traPwrMod*advScales + scaleTechs)) + " Transmutation. (" + Math.floor((traPwrMod*advScales + scaleTechs)/advBracket) + "  per scale) </li>";
		} else if (unteched === true) {
			document.getElementById("statsource_gear").innerHTML = "<li> <i>Basic Scales:</i> " + Math.floor((traPwrMod*advScales)) + " Transmutation. (" + Math.floor((traPwrMod*advScales)/advBracket) + "  per scale) </li></ul>";
		} else {
			document.getElementById("statsource_gear").innerHTML = "";
		}
		
	//HELIAN
  } else {
    
		//Total spellcraft from adventure and its related buffs + base 20 craft. No scaletechs yet until we figure out the masteries.
		var initTotalSpl = totalPower * splPwrFocMod + totalFocus * splPwrFocMod + scaleTechs + base;
		if (max === false || max === true && machine === true) {
		initTotalSpl = totalPower * splPwrFocMod + totalFocus * splPwrFocMod + 90 + scaleTechs + base; }
		// How much is initially needed before masteries and techs.
		initNeeded = 450-Math.floor(initTotalSpl);
		var initCraft = 20 + initNeeded/8;
		if (advLowCheck === true) { initCraft = initCraft + 20; } //Lvl 40
		//Crafting bracket for masteries. Setting to 0 if no more skill is needed.
		
		if (max === true) {
			cBracket = 2; //2*10 - 20 = 0 in later calculation
		} else if (advLowCheck === true) {
			cBracket = 4; 
		} else if (initCraft < 30) {
			cBracket = 2;
		} else if (initCraft < 40 && initCraft >= 30) {
			cBracket = 3;
		} else if (initCraft < 50 && initCraft >= 40) {
			cBracket = 4;
		} else if (initCraft < 60 && initCraft >= 50) {
			cBracket = 5;
		} else {
			cBracket = 6;
		}
		
		totalSpl = Math.floor(initTotalSpl) + (cBracket*10-20);
		
		// Calculating the final needed skill.
		
		finalNeeded = 450 - Math.floor(totalSpl);
		
		// Negative numbers are not allowed here
		if (finalNeeded < 0) {
			finalNeeded = 0;
		}
		
		//The total skill amount for results
		total = Math.floor(totalSpl) + 8*Math.ceil(finalNeeded/8);
		
		
		//Finding the extra amount
		extra = total - 450;
		
		// If the adv is low, the default is 40 + calculated craft levels. Otherwise it's the normal 20 + calculated levels.
		//Calculating the craft level with 8 skill/lvl
		craftingLevel = 20 + Math.ceil(finalNeeded/8);
		if (advLowCheck === true) {
		craftingLevel = 40 + Math.ceil(finalNeeded/8);
		}
		//Notifying the player that they don't need everything.
		if (extra > 50 && advLowCheck === true) {
			document.getElementById("output").innerHTML = "You need to be <b> level " + craftingLevel + "</b> in Dragon Crafter to complete the Helian RoP. Following the guidelines listed below, you should be around " + total + " Spellcraft. <br> Due to your low adventure level (sub-40), you'll have about " + extra + " extra spellcraft that you do not need. You can decide for yourself what you don't want to do to save time. <br><br> Your stats come from the following sources. The total number here may be slightly off due to rounding."
		} else if (extra > 30 && advLowCheck === false) {
			document.getElementById("output").innerHTML = "You need to be <b> level " + craftingLevel + "</b> in Dragon Crafter to complete the Helian RoP. Following the guidelines listed below, you should be around " + total + " Spellcraft. <br/><br/> You'll have about " + extra + " extra spellcraft that you do not need. You can decide for yourself what you don't want to do to save time. <br><br> Your stats come from the following sources. The total number here may be slightly off due to rounding.";
		} else {
			document.getElementById("output").innerHTML = "You need to be <b> level " + craftingLevel + "</b> in Dragon Crafter to complete the Helian RoP. Following the guidelines listed below, you should be around " + total + " Spellcraft. You will only have about " + extra + " extra. <br><br> Your stats come from the following sources. The total number here may be slightly off due to rounding.";
		}
		//Listing statistic sources
			document.getElementById("statsource_all").innerHTML = " <li> <i>Adventure Level:</i> " + Math.floor((advPower-tpPower)*splPwrFocMod + (advFocus-tpFocus)*splPwrFocMod) + " Spellcraft.</li>" + "<li> <i>Training Points:</i> " + Math.floor((tpPower*splPwrFocMod) + (tpFocus*splPwrFocMod)) + " Spellcraft.</li>" + "<li> <i>Craft Level:</i> " + Math.floor(craftingLevel*8) + " Spellcraft.</li>";
		if (gearless === true || opt === true) {
			document.getElementById("statsource_buff").innerHTML = "<li> <i>Promote Intellect:</i> " + Math.floor(advBuff * splPwrFocMod + advBuff*splPwrFocMod) + " Spellcraft.</li>" + "<li> <i>Primal Roar:</i> " + Math.floor(advRoar * splPwrFocMod) + " Spellcraft.</li>" + " <li><i>Crafting Masteries:</i> " + 10*cBracket + " Spellcraft.</li>";
		} else { 
			document.getElementById("statsource_buff").innerHTML = "";
		}
		if (opt === true) {
			document.getElementById("statsource_gear").innerHTML = "<li> <i>Craft Scales:</i> " + Math.floor((splPwrFocMod*advScales + scaleTechs)) + " Spellcraft. (" + Math.floor((splPwrFocMod*advScales + scaleTechs)/advBracket) + "  per scale) </li>";
		} else if (unteched === true) {
			document.getElementById("statsource_gear").innerHTML = "<li> <i>Basic Scales:</i> " + Math.floor((splPwrFocMod*advScales)) + " Spellcraft. (" + Math.floor((splPwrFocMod*advScales)/advBracket) + "  per scale) </li></ul>";
		} else {
			document.getElementById("statsource_gear").innerHTML = "";
		}	
		if (opt === true || gearless === true || max === true && machine === true)	{
			document.getElementById("statsource_machine").innerHTML = " <li><i>Machines:</i> 90 Spellcraft.</li>"
		} else {
			document.getElementById("statsource_machine").innerHTML = "";
		}
  }
}

// Modal Image Code - W3 Labs / Internet
var modal = document.getElementById('modalImage');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.modalImg');
var modalImg = $("#img01");
var captionText = document.getElementById("caption");
$('.modalImg').click(function(){
    modal.style.display = "block";
    var newSrc = this.src;
    modalImg.attr('src', newSrc);
    captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

//Taken from W3Labs
function sortTable(n) {
	var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
	table = document.getElementById("consigner");
	switching = true;
	// Set the sorting direction to ascending:
	dir = "asc"; 
	/* Make a loop that will continue until
	no switching has been done: */
	while (switching) {
		// Start by saying: no switching is done:
		switching = false;
		rows = table.getElementsByTagName("TR");
		/* Loop through all table rows (except the
		first, which contains table headers): */
		for (i = 2; i < (rows.length - 1); i++) {
		// Start by saying there should be no switching:
		shouldSwitch = false;
		/* Get the two elements you want to compare,
		one from current row and one from the next: */
		x = rows[i].getElementsByTagName("TD")[n];
		y = rows[i + 1].getElementsByTagName("TD")[n];
		/* Check if the two rows should switch place,
		based on the direction, asc or desc: */
	if (dir == "asc") {
		if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		  // If so, mark as a switch and break the loop:
		  shouldSwitch= true;
		  break;
		}
	} else if (dir == "desc") {
		if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
		  // If so, mark as a switch and break the loop:
		  shouldSwitch= true;
		  break;
		}
	}
    }
    if (shouldSwitch) {
	/* If a switch has been marked, make the switch
	and mark that a switch has been done: */
	rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
	switching = true;
	// Each time a switch is done, increase this count by 1:
	switchcount ++; 
    } else {
	/* If no switching has been done AND the direction is "asc",
	set the direction to "desc" and run the while loop again. */
	if (switchcount == 0 && dir == "asc") {
		dir = "desc";
		switching = true;
	}
    }
  }
}
