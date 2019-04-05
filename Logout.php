<!-- this file serves the purpose of deleting the cookies set by the user-->
<script type="text/javascript">
	function Logout(){
		var r = confirm("You are about to Log out!! Proceed?"){
			if (r == true) {
				<?php
					setcookie("User", $_POST['Username'], time() - 3600, "/");
					setcookie("Password", $_POST['Password'], time() - 3600, "/");
					header ('location: Sign-in.php');
				?>
			} else {
				<?php
					
				?>
			}
		}
	}
</script>