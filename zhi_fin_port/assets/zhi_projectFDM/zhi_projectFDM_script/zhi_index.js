function search() {
	var searchbar = document.getElementById('search').value;
	document.getElementById('con').style.display="none";
	if (searchbar == "3d prints"){
		document.getElementById("screw").style.display = "block";
		document.getElementById("noresults").style.display = "none";
		console.log("3d prints");
	} else if (searchbar=="bestsellers"){
		document.getElementById("screw").style.display = "none";
		document.getElementById("noresults").style.display = "none";
		document.getElementById('con').style.display="block";
	} else{
		document.getElementById("screw").style.display = "none";
		document.getElementById("noresults").style.display = "block";
	}
	document.getElementById('search').value = "";
	searrrch();
	return false;
}

if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
}

// document.getElementById("product").style.display = "block";


$('#form').submit(function () {
 search();
 return false;
});


 function searrrch(){
	window.scroll({
	  top: 550,
	  behavior: 'smooth'
	});
};

