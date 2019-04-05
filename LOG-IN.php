 <?php
 session_start();
	// this section is where the browser will check if the user has pressed the submit button ffrom the basic login form.
	if($_POST['submit']){
		//in this if statement the system checks if the details submitted match the details written down
		if(($_POST['User'] == jamie) && ($_POST['Pass'] == cheese))
		{
				$_SESSION['currentuser'] = $_POST['User'];
				//if they do match then the browser will display the following message.
				echo 'Congratulation you have successfully logged in as' . $_SESSION['currentuser'];
				header ('location: HomePage.php');
		} else {
			//however if they do not match then the browser will display the following message.
			echo "wrong username or password";
			header ('location: HomePage.php');
		}
	}
?>