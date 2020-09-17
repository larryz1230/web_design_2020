function onMapClick(loc){
	var textbox = document.getElementById('text');
	if (loc=="NA"){
		textbox.innerHTML = "North America";
	} else if (loc="SA"){
		textbox.innerHTML = "South America"
	}
	document.getElementById("toast").style.visibility = "visible"
}