function deletelist() {

	var list = document.getElementById("list_id");

	if (list.value == "") {
		alert("Please enter the Listing ID#");
		list.focus();
		list.style.backgroundColor="#FFF40D";
		list.style.borderColor ="#FF380A";
		return false;
	}

	else {
		document.getElementById("list_id").style.backgroundColor="#FFFFFF";
		return true;
	}
}