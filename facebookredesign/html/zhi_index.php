
<?php
	session_start();
	if($_SESSION!=null) {
    	header('Location: zhi_home.php');
    	console_log("PENIA");
	}

?>



<!-- LOGIN -->



<!DOCTYPE html>
<html id="html">
<head>
	<title>My Personal Webpage</title>
	<link rel="shortcut icon" href="https://cdn.iconscout.com/icon/free/png-512/facebook-logo-2019-1597680-1350125.png">

	<link rel="stylesheet" href="../css/zhi_register_style.css">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
	</style>
	
</head>
<body>

	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>




	<div class= "kindasquare" id="title">
		<h1 draggable="false" id="titlefont">facebook</h1>
		<h2 id="titledesc">Connect with friends and the world around you on Facebook.</h2>
	</div>

 	<div class="logincontainer" id="logincontainer">

 		<form action="login.php" onsubmit="return submitlog()" method="post" >

	    <input type="text" id="lemail" name="email" placeholder="Email">

	    
	    <input type="password" id="lpassword" name="password" placeholder="Password">

	    <input  type="submit" id="llogin" name="login" style="width: 100%" value="Login"> 

		</form>

	    <div class="fpass">
	    	<a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login" target="blank">Forgot Password?</a>
		</div>

		<hr>


		<div class="newa">
	    	<button id="newacc" onclick="showreg()">Create New Account</button>
		</div>
	

	</div>



	<div class="container" id="container" style="display: none">

  	<img src="../images/cancel.png" width="40px" style="position: absolute; top: 10px; right: 10px;" onclick="closereg()">

  	<h2>Sign Up</h2>
  	<hr>
  	<br>

  	

  	<form onsubmit="return submitted()" method="post" action="reg.php">  
    <div class="nameinputs">
    	<div class="fnamein" style="float:left;">
	    	<!-- <label for="fname">First Name</label> -->
		    <input type="text" id="fname" name="fname" placeholder="First Name">
		</div>

		<div class="lnamein" style="float:left;">

		    <!-- <label for="fname">Last Name</label> -->
		    <input type="text" id="lname" name="lname" placeholder="Last Name">

		</div>
    </div>

    <!-- <div style="clear:both;">&nbsp;</div> -->

    <!-- <label for="email">Email</label> -->
    <input type="text" id="email" name="email" placeholder="Email">

    

<!--     <label for="country">Country</label>
    <select id="country" name="country">
    	<option value="usa">USA</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      
    </select> -->

    <!-- <label for="password">Password</label> -->
    <input type="password" id="password" name="password" placeholder="Password">
<!-- 
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea> -->

	<!-- <label for="country">Country</label> -->
    <select id="country" name="country">
    	<option value="usa">USA</option>
    	<option value="canada">Canada</option>
    	<option value="china">China</option>
        <option value="france">France</option>
        <option value="india">India</option>
        <option value="mexico">Mexico</option>
        <option value="zimbabwe">Zimbabwe</option>
    </select>

<label for="dateinputs">Birthday</label>
    <div class="dateinputs">
    	<div class="monthin" style="float:left;">
			
		    <select id="month" name="month">
		          <option value="01">January</option>
		          <option value="02">February</option>
		          <option value="03">March</option>
		          <option value="04">April</option>
		          <option value="05">May</option>
		          <option value="06">June</option>
		          <option value="07">July</option>
		          <option value="08">August</option>
		          <option value="09">September</option>
		          <option value="10">October</option>
		          <option value="11">November</option>
		          <option value="12">December</option>
		    </select>
		</div>

		<div class="dayin" style="float:left;">
			<label for="day"></label>
		    <select id="day" name="day">
		          <option value="01">1</option>
		          <option value="02">2</option>
		          <option value="03">3</option>
		          <option value="04">4</option>
		          <option value="05">5</option>
		          <option value="06">6</option>
		          <option value="07">7</option>
		          <option value="08">8</option>
		          <option value="09">9</option>
		          <option value="10">10</option>
		          <option value="11">11</option>
		          <option value="12">12</option>
		          <option value="13">13</option>
		          <option value="14">14</option>
		          <option value="15">15</option>
		          <option value="16">16</option>
		          <option value="17">17</option>
		          <option value="18">18</option>
		          <option value="19">19</option>
		          <option value="20">20</option>
		          <option value="21">21</option>
		          <option value="22">22</option>
		          <option value="23">23</option>
		          <option value="24">24</option>
		          <option value="25">25</option>
		          <option value="26">26</option>
		          <option value="27">27</option>
		          <option value="28">28</option>
		          <option value="29">29</option>
		          <option value="30">30</option>
		          <option value="31">31</option>
		         
		    </select>
		</div>

		<div class="yearin" style="float:left;">
			<label for="year"></label>
	   		<input type="number" id="year" name="year" placeholder="Birth year..">
   		</div>

    </div>

<label for="genderinputs">Gender</label>
    <div class="genderinputs">
    	<div class="choice" style="float:left;">
		    <input type="radio" id="male" name="gender" value="m" onclick="check('male')">Male
		</div>

		<div class="choice" style="float:left;">
		    <input type="radio" id="female" name="gender" value="f" placeholder="Female" onclick="check('female')">Female
		    
		</div>

		<div class="choice" style="float:left;">
		    <input type="radio" id="other" name="gender" value="o" placeholder="Other" onclick="check('other')">Other
		</div>
    </div>

    <input type="submit" value="Sign Up!">
</form>


<!--   </form> -->
</div>


	<script type="text/javascript" src="../script/zhi_redesign_script.js"></script>

</body>
</html>	


<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}