
var minn = 0;
var $hands = $('#liveclock div.hand')

window.requestAnimationFrame = window.requestAnimationFrame
|| window.mozRequestAnimationFrame
|| window.webkitRequestAnimationFrame
|| window.msRequestAnimationFrame
|| function(f){return setTimeout(f, 1000/60)}


function updateclock(){
   var curdate = new Date()
   var hour_as_degree = ( curdate.getHours() + curdate.getMinutes()/60 ) / 12 * 360
   var minute_as_degree = curdate.getMinutes() / 60 * 360
   var second_as_degree = ( curdate.getSeconds() + curdate.getMilliseconds()/1000 ) /60 * 360
   $hands.filter('.hour').css({transform: 'rotate(' + hour_as_degree + 'deg)' })
   $hands.filter('.minute').css({transform: 'rotate(' + minute_as_degree + 'deg)' })
   $hands.filter('.second').css({transform: 'rotate(' + second_as_degree + 'deg)' })
   var colors = ["#F0FFFF", "#F5F5DC", "FF00FF","#FFEBCD", "#FF7F50", "#6495ED", "#8A2BE2", "#DC143C", "#DEB887", "#D2691E", "#A9A9A9", "#DAA520"];
 var backgrounds = ["#ca431d", "#ffd2a5", "#a1cae2", "#dbf6e9", "#9ddfd3", "#8a79af", "#000000"];  //tbd

 curcolor = colors[(curdate.getHours())%12];   //set color of the eggs
 // curcolor = colors[curdate.getSeconds()%12];
 curhours = curdate.getHours();
 var curback = "";


 //change background color according to the time
 if (curhours>=21 || curhours<4){
     curback = backgrounds[6];
 } else if (curhours>=4 && curhours<7){
 	curback = backgrounds[0];
 } else if (curhours>=7 && curhours<10){
 	curback = backgrounds[1];
 } else if (curhours>=10 && curhours<13){
 	curback = backgrounds[2];
 } else if (curhours>=13 && curhours<15){
 	curback = backgrounds[3];
 } else if (curhours>=15 && curhours<18){
 	curback = backgrounds[4];
 } else if (curhours>=19 && curhours<21){
 	curback = backgrounds[5];
 }

 if (minn != curdate.getMinutes()){
 	playAnim();
 	minn = curdate.getMinutes();
 }


 document.getElementById("html").style.backgroundColor = curback;
 document.getElementById('egg').style.backgroundColor = curcolor;
 document.getElementById('egg1').style.backgroundColor = curcolor;
 document.getElementById('egg2').style.backgroundColor = curcolor;
 document.getElementById('buglabel').innerHTML = curdate.getMinutes();
 // console.log( document.getElementById('buglabel').value);
 requestAnimationFrame(updateclock) //
 // console.log(second_as_degree)
}

requestAnimationFrame(updateclock)

function showTime(){                        //color on the sign
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();

function playAnim (){
	 // document.getElementById('buglabel').innerHTML = curdate.getMinutes();
    }