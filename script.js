function homeNavigation() {
document.getElementById("nav").innerHTML =
"<div class='nav'>" +
"	<div class='navheader'><b>Navigation</b></div>" +
"	<div class='navcontent'>" +
"		<a href='index.html' style='text-decoration:none;'>Index</a>" +
"		<a href='guildproperty.html' style='text-decoration:none'>Guild Property</a>" +
"		<a href='guildofficers.html' style='text-decoration:none'>Guild Officers</a>" +
"		<a href='guildstructure.html' style='text-decoration:none'>Guild Structure</a>" +
"		<a href='members.html' style='text-decoration:none'>Member List</a>" +
"		<a href='rules.html' style='text-decoration:none'>Rules & Regulations</a>" +
"		<a href='resources.html' style='text-decoration:none'>Istarian Resources</a>" +
"		<a href='consigner.html' style='text-decoration:none'>Genevia Consigner</a>" +
"		<a href='guides.html' style='text-decoration:none'>Guides</a>" +
"		<a href='contacts.html' style='text-decoration:none'>Contact Us</a>" +
"	</div>" +
"</div>";
}

function sidebar() {
document.getElementById("sidebar").innerHTML =
"<div class='side'>"+
	"<div class='sideheader'><b>Recent Events</b></div>"+
	"<br/>"+
	"<div class='sidecontent'>" +
		"<b>New Page & Guides!</b> <br/> <i style='font-size:.75em;'>11/11/17</i> <br/> <div class='seperator'></div>"+
				"<p>A few guides have been written regarding Dragon builds and biped adventure and craft leveling! Furthermore, the consigner page has been created as we try to stock our own consigner. Stay tuned!</p>"+
		"<br/>"+
		"<b>Website Up!</b> <br/> <i style='font-size:.75em;'>10/23/17</i> <br/> <div class='seperator'></div>"+
				"<p>The website has been created and is up and running!</p>"+
		"<br/>"+
		"<b>Racktor's Refuge Complete</b> <br/> <i style='font-size:.75em;'>10/23/17</i> <br/> <div class='seperator'></div>"+
				"<p>Racktor's Refuge's final libraries are completed and thus the entire lair is final.</p>"+
	"</div>" +
"</div>";
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
