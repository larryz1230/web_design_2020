<!-- TODO: watch, games, campus -->
<!--update finished campus-->

<?php
	session_start();
	if($_SESSION["id"]==null) {
    	header('Location: zhi_index.php');

	}


	function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<link rel="shortcut icon" href="https://cdn.iconscout.com/icon/free/png-512/facebook-logo-2019-1597680-1350125.png">
	<link rel="stylesheet" href="../css/zhi_redesign_style.css">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
	</style>
	
</head>
<body>

	


	<div class = "navbar">
		
		<img id = "fbicon" src = "https://cdn.iconscout.com/icon/free/png-512/facebook-logo-2019-1597680-1350125.png" width="40px" onclick="gotohome()" height="40px">
		<div class="searchbox">
			<input type="text" name="searchfb" id= "searchfb" placeholder="Search Facebook">
		</div>
			<img id="fbtext" src = "../images/fbtitle.png">

		<div class="profileicons">
			<p id="profilename"  style="float: right;">Larry</p>
			<img id="profilepic"style="float: right;" src="../images/profilepicimg.png" width="25px" height="25px">
		</div>

		<div class="righticonbuttons">
			
			
			<div class="tooltip">
				<img src="../images/add.png" width="40px" height="40px" alt="Create">
				<span class="tooltiptext">Create</span>
			</div>	
			<div class="tooltip">
				<img src="../images/messageicon.png" width="40px" height="40px" alt="Messages">
				<span class="tooltiptext">Messaging</span>
			</div>	
			<div class="tooltip">
				<img src="../images/notif.png" width="40px" height="40px" alt="Notifications">
				<span class="tooltiptext">Notifications</span>
			</div>	
			<div class="tooltip">
				<img src="../images/trinagle.png" width="40px" height="40px" onclick="showpop()" alt="Account">
				<span class="tooltiptext">Account</span>
			</div>			
		</div>

	</div>



	<div class="popout" id= "popout">
		<div class="popouticons">
			<img id="profilepic"style="float: left;" src="../images/profilepicimg.png" width="55px" height="55px" alt="profilepic">
			<div class= "description">
				<p id="nametag"><b>Larry Zhi</b></p>
				<a href="https://www.facebook.com/larry.zhi.58/" target="blank">See Your Profile</a>
				<p id = "logout"><a href="logout.php">Logout</a></p>
			</div>
			
		</div>	
	</div>

	<div id = "table" class = "table">

		<h1>Shortcuts</h1>

		<div class="horizontal">
			<div class="vertically" onclick="gotocampus()">
				<p>Campus</p>
			</div>
			<div class="vertically">
				<p><a href= "https://www.facebook.com/groups/457637638167569" target="blank" style="text-decoration: none; color: black">Marketplace</a></p>
			</div>
		</div>
		<div class="horizontal">
			<div class="vertically" onclick="gotopages()">
				<p>Your Pages </p>
			</div>
			<div class="vertically" onclick="gotogames()">
				<p>Games</p>
			</div>
		</div>
		<div class="horizontal">
			<div class="vertically">
				<p>Friends</p>
			</div>
			<div class="vertically">
				<p><a href= "https://www.facebook.com/movies/?ref_surface=search&ref_mechanism=movie_search_shortcut" target="blank" style="text-decoration: none; color: black">Movies</a></p>
			</div>
		</div>
		<div class="horizontal">
			<div class="vertically">
				<p>Events</p>
			</div>
			<div class="vertically">
				<p>Oculus</p>
			</div>
		</div>	
		<div class="horizontal">
			<div class="vertically">
				<p>Town Hall</p>
			</div>
			<div class="vertically">
				<p>Weather</p>
			</div>
		</div>	
	</div>

