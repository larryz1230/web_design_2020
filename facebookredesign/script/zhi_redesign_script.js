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


//shows more contacts on the right
function rightshowmore() {
  var x = document.getElementById("showmoreright");
  var y = document.getElementById("seemoreright");
    x.style.display = "block";
    y.style.display = "none";
}

function rightshowless() {
  var x = document.getElementById("showmoreright");
  var y = document.getElementById("seemoreright");
    x.style.display = "none";
    y.style.display = "block";
}

//clears textboxes inputs
const comment = document.getElementById("comment123");
const sound = document.getElementById("commm");
const conta = document.getElementById("contain");
console.log(conta);

comment.addEventListener("keydown", function(event) {

  if (event.which === 13 || event.keyCode === 13 || event.key === "Enter"){
    event.preventDefault();
        // Do more work
        sound.innerHTML += "<p>" + comment.value +  "</p>";
        console.log(conta.style.height);
        conta.style.height = (parseInt(conta.style.height.replace(/px/,""))+32)+"px"
        comment.value="";

  }
});

const node = document.getElementById("searchfb");
node.addEventListener("keydown", function(event) {

  if (event.which === 13 || event.keyCode === 13 || event.key === "Enter"){
    event.preventDefault();
        // Do more work
        node.value="";
  }
});

const status = document.getElementById("statusinput");
status.addEventListener("keydown", function(event) {

  if (event.which === 13 || event.keyCode === 13 || event.key === "Enter"){
    event.preventDefault();
        // Do more work
        statusinput.value="";
  }
});




