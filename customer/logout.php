<!doctype.html>
<html>
<head>
<title>
DAIRY MANAGEMENT SYSTEM
</title>
</head>
<body>
<?php
	session_start();
	if(session_destroy())
   {
		header("Location:login.php");}
?>
</body>
