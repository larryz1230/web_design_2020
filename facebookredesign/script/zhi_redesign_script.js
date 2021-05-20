//profile popup

function showpop() {
  var x = document.getElementById("popout");
  if (x.style.visibility === "hidden") {
    x.style.visibility = "visible";
  } else {
    x.style.visibility = "hidden";
  }
}





// shows more features on the left
function showmore() {
  var x = document.getElementById("table");
  var y = document.getElementById("menu");
  var z = document.getElementById("close");
  x.style.display = "block";
  y.style.display="none";
  z.style.display="block";
  console.log("done");
}

function showless() {
  var x = document.getElementById("table");
  var y = document.getElementById("menu");
  var z = document.getElementById("close");
  x.style.display = "none";
  y.style.display = "block";
  z.style.display = "none";
}


    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }



// const node = document.getElementById("searchfb");
// node.addEventListener("keydown", function(event) {

//   if (event.which === 13 || event.keyCode === 13 || event.key === "Enter"){
//     event.preventDefault();
//         // Do more work
//         node.value="";
//   }
// });

function check(num){
  document.getElementById("male").checked = false;
  document.getElementById("female").checked = false;
  document.getElementById("other").checked = false;

  document.getElementById(num).checked = true;
}

function submitted(){
  var check1 = document.getElementById("male").checked ;
  var check2 =document.getElementById("female").checked ;
  var check3 = document.getElementById("other").checked ;
  var name1 = document.getElementById("fname").value.length>0;
  var name2 = document.getElementById("lname").value.length>0;
  var email = document.getElementById("email").value.length>0;
  var yearval = document.getElementById("year").value;
  var year = document.getElementById("year").value.length>0;
  var month = document.getElementById("month").value.length>0;
  var day = document.getElementById("day").value.length>0;
  var password = document.getElementById("password").value.length>0;


  
  if (check1||check2||check3 && name1&&name2&&email&&year){
    if (yearval>2010 || yearval<1850){
      alert("invalid bday");
      return false;
    } else{
      // clearall();
      
    }
  } else{
    alert("please fill out all fields");
    return false;
  }  
}

function submitlog(){
  var lemail = document.getElementById("lemail").value.length>0;
  var lpassword = document.getElementById("lpassword").value.length>0;
  console.log(lemail);
  if (!lemail || !lpassword){
    alert("fill out all fields");
    return false;
  }
}


function closereg(){
  document.getElementById("container").style.display="none";
  document.getElementById("html").style.backgroundColor="#f4f4f4";
  document.getElementById("logincontainer").style.opacity="1";
  document.getElementById("title").style.opacity="1";
}

function showreg(){
  document.getElementById("container").style.display="block";
  document.getElementById("html").style.backgroundColor="#a0b0b0";
  document.getElementById("logincontainer").style.opacity="0.2";
  document.getElementById("title").style.opacity="0.2";
}

function gotocampus(){
  window.location="zhi_campus.html";
  // console.log("campus.html");
}

function gotohome(){
  window.location="zhi_home.php";
  // console.log("campus.html");
}

function gotogames(){
  window.location="zhi_games.html";
  // console.log("campus.html");
}

function gotopages(){
  window.location="zhi_pages.html";
  // console.log("campus.html");
}

