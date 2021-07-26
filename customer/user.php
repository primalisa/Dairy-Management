<!doctype.html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>
DAIRY MANAGEMENT SYSTEM
</title>
</head>
<body><center>



 




<style>

		.topnav{
				
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
					background-color:black;
					color:black;
				}
		.topnav a.active{
					background-color:red;
					color:white;
					
				}
		@media screen and (max-width:500px){
				.topnav a{
						float:none;
						display:block;
					}
					}


	

input[type=submit]{
		    background_color:#4CAF50;;
                    color:blue;
		    cursor:pointer;
		    width:100px;
	            height:20px;
                 }

.navbar
{
height:50px;
background-color:#393e46; ;


}
</style>
<body style="background-color:#8cd5ff;">
		
			
<?php
$price=$_GET["price"];
$pid=$_GET["pid"];
$uid=$_GET["uid"];
$pname=$_GET["pname"];

$user=$_GET["user"];
$num=$_GET["num"];






echo '<nav class="navbar navbar-expand-lg ">
<div><div class="topnav" style="width:100%;"
 <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a style="color:white" href="2.php?uid=' . $uid . '&user=' . $user . '">Orders</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:white" href="logout.php">Logout</a>&nbsp;&nbsp;<a style="color:white"  href="gallery.php?user=' . $user . '&uid=' . $uid . '">gallery</a></h3></div>';
echo '<form name="frm" method="POST" action=""></div></nav>';



echo "</br><b>$user</br>";



 $conn=mysqli_connect("localhost","root","","dms") or die("coooo");

if($price>100)
{
	

	$amt=$price*0.9;
	echo "</br><b>congratulations you have got 10% discount</br>";
	echo  "</br>your final amount is $amt";
	echo "<br>do you want to proceed?";
}
else
{
	echo "<br>do you want to proceed?";}
if(isset($_POST['sub']))
{
  

		
		
		$querymy="INSERT INTO order_details(pid,uid,pname,price) values($pid,$uid,'$pname',$price)";

		$result=mysqli_query($conn,$querymy) or die("query issue".mysqli_error($conn));


$num=$num-1;
$ss="UPDATE product SET num=$num WHERE pid=$pid";

$results=mysqli_query($conn,$ss) or die("query error in update");
	
if($num==0)
{
	        $result1 = mysqli_query($conn, 
     		" CALL `deleteorder`($pid);") or die("Query fail: " . mysqli_error());
}

 			
		
		echo "</br>your order is successful";
  		exit;
			
}
if(isset($_POST['log']))
{
header("Location:login.php");
}
if(isset($_POST['order']))
{
header("Location:2.php?uid=$uid");
}
if(isset($_POST['no']))
{
header("Location:1.php?uid=$uid&pid=$pid");
}
if(isset($_POST['sub1']))
{
header("Location:gallery.php?user=$user&uid=$uid");
}
?>
<form name="frm" method="POST" action="">
<form name="frm" method="POST" action="">
<br><br><br>


<input style="height:30px;" type="submit" name="sub" value="Yes">
<input style="height:30px;" type="submit" name="sub1" value="No">

</center>

</body>

</html>