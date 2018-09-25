function updatelist() {

	var listid = document.getElementById("list_d");

	if (listid.value == "") {
		alert("Please enter the Listing ID#");
		listid.focus();
		listid.style.backgroundColor="#FFF40D";
		listid.style.borderColor ="#FF380A";
		return false;
	}

	else {
		document.getElementById("list_d").style.backgroundColor="#FFFFFF";
		return true;
	}
}