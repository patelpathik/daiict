	<ul>
		<li><a href="volunteer/index.php">Home</a></li>
	
		<?php
			if(isset($_SESSION['uid'])){
				echo "<li><a href='logout.php'><i>LOGOUT<i></a>&nbsp;$_SESSION['uname']</li>";
			}
			else{
				echo "<li><a href='index.php'>Login</a></li>";
				echo "<li><a href='volunteer/volunteer_signup.php'>Volunteer Signup</a></li>";
			}
		?>
	</ul>