<!DOCTYPE html>
<html>
<head>
<style type="text/css">
/* a crosshair looks more tron-y */
* {
	cursor: crosshair;
}
body {
	font-family: "Bitstream Vera Sans Mono", monospace;
	/* give all text a cold glow */
	text-shadow: 0 0 5px rgba(0, 255, 0, 0.7);
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
   position: relative;
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
	text-align:center;
	padding-top: 5px;
	padding-bottom: 5px;
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
	padding-top: 15px;
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
	border-radius: 5px;
	
}
/*this is where the manipulation of the videos end*/
</style>
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<img src="images/neon.regular (1).png" width="428" height="55" alt="Techno - Lamb" padding="5px"/>
</head>
<body>
<!--this contains the video files which are used as the background for the website-->
<div class="video-container">
    <video preload="true" autoplay loop>
    <source src="video/hyxno6oddg5xjhtwbdcw.mp4" type="video/mp4">
    </video>
</div>
<!--this controls the side menu and its properties-->
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
<!--this is the start of the content of the website--> 
<div id="main-wrapper">
    <div class="content-page">
        <h1 style="align:center">Register</h1>
        <?php
			//this includes the connection settings, confidetial and secured.
			include "Connection.php";
			// if user submits the form then the following process will take place
			if($_POST['submit'])
			{
				//first we will insert all the input data from the user into the database acording to their values.
				$sql = "INSERT INTO Reg_Form (Username, Password, Name, City,
				Gender, Photo, Email, Phone, DateJoined) 
				VALUES ('" . $_POST['Username'] . "',
						'" . $_POST['Password'] . "',
						'" . $_POST['Name'] . "',
						'" . $_POST['City'] . "',
						'". $_POST['Gender']. "',
						'". $_FILES['Photo']['name'] ."',
						'". $_POST['Email'] ."',
						'". $_POST['Phone'] ."',
						'" . Date("Y/m/d") . "')";
				//creates a new directory named uploads/.
				$target_dir = "uploads/";
				// checks if the file excist in he following directory.
				if (!file_exists($target_dir) ) 
				{
					//makes a directory according to the directory named with the according ftp permission.
					mkdir ($target_dir, 0744);
				}
				// the browser will now indicate that the tragetted file will be put in the targetted directory, using the name of the image uploaded and also the extension of the image, e.g. .jpg
				$target_file = $target_dir. basename($_FILES["Photo"]["name"]);
				//now it will check if the file has been moved successfuly to the directory
				if (move_uploaded_file($_FILES["Photo"]["tmp_name"], $target_file)) 
				{
					echo "The file has been uploaded.";
				}
				else {
					echo "Sorry, there was an error uploading your file. ";
				}
				if ($conn->query($sql) === TRUE) 
				{
					echo "New record created successfully";
				} 
				else 
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}									
			}
        ?>
        <!--this is where the register form is dislayed along with boxes for input-->
        <div class="row">
            <p><span class="error">* required field.</span></p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="POST">
                Full Name:<br>
                <input type="text" name="Name">
                <br>
                Username: <br>
                <input type="text" name="Username">
                <br>
                Password: <br>
                <input type="password" name="Password">
                <br>
                Email:<br>
                <input type="text" name="Email">
                <br>
                Phone Number:<br>
                <input type="text" name="Phone">
                <br>
                City: <br>
                <input type="text" name="City">
                <br>
                Gender:<br>
                <input type="radio" name="Gender" value="female">Female
                <input type="radio" name="Gender" value="male">Male
                <br>
                Select image to upload: <br>
                    <input type="file" name="Photo" id="Photo">
                    <br>
                    <br>
                    <input type="submit" value="Submit" name="submit">
            </form>
    	</div>
    </div>
</div>
</body>
</html>