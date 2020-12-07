function toInterests(s){
	var elmnt = document.getElementById(s);
	console.log(s);
	elmnt.scrollIntoView();
}

function getDate(){
	var date1 = new Date("12/30/2003"); 
	var date2 = new Date();
	  
	var distance = date2 - date1;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var years = Math.floor(distance / (1000 * 60 * 60 * 24 *365));
  days = days%365.25;
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000) + minutes*60 + hours*3600 + days*3600*24;

  // Display the result in the element with id="demo"
  document.getElementById("specage").innerHTML = "I am currently "+ years + " years and " + seconds + " seconds old ";
}

setInterval(getDate, 1000);
getDate();


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var demo = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";

  captionText.innerHTML = demo[slideIndex-1].alt;
  console.log(demo[slideIndex-1].alt);
}