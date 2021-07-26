<!doctype.html>
<html>
<head>
<title>
ART GALLERY MANAGEMENT SYSTEM
</title>
</head><center>
<body  style="background-color:#8cd5ff;">
<style>input[type=submit]{
		    background_color:#4CAF50;
                    color:blue;
		    cursor:pointer;
		    width:200px;
	            height:40px;
                 }
     input[type=submit]:hover{
					background-color:black;}
</style>
</center><a href="index.php">Go Back</a><center>
<h1>Admin Page</h1>
<h2>
<br>
 <form name="frm" method="POST" action="">
<input type="submit" name="sub1" value="Add Product">
<?php

if(isset($_POST['sub1']))
{
	header("Location:adminpage.php");
}
?>
</body>

</html>