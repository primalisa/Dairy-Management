<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>Dairy Management System</title>

</head>
<style>
input[type=submit]{
		    background_color:#4CAF50;;
                    color:blue;
		    cursor:pointer;
		    width:300px;
	            height:40px;
                 }

.navbar
{
height:50px;
background-color:#393e46; ;


}
</style>

<body style="background-color:#8cd5ff;">

<?php
$conn=mysqli_connect("localhost","root","","dms") or die("coooo");

if(isset($_POST['sub']))
{
$name=$_POST['name'];
$eml=$_POST['email'];
$pass=$_POST['std_pass'];
$add=$_POST['address'];
$st=$_POST['State'];
$mno=$_POST['mobno'];
$querymy="INSERT INTO usercustomer(name,username,password,address,state,mobileno) values('$name','$eml','$pass','$add','$st',$mno)";

if(mysqli_query($conn,$querymy)) 
{
echo "Added...";
header("Location:login.php");
}
else
{
echo "issue";
}
}
?>

<nav class="navbar navbar-expand-lg ">
<div>
<center style=" margin-left:490px">
<h4><a style="color:white;" href="contactus.php">ContactUs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:white;" href="login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
</center> 
</div>
</nav>



<div >
<center>
<h2>User Registration</h2>
</center>
<center>
<h4>

<form name="frm" method="POST" action="">
<input type="text" style="width:300px;height:30px;" name="name" placeholder="Enter Name" reqired/>

<br>
<br>

<input type="email" style="width:300px;height:30px;" name="email" placeholder="Enter Username" required/>
<br>
<br>
<input type="password" style="width:300px;height:30px;" name="std_pass" placeholder="Enter Password" required/>

<br>
<br>
<input type="text" style="width:300px;height:30px;" name="address" placeholder="Enter Address" reqired/>
<br>
<br>
<input type="text" style="width:300px;height:30px;" name="State" placeholder="Enter State" reqired/>
<br>
<br>
<input type="int" style="width:300px;height:30px;" name="mobno" placeholder="Enter Mobile no" reqired/>
<br>
<br>

<input  style="color:black;" type="submit" name="sub" value="Submit">
</center>

</h4>


</div>
</body>
</html>
