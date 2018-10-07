<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
	<li><a href="index.php">Home</a></li>
	<?php
		$uid=1;
		if($uid){
			echo "<li><a href='../logout.php'><i>LOGOUT<i></a>&nbsp;$_SESSION['uname']</li>";
		}
		else{
			echo "<li><a href='../index.php'>Login</a></li>";
			echo "<li><a href='volunteer_signup.php'>Volunteer Signup</a></li>";
		}
	?>
</ul>
</body>
</html>