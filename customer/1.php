<!doctype.html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>
Dairy management system
</title>
</head>
<style>
.navbar
{
height:50px;
background-color:#393e46; ;


}

		.topnav{
				overflow:auto;
			}
		.topnav a{
				
				
				
				color:black;
				text-align:center;
				
				padding:14px 16px;
				
				text-decoration:none;
				font-size:17px;
			}
		.topnav a:hover{
					background-color:#654062; ;
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

	
		
			<hr>
</p>
input[type=submit]{
		    background_color:#4CAF50;;
                    color:blue;
		    cursor:pointer;
		    width:300px;
	            height:40px;
                 }
pre {
    display: block;
    font: 40;
    white-space: pre;
    margin: 1em 0;
}

</style>
<body style="background-color:#8cd5ff;">


 




<?php
$pid=$_GET["pid"];
$pname=$_GET["pname"];
$price=$_GET["price"];
$eml=$_GET["user"];
$uid=$_GET["uid"];
$des=$_GET["des"];
$num=$_GET["num"];

echo '<div class="topnav" style="width:100%;">
<nav class="navbar navbar-expand-lg ">
<div>
<center style=" margin-left:490px">
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
<a style="color:white" href="2.php?uid=' . $uid . '&user=' . $eml . '">Orders</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:white" href="logout.php">Logout</a>&nbsp;&nbsp;<a style="color:white" href="gallery.php?user=' . $eml . '&uid=' . $uid . '">gallery</a></h3></div>
</nav><br><br>';





echo '<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$conn=mysqli_connect("localhost","root","", "dms") or die("coooo");
$querymy="select * from product ";
$result=mysqli_query($conn,$querymy) or die("query issue");
$numrow=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result))
{
    if($pid==$row['pid'])
    {
	echo '<img src="upload/'. $row['img'].'" height=300 width=300/></a>';
   }
}




echo "<br/><b><br/>Product name=$pname<br/>";

echo "Price      =$price<br/>";
echo "Description=$des<br/><br/>";
echo"Available products=$num<br>";


echo '<a href="user.php?pid=' . $pid . '&user=' . $eml . '&uid=' . $uid . '&price=' . $price . '&pname=' . $pname . '&num='. $num.'">BUY</a>';

?> 
</body>
</html>