<!-- 	<img src="../images/open.png" width="45px" height="45px" id="open" onclick="showmore()"> -->
	<img src="../images/cancel.png" width="45px" height="25px" id="close" onclick="showless()">


	<div class = "midcontainer">

		<div class = "stories">
			<img src="../images/dandy.jpg" width="130px" height=250px" alt="Dandelion">
			<img src="../images/jelly.jpg" width="130px" height=250px" alt="Jellyfish">
			<img src="../images/light.jpg" width="130px" height=250px" alt="Light">
			<img src="../images/canyon.jpg" width="130px" height=250px" alt="Canyon">
			<img src="../images/camp.jpg" width="130px" height=250px" alt="Science Camp">
		</div>


		<div class = "status">
			<div class="topstatus">
				<img src="../images/profilepicimg.png" width="44px" height="44px">
				<input class="statustext" type="text" name="statustext" placeholder="What's on your mind Larry?" id="statusinput">
			</div>
			<hr class="break">
			<div class="bottomstatus">
				<div class="subdivstatus">
					<img src="../images/add.png" width="35px" height="35px">
					<p>Live Video</p>
				</div>
				<div class="subdivstatus">
					<img src="../images/add.png" width="35px" height="35px">
					<p>Photo/Video</p>
				</div>
				<div class="subdivstatus">
					<img src="../images/add.png" width="35px" height="35px">
					<p>Feeling/Activities</p>
				</div>
			</div>
		</div>

		<div class = "rooms">
			<div class="toproom">
				<img src="../images/profilepicimg.png" width="30px" height="30px">
				<p><b>Rooms</b> - Video Chat With Friends</p>
			</div>
			<div class="bottomroom">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
			</div>
		</div>

	<div class = "postcontain">
		<div class = "post">
			<div class="toppost">
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<div class="postheader">
					<p>Larry Zhi -> Web Design Posts</p>
					<p class="timestamp">1 hr 9 min ago</p>
				</div>
			</div>
			<img class="postcontent" src="../images/canyonland.jpg" width="100%" alt="Canyon ">	
			<p>Likes: 39</p>
			<hr>
			<div class="likecomment">
				<div class="imgp">
					<img src="https://facebookbrand.com/wp-content/uploads/2018/09/thumb.png?w=420&h=421" 
					width="25px" height="25px">
					<p>Like</p>
					
				</div>
				<div class="imgp">
					<img src="https://img.pngio.com/comment-icon-transparent-184635-free-icons-library-comment-icon-png-1600_1600.jpg"
					id= "commentimg" 
					width="	25px" height="25px">
					<p>Comment</p>
					
				</div>


			</div>
		
			<hr>
			<div id="commm"></div>

			<div class="writecomment">
				<img src="../images/profilepicimg.png"
					id= "commentimg" 
					width="30px" height="30	px">
					
				<input class="commenttext" type="text" name="statustext" placeholder="Write a comment" id ="comment123">

			</div>	
		</div>

	




	<div class = "post">
			<div class="toppost">
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<div class="postheader">
					<p>Larry Zhi -> Web Design Posts</p>
					<p class="timestamp">1 hr 9 min ago</p>
				</div>
			</div>
			<img class="postcontent" src="../images/sushi.jpg" width="100%" alt="Sushi">	
			<p>Likes: 39</p>
			<hr>
			<div class="likecomment">
				<div class="imgp">
					<img src="https://facebookbrand.com/wp-content/uploads/2018/09/thumb.png?w=420&h=421" 
					width="25px" height="25px">
					<p>Like</p>
					
				</div>
				<div class="imgp">
					<img src="https://img.pngio.com/comment-icon-transparent-184635-free-icons-library-comment-icon-png-1600_1600.jpg"
					id= "commentimg" 
					width="	25px" height="25px">
					<p>Comment</p>
					
				</div>


			</div>
		
			<hr>
			<div id="commm"></div>

			<div class="writecomment">
				<img src="../images/profilepicimg.png"
					id= "commentimg" 
					width="30px" height="30	px">
					
				<input class="commenttext" type="text" name="statustext" placeholder="Write a comment" id ="comment1234">

			</div>	
		</div>

	</div>
</div>



<div class = "rightdrawer">


		<p>Birthdays</p>
		<ul>
			<li>
				<img src="https://i.pinimg.com/originals/3f/2f/48/3f2f48437d350bff3effd49a9d8bc351.png" width="40px" height="40px">
				<p>Happy Birthday Andrew!</p>
			</li>
			<li>
				<img src="https://i.pinimg.com/originals/3f/2f/48/3f2f48437d350bff3effd49a9d8bc351.png" width="40px" height="40px">
				<p>Happy Birthday Andrew!</p>
			</li>
		</ul>

		<hr>

		<p>Contacts</p>

		<ul>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>

		</ul>	
	</div>

<!-- <img src="../images/add.png" id="friends"> -->


<img src="../images/menu.png" id="menu" onclick="showmore()">

<p id="privacy" style="font-size: 12px; font-weight: 200;"><a href = "https://www.facebook.com/privacy/explanation">Privacy</a>  · <a href = "https://www.facebook.com/policies?ref=pf">Terms</a>  · <a href = "https://www.facebook.com/business/small-business">Advertising</a>  · <a href = "https://www.facebook.com/help/568137493302217">Ad Choices</a>   · <a href = "https://www.facebook.com/policies/cookies">Cookies</a>  ·  Facebook © 2021
 We definitely do not steal your data :)) <br><br> Designer: Larry Zhi <br> Published: 01/19/2021 <br> Contact: <a href="mailto:larryzhi1230@gmail.com">larryzhi1230@gmail.com</a> <br> <a href="../biblio/zhi_redesign_biblio.html">Bibliography</a>
</p>




 <script>
	var passedArray =  
    <?php echo json_encode($_SESSION); ?>;
    console.log(passedArray);
    var fname = passedArray.fname;
    var lname = passedArray.lname;
    console.log(fname);
    document.getElementById("profilename").innerHTML= fname;
    document.getElementById("nametag").innerHTML= fname + " " + lname;
</script>





	<script src="../script/zhi_redesign_script.js" defer=""></script>


</body>
</html>