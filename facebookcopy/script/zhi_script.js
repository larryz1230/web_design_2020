function showpop() {
  var x = document.getElementById("popout");
  if (x.style.visibility === "hidden") {
    x.style.visibility = "visible";
  } else {
    x.style.visibility = "hidden";
  }
}

function showmore() {
  var x = document.getElementById("showmore");
  var y = document.getElementById("seemore");
    x.style.display = "block";
    y.style.display = "none";
}

function showless() {
  var x = document.getElementById("showmore");
  var y = document.getElementById("seemore");
    x.style.display = "none";
    y.style.display = "block";
}