<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>Dairy Management System
</title>

</head>
<style>
.topnav{
				background-color:grey;
				overflow:auto;
			}
		.topnav a{
				
				float:right;
				
				color:black;
				text-align:center;
				
				padding:14px 16px;
				
				text-decoration:none;
				font-size:17px;
			}
		.topnav a:hover{
					background-color:white;
					color:black;
				}
		.topnav a.active{
					background-color:white;
					color:white;
					
				}
		@media screen and (max-width:500px){
				.topnav a{
						float:none;
						display:block;
					}
					}
		
input[type=submit]{
		    background_color:#4CAF50;
                    color:blue;
		    cursor:pointer;
		    width:200px;
	            height:40px;
                 }
     input[type=submit]:hover{
					background-color:#d4e2d4;}
.navbar
{
height:50px;
background-color:#393e46; ;


}

</style>
<body style="background-color:#8cd5ff;">
		
<nav class="navbar navbar-expand-lg ">
<div>
<center style=" margin-left:490px">
<h3><a style="color:white; margin-left:650px" href="/project/homecustomer.php">Home</a></h3>
</center> 
</div>
</nav>
<br>
<br>

<center>
<h4>

<form name="frm" method="POST" action="">
<input type="email" style="width:300px;height:30px;" name="email" placeholder="Enter Username" />
<br>
<br>
<input type="password" style="width:300px;height:30px;" name="std_pass" placeholder="Enter Password" />
<br><br><br>
<input style="color:black;" type="submit" name="sub" value="Submit">
<input style="color:black;" type="submit" name="reg" value="Register">
</center>
</h4>
<?php


session_start();


$conn=mysqli_connect("localhost","root","","dms") or die("coooo");
  if(isset($_POST['sub']))
{
$eml=$_POST['email'];
$pass=$_POST['std_pass'];

$querymy="select * from usercustomer where username='$eml' AND password='$pass'";
$result=mysqli_query($conn,$querymy) or die("query issue");
$numrow=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1)
{
   $uid=$row['uid'];	
  $_SESSION['username']=$row['username'];
 
  header("Location:gallery.php?user=$eml&uid=$uid");
  echo "successful";

  exit;
}
else

{
   echo  "invalid data";
}
}
if(isset($_POST['reg']))
{
	header("Location:registration.php");
 }    
?>

</body>
</html>
