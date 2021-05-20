// document.getElementById('nav').style.opacity="0.4";
document.getElementById('enter').style.opacity="0.4";

function unblur(){
  document.getElementById('nav').style.opacity="1";
  document.getElementById('enter').style.opacity="1";
  document.getElementById('popup').style.display="none";
  document.getElementById('html').style.backgroundImage = "url('../images/gradgrey.png')";
}

function gotohome(){
  window.location="zhi_home.php"
  // console.log("campus.html");
  console.log("hello");
}

function showpop() {
  var x = document.getElementById("popout");
  if (x.style.visibility === "hidden") {
    x.style.visibility = "visible";
  } else {
    x.style.visibility = "hidden";
  }
}

function gotogames(gamename){
  window.location="https://www.facebook.com/games/?redirect_to_gameroom=1";
}

function changecat(){
  var x = document.getElementById("cars").value;
  document.getElementById("catname").innerHTML = x;
  if (x=="Card Games"){
    document.getElementById('tables').style.display= "none";
  } else if (x=="Board Games"){
    document.getElementById('tables').style.display= "none";
  } else{
    document.getElementById('tables').style.display= "block";
  }
}