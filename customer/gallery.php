<!doctype.html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<title>
DAIRY MANAGEMENT SYSTEM
</title>
</head>
<center>

<style>
		.split{	
				height:70%;
				width:50%;
				position:fixed;
				z-index:1;
				top:130;
				overflow-x:hidden;
				padding-top:20px;
			}
		.left{
				left:0;
				background-color:white;
			}
		.right{
				right:0;
				background-color:white;
			}
		.centered{
				position:absolute;
				top:50%;
				left:50%;
				transform:
				translate(-50%,-50%);
				text align:center;
			}
			
		.topnav{
				background-color:violet;
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
.navbar
{
height:50px;
background-color:#393e46; ;


}

</style>
<body style="background-color:#8cd5ff;">
		
			
<?php
$eml=$_GET["user"];
$uid=$_GET["uid"];

echo '<div class="topnav" style="width:100%;">


 <nav class="navbar navbar-expand-lg ">
<div>
<center style=" margin-left:490px">
<h3><a style="color:white" href="2.php?uid=' . $uid . '&user=' . $eml . '">Orders</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:white" href="logout.php">Logout</a></h3> 
</center> 
</div>
</nav>';



echo '</center></br>';
echo '<center>';
echo '<form name="frm" method="POST" action="">';

echo ('<select id="mySelect" name="paint" style="width:200px;height:30px;">
  <option value="milk">Various company milk</option>
  <option value="sweet">Dairy Sweets</option>
  
	
  
</select>');

echo '<input type="submit" name="ok" value="search" style="width:70px;height:30px;" /> </form>';

echo '</center>';
if(isset($_POST['ok']))
{
	
	$type2=$_POST['paint'];
	
$conn=mysqli_connect("localhost","root","","dms") or die("coooo");
$querymy="select * from product where ptype='$type2'";
$result=mysqli_query($conn,$querymy) or die("query issue");
$numrow=mysqli_num_rows($result);


  

while($row=mysqli_fetch_array($result))
{
 $pid=$row["pid"];
 $pname=$row["pname"];

$type=$row['ptype'];

$price=$row["price"];
$des=$row['description'];
$num=$row['num'];
if($type==$type2)

{
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="1.php?pid=' . $pid . '&pname=' . $pname . '&price=' . $price . '&user=' . $eml . '&uid=' .$uid.  '&user=' . $eml . '&des=' . $des .'&num=' . $num. '">';
echo '<img src="/project/customer/upload/'. $row['img'].'" height=200 width=200/></a>&nbsp;&nbsp;';

}


}
}

?>
 
		
















</body>

</html>