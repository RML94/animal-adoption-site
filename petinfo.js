function petinfo() {

	var pname = document.getElementById("petn");
	var page = document.getElementById("peta");
	var ptype = document.getElementById("pett");
	var pprice = document.getElementById("petp");

	if (pname.value == "") {
		alert("Please enter animal name");
		pname.focus();
		pname.style.backgroundColor="#FFF40D";
		pname.style.borderColor ="#FF380A";
		return false;
	}

	else if (page.value == "") {
		alert("Please enter animal age");
		page.focus();
		page.style.backgroundColor = "#FFF40D";
		page.style.borderColor ="#FF380A";
		return false;
	}

	else if (ptype.value == "") {
		alert("Please enter a breed");
		ptype.focus();
		ptype.style.backgroundColor="#FFF40D";
		ptype.style.borderColor ="#FF380A";
		return false;
	}

	else if (pprice.value == "") {
		alert("Please enter the price of the animal");
		pprice.focus();
		pprice.style.backgroundColor="#FFF40D";
		pprice.style.borderColor ="#FF380A";
		return false;
	}

	else {
		document.getElementById("petn").style.backgroundColor="#FFFFFF";
		document.getElementById("peta").style.backgroundColor="#FFFFFF";
		document.getElementById("pett").style.backgroundColor="#FFFFFF";
		document.getElementById("petp").style.backgroundColor="#FFFFFF";
		alert("Thank you for filling out the form!");
		return true;
	}
}