<!DOCTYPE html>
<html>
<head>
<!--this provides a link to the external css page which manipulates, the borders, the content, the menu and each individual link.-->
<style type="text/css">
/* a crosshair looks more tron-y */
* {
	cursor: crosshair;
}
body {
	font-family: "Bitstream Vera Sans Mono", monospace;
	/* give all text a cold glow */
	text-shadow: 0 0 5px rgba(0, 255, 0, 0.7);
	background-image:url(images/Deus-Ex-Wallpapers-Picture-1920x1004.jpg) norepeat;
	background-size:cover;
}

.content-page {
	font-size: 13px;
	line-height: 21px;
	display: block;
	/*margin: 0px 5px 20px 55px; todo*/
    margin: 0 auto 20px;
	width: 450px;
	padding: 25px 30px;
	border: 1px solid rgba(0, 255, 0, 1.0);
	background: url(../images/quote_right.png) top right no-repeat;
	-moz-border-radius: 15px;
	border-radius: 15px;
	position: relative;
	-moz-box-shadow: 0 0 5em rgba(0, 255, 0, 1.0);
	-webkit-box-shadow: 0 0 5m rgba(0, 255, 0, 1.0);
	box-shadow: 0 0 5em rgba(0, 255, 0, 1.0);
	background-color: rgba(0,0,0,0.5);
	color:white;
}
.content-page a {
	text-shadow: rgba(0, 255, 0, 1.0);
	cursor: pointer;
	color:white;
}

.content-page h1 {
	margin: .8em 0 0 0;
	font-size: 1.7em;
	text-align: center;
	font-weight: bold;
	padding: .5em;
	border: 1px solid rgba(36,198,24,1.0);
	margin-bottom: 1ex;
	font-family: "Bitstream Vera Sans Mono", monospace;

	-moz-border-radius: 1em;
	border-radius: 1em;
	background-color:rgba(0, 255, 0, 1.0);
	color: black;
	/*the -moz- and -webkt- are only extentions to be able to support different versions of a browser, so dont get scared !!*/
	-moz-box-shadow: 0 0 10px rgba(0, 255, 0, 1.0);
	-webkit-box-shadow: 0 0 10px rgba(0, 255, 0, 1.0);
	box-shadow: 0 0 10px rgba(0, 255, 0, 1.0);
	
}
.content-page h2 {
	text-size: 20px;
	color:white;
}
a.big-rss-link {
	display: block;
	float: left;
	top: 10px;
	left: 0px;
	width: 59px;
	height: 58px;
	background-color: black;
	opacity: 0.5;
	text-indent: -999em;
	margin: 5px;
	cursor: pointer;
}
.content-page ul {
	list-style-type: none;
    padding-left: 1ex;
}
.content-page ul li {
	padding-left: 20px;
}
/* shared styles for ul and ol items */
.content-page li {
	margin: 1em 0 1em;
	font-size: 13px;
	line-height: 17px;
	font-family: "Bitstream Vera Sans Mono", monospace;
}
p{
	color:white;
	text-shadow: rgba(0, 255, 0, 0.5);
}
/* Menu style */
ul.menu {
    position: relative;
    right: 500px;
	list-style-type: none;
	z-index: 1;
}
ul.menu li {
	display: block;
	width: 110px;
	-moz-border-radius: 1em;
	border-radius: 1em;
	border: 1px solid rgba(0, 255, 0, 1.0);
	text-align: center;
	background-color: rgba(0,0,0,0.5);
	margin-bottom: 0.5;
	box-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
	cursor: pointer;
}
ul.menu li:hover {
	color: rgb(0, 255, 0);
	border-color: rgba(0, 225, 0, 1.0);
	box-shadow: 0 0 10px rgba(0, 255, 0, 0.9);
	text-shadow: 0 0 5px rgba(0, 255, 0, 1.0);
	cursor: pointer;
}
ul.menu li:hover a {
	color: rgb(0,225,0);
	text-shadow: 0 0 5px rgba(0, 255, 0, 1.0);
	cursor: pointer;
}
ul.menu li a {
	cursor: pointer;
	text-decoration: none;
	color: rgba(0,225,0,1.0);
}
ul.menu a:hover, ul.menu a:active,ul.menu a:visited:hover,ul.menu a:active:hover {
	text-decoration: none;
	cursor: pointer;
}
ul.menu li.menu_break {
	height: 10px;
	visibility: hidden;
}

