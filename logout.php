<?php
	session_start();
	$_SESSION['uid']=null;
	$_SESSION['uname']=null;
	session_destroy();
	echo "<script>alert('Logged out complete!'); window.top.location='index.php';</script>";
?>