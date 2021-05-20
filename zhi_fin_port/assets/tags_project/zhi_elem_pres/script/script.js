function onMapClick(loc){
	var textbox = document.getElementById('text');
	var tempString = "The continent you selected was "
	if (loc=="NA"){
		tempString += "North America";
	}  else if (loc=="AF"){
		tempString += "Africa";
	}else if (loc=="SA"){
		tempString += "South America";
	} else if (loc=="EU"){
		tempString += "Europe";
	} else if (loc=="AS"){
		tempString += "Asia";
	} else if (loc=="AU"){
		tempString += "Australia";
	}
	textbox.innerHTML = tempString;
	// document.getElementById("toast").style.visibility = "visible"
	return;
}

function resetselection(){
	var textbox = document.getElementById('text');
	textbox.innerHTML = "Select a continent";
}