#sidebar {
	/* margin: 1em 5px 10px 0px; todo */
    position: absolute;
    left: 50%;
	z-index: 1;
}

/* This covers the website over all*/
html {
  height: 100%;
  box-sizing: border-box;

}
/* this div controls the content of the pages*/
div.container
{
	height:100%;
	min-height:100%;
    position: relative;
    width: 100%;
    border: 1px solid gray;
}
/* this controls the footer of every page*/
footer
{
   width: 100%;
   color: rgba(0,225,0,1.0);
   text-align: center;
   z-index: 1;
   height: 1em;
   position: absolute;
   right: 0;
   bottom: 0;
   left: 0;
   padding: 1rem;
   background-color: rgba(0,0,0,0.3);
}
/*row controls the square shaped individual assets of the page,*/
.row 
{
	display: block;
	text-float: left;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-left: 20px;
	margin-top: 5px;
	margin-left: 90px;
	margin-right: 90px;
	border-radius: 25%;
	border: 1px solid rgba(0,225,0,1.0);
	background-color:black, opacity: 0.78;
	-moz-border-radius: 15px;
	border-radius: 15px;
	-moz-box-shadow: 0 0 11px rgba(0,225,0,1.0);
	-webkit-box-shadow: 0 0 11px rgba(0,225,0,1.0);
	box-shadow: 0 0 11px rgba(0,225,0,1.0);
}
/* row one is similar to the previous row but instead has a smaller margin and margin on top and bottom*/
.row1
{
	display: block;
	text-float: left;
	padding-right: 5px;
	padding-left: 5px;
	padding-top: 5px;
	padding-bottom: 5px;
	margin-top: 10px;
	margin-bottom: 10px;
	margin-left: 5px;
	margin-right: 5px;
	border-radius: 25%;
	border: 1px solid rgba(0,225,0,1.0);
	background-color: black, opacity: 0.7;
	-moz-border-radius: 15px;
	border-radius: 15px;
	-moz-box-shadow: 0 0 9px rgba(0,225,0,1.0);
	-webkit-box-shadow: 0 0 9px rgba(0,225,0,1.0);
	box-shadow: 0 0 9px rgba(0,225,0,1.0);
	color:white;
}
/* image concentrates on the images uploaded to the "ImageUploader.php" site*/
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
	padding-bottom: 15px;
}
/* video container manipulates the videos and makes it so that the video is set to the back and is full screen making it the background of the website*/
.video-container{
	position: absolute;
	top: 0%;
	left: 0%;
	overflow:hidden;
	min-width: 100%;
	min-height: 100%;
	width: auto;
	height:auto;
	background-image:url(images/Deus-Ex-Wallpapers-Picture-1920x1004.jpg) norepeat;
	background-size:cover;
}
video{
	position: fixed;
	z-index: -1;
	min-width: 100%;
	min-height: 100%;
	width: auto;
	height:auto;
	background-image:url(images/Deus-Ex-Wallpapers-Picture-1920x1004.jpg) norepeat;
	background-size:cover;
}
input{
	background-color: rgba(0,0,0,0.3);
	box-shadow: 0 0 1em rgba(2,255,0,0.76);
	color: rgba(255,255,255,1.00);
	border-color: rgba(2,255,0,1.0);
	border-radius: 15px;
	text-float: left;
	padding-left: 5px;
}
/*this is where the manipulation of the videos end*/
</style>
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<img src="images/neon.regular (1).png" width="428" height="55" alt="Techno - Lamb" padding="10px"/>
</head>

<body>
<!-- these are two videos which overlap eachother, they are set as the background and so they are fixed in the background, allowing only the content of the website to be scrolled freely.-->
<div class="video-container">
<video preload="true" autoplay loop>
    <source src="video/hyxno6oddg5xjhtwbdcw.mp4" type="video/mp4">
