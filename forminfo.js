function validate(email) {

	var first = document.getElementById("first");
	var last = document.getElementById("last");
	var pet = document.getElementById("pet_id");
	var email = document.getElementById("mail");

	if (first.value == "") {
		alert("First name field is blank - Please enter name");
		first.focus();
		first.style.backgroundColor="#FFF40D";
		first.style.borderColor ="#FF380A";
		return false;
	}

	else if (last.value == "") {
		alert("Last name field is blank - Please enter name");
		last.focus();
		last.style.backgroundColor="#FFF40D";
		last.style.borderColor ="#FF380A";
		return false;
	}

	else if (email.value == "") {
		alert("Please enter an email");
		email.style.backgroundColor = "#FFF40D";
		email.style.borderColor ="#FF380A";
		return false;
	}

	else if (pet.value == "") {
		alert("Pet ID field is blank - Please enter an ID");
		pet.focus();
		pet.style.backgroundColor="#FFF40D";
		pet.style.borderColor ="#FF380A";
		return false;
	}

	else {
		document.getElementById("pet_id").style.backgroundColor="#FFFFFF";
		document.getElementById("first").style.backgroundColor="#FFFFFF";
		document.getElementById("last").style.backgroundColor="#FFFFFF";
		document.getElementById("mail").style.backgroundColor="#FFFFFF";
		alert("Thank you " +first.value +" for filling out the form!");
		return true;
	}
}
