//ROP Crafting Calculator

function validationCheck() {
	var adv = document.getElementById("alevel").value;
  if (adv < 30 || adv > 100 || isNaN(adv)) {
    document.getElementById("output").innerHTML = "Please enter a level between 30 and 100.";
  } else {
    calculateCraft(adv);
  }
}

function calculateCraft(adv) {
	
	//Defining variables and setting standard variables
  var advLowCheck,negativeCheck,advBracket,advTier,advPower,advFocus,advBuff,advRoar,advScales,totalFocus,totalPower,scaleTechs,totalTra,totalSpl,base,initNeeded,finalNeeded,cBracket,craftingLevel,extra,total;
  var lunus = document.getElementById("lunus").checked;
  var helian = document.getElementById("helian").checked;
  var DRAfoc = 7;
  var DRApow = 8;
  var techmod = 4;
  var masteryScales = 10;
  var traPwrMod = 0.07;
  var traFocMod = 0.03;
  var splPwrFocMod = 0.05;
  var skillLvl = 8;
	
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
  if (helian === true && adv < 40) {
    advLowCheck = true;
  } else {  advLowCheck = false; }
	
	// Finding your tier and bracket if your adv determines it.
	if (advLowCheck === false) {
		advBracket = Math.floor(adv/10);
		if (lunus === true) {
			base = skillLvl*20;
		} else {
		base = 20*skillLvl+20; //Extra 20 from the lv 10 and 20 masteries
		}
		if (adv < 40) {
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
	} else {
		advTier = 3;
		advBracket = 4;
		base = 40*skillLvl+20;
	}
	// Calculating final values of power and focus.
		advPower = adv*DRApow;
		advFocus = adv*DRAfoc;
		advBuff = 18 + 24*(advTier - 1);
		advScales = (advBracket + 1) * advTier * masteryScales;		
		
	// Totals
		totalFocus = advFocus + advBuff;
		totalPower = advPower + advBuff + advScales + advRoar;
	
	// Direct skill bonuses as they are constant
		scaleTechs = (advBracket + 1) * advTier * techmod;
	
	// LUNUS
  if (lunus === true) {
		//Total transmutation from adventure and its related buffs + base 20 craft.
		totalTra = totalPower * traPwrMod + totalFocus * traFocMod + scaleTechs + base;
		finalNeeded = 300-Math.floor(totalTra);
		
		if (finalNeeded < 0) {
			finalNeeded = 0;
		} else {}
		//Calculating the craft level with 8 skill/lvl
		craftingLevel = 20 + Math.ceil(finalNeeded/8);
		
		//The total skill amount for results
		total = Math.floor(totalTra) + 8*Math.ceil(finalNeeded/8)
		
		//Finding the extra amount
		if (finalNeeded < 0) {
				extra = Math.abs(finalNeeded);
		} else {
				extra = total - 300
		}
		
		if (extra > 30) {
    document.getElementById("output").innerHTML = "You need to be <b> level " + craftingLevel + "</b> in Dragon Crafter to complete the Lunus RoP. Following the guidelines listed below, you should be around " + total + " Transmutation. <br/><br/> You'll have about " + extra + " extra transmutation skill that you do not need. I've listed the calculated bonuses from various things below so you can decide for yourself what you don't want to do to save time.<br> <ul> <li> <i>Promote Intellect:</i> " + Math.floor(2 * advBuff * splPwrFocMod) + " Transmutation</li> <li> <i>Primal Roar:</i> " + Math.floor(advRoar * splPwrFocMod) + " Transmutation</li> <li> <i>Craft Scales:</i> " + Math.floor((splPwrFocMod*advScales + scaleTechs)/advBracket) + " Transmutation per scale. </li> <li> <i>Crafting Masteries:</i> 10 Transmutation per tier.</li></ul>";
		} else {
    document.getElementById("output").innerHTML = "You need to be <b> level " + craftingLevel + "</b> in Dragon Crafter to complete the Lunus RoP. Following the guidelines listed below, you should be around " + total + " Transmutation. You will only have about " + extra + " extra.";
		}
		
	//HELIAN
  } else {
    
		//Total spellcraft from adventure and its related buffs + base 20 craft.
		totalSpl = totalPower * splPwrFocMod + totalFocus * splPwrFocMod + scaleTechs + 90 + base;
		// How much is initially needed before masteries.
		initNeeded = 450-Math.floor(totalSpl);
		//Crafting bracket for masteries. Setting to 0 if no more skill is needed.
		if (initNeeded <= 0) {
			cBracket = 2;
		} else if (initNeeded <= 90) {
			cBracket = 3;
		} else if (initNeeded <= 180 && initNeeded > 90) {
			cBracket = 4;
		} else if (initNeeded <= 270 && initNeeded > 180) {
			cBracket = 5;
		} else {
			cBracket = 6;
		}
		
		// Calculating the final needed skill.
		finalNeeded = 450 - Math.floor(totalSpl) + (cBracket*10 - 20);
		
		if (finalNeeded < 0) {
			finalNeeded = 0;
		} else {}
		
		//The total skill amount for results
		total = Math.floor(totalSpl) + (cBracket*10 - 20) + 8*Math.ceil(finalNeeded/8)
		
		//Finding the extra amount
		if (finalNeeded < 0) {
				extra = Math.abs(finalNeeded);
		} else {
				extra = total - 450
		}
		
		// If the adv is low, the default is 40 + calculated craft levels. Otherwise it's the normal 20 + calculated levels.
		if (advLowCheck === false) {
		//Calculating the craft level with 8 skill/lvl
		craftingLevel = 20 + Math.ceil(finalNeeded/8);
		} else {
		craftingLevel = 40 + Math.ceil(finalNeeded/8);
		}
		//Notifying the player that they don't need everything.
		if (extra > 50 && advLowCheck === true) {
    document.getElementById("output").innerHTML = "You need to be <b> level " + craftingLevel + "</b> in Dragon Crafter to complete the Helian RoP. Following the guidelines listed below, you should be around " + total + " Spellcraft. <br/><br/> Due to your low adventure level (sub-40), you'll have about " + extra + " extra spellcraft that you do not need. I've listed the calculated bonuses from various things below so you can decide for yourself what you don't want to do to save time.<br> <ul> <li> <i>Promote Intellect:</i> " + Math.floor(2 * advBuff * splPwrFocMod) + " Spellcraft</li> <li> <i>Primal Roar:</i> " + Math.floor(advRoar * splPwrFocMod) + " Spellcraft</li> <li> <i>Craft Scales:</i> " + Math.floor((splPwrFocMod*advScales + scaleTechs)/advBracket) + " Spellcraft per scale. </li> <li> <i>Crafting Masteries:</i> 10 Spellcraft per tier.</li></ul>";
		} else if (extra > 30 && advLowCheck === false) {
    document.getElementById("output").innerHTML = "You need to be <b> level " + craftingLevel + "</b> in Dragon Crafter to complete the Helian RoP. Following the guidelines listed below, you should be around " + total + " Spellcraft. <br/><br/> You'll have about " + extra + " extra spellcraft that you do not need. I've listed the calculated bonuses from various things below so you can decide for yourself what you don't want to do to save time.<br> <ul> <li> <i>Promote Intellect:</i> " + Math.floor(2 * advBuff * splPwrFocMod) + " Spellcraft</li> <li> <i>Primal Roar:</i> " + Math.floor(advRoar * splPwrFocMod) + " Spellcraft</li> <li> <i>Craft Scales:</i> " + Math.floor((splPwrFocMod*advScales + scaleTechs)/advBracket) + " Spellcraft per scale. </li> <li> <i>Crafting Masteries:</i> 10 Spellcraft per tier.</li></ul>";
		} else {
    document.getElementById("output").innerHTML = "You need to be <b> level " + craftingLevel + "</b> in Dragon Crafter to complete the Helian RoP. Following the guidelines listed below, you should be around " + total + " Spellcraft. You will only have about " + extra + " extra.";
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