</video>
</div>
<!--this div indicates that the menu will be customized using the class box, and id sidebar.-->
<div id="sidebar" class="box">

<ul class="menu">
		<li class="menu_rss_feed"><a href="HomePage.php">Home Page</a></li>
        <li class="menu_break"></li>
        <li class="menu_tags"><a href="ImageUpload.php">Image Uploader</a></li>
        <li class="menu_break"></li>
        <li class="menu_index"><a href="MessageBoard.php">Feedback</a></li>
        <li class="menu_break"></li>
        <li class="big-rss-feed"><a href="DatabaseStructure.php">Database Structure</a></li>
        <li class="menu_break"></li>
        <li class="menu_bookshelf"><a href="Profile.php">Profiles</a></li>
        <li class="menu_break"></li>
        <li class="menu_about_site"><a href="RegVar.php">Register</a></li>
        <li class="menu_break"></li>
        <li class="menu_admin"><a href="Sign-in.php">Sign-in</a></li>
        <li class="menu_break"></li>
        <li class="menu_logout"><a href="Logout.php">Logout</a></li>
    </ul>
</div>
<div class="content-page">
    <h1 style="align:center">Home</h1>
    <?php
		// the include function, is used here to include a separate file containing the details of the server, these are confidential, when sharing code this will prevent people from seeing your details.
		include "Connection.php";
	  // each if statement will check which browser is being used, if its not the first one it will move on to the next one, and so on, until it has identified the users browser.
	  if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
	  {	
	  // this part of each if statement creates a cookie named browser with a value of each browser, this can be used for many things in the future. this also displays which browser the user is currently using.
	  echo 'You are using this browser: Internet explorer';
	  setcookie('Browser','InternetExplorer',time() * 31104000);
	  }
	  elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE)
	  {		
	  echo 'You are using this browser: Internet explorer 11';
	  setcookie('Browser','InternetExplorer11',time() * 31104000);
	  }
	  elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
	  {		
	  echo 'You are using this browser: Firefox';
	  setcookie('Browser','Firefox',time() * 31104000);
	  }
	  elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
	  {		
	  echo 'You are using this browser: Google Chrome';
	  setcookie('Browser','GoogleChrome',time() * 31104000);
	  }
	  elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
	  {		
	  echo 'You are using this browser: Opera Mini';
	  setcookie('Browser','OperaMini',time() * 31104000);
	  }
	  elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
	  {		
	  echo 'You are using this browser: Opera';
	  setcookie('Browser','Opera',time() * 31104000);
	  }
		include "Browser.php";
    ?>
	<h2 id="demo"></h2>
    <!-- the following section is a script written in javascript which checks the resolution of your screen and diplays it in the section above.-->
	<script>
		document.getElementById("demo").innerHTML =
		"Your Screen resolution is " + screen.width + " x " + screen.height;
    </script>
    <?php
		// if the user has not yet pressed the submit button, a basic login will apear in the following form.
		echo '<div class="row">    
				  <form action="LOG-IN.php" method="POST">
					  Username:
					  <br>
					  <input type="text" name="User">
					  <br>
					  Password:
					  <br>
					  <input type="Password" name"Pass">
					  <br>
					  <input type="submit" name="submit" value="Submit">
				  </form>
			  </div>';
	?>
    <!--this displays the details which have to be entered in the basic login form, just to save up time.-->
    <div class="row">
        The Username is : jamie
        <br>
        <br>
        The Password is : cheese
    </div>
     <div class="row1">
        Here is the link that i used to copy the css and change it in order to suit my needs, i am aware that we are not marked by css, only for our PHP, with this in mind i used the css from this site in order to lay a foundation for styling my 	
        website.
        <br>
        <br>
        <a href="https://codepen.io/chriseisenbraun/pen/riawD">https://codepen.io/chriseisenbraun/pen/riawD</a>
    </div>
    
</div>
<!-- the footer of the page, in case it wasnt obvious enough, ahahha jk....-->
<footer>TechnoLamb, property of Daood Khan....</footer>

</div>

</body>
</html>
