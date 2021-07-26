<!doctype html>
<html><head>
<title>Dairy Management System
</title>

</head>
<style>
input[type=submit]{
		    background_color:#4CAF50;;
                    color:blue;
		    cursor:pointer;
		    width:300px;
	            height:40px;
                 }

</style>

<body style="background-color:#8cd5ff;">
<h3><a href="admin1.php">back</a></h3>
<center>
<h1>ADMIN   PAGE</h1>
<h2>ADMIN  DASHBOARD</h2>
<h3>ADD PRODUCT PAGE</h3>
<br>
<h1>
<form name="frm" method="POST" action="" enctype="multipart/form-data" >
<input type="text" style="width:300px;height:40px;" name="name" placeholder="Enter Product Name" reqired/>
<br>

</h1>PRODUCT TYPE  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<input type="radio" name="radio" value="milk"> Various Company milk
<input type="radio" name="radio" value="sweet">Dairy Sweets

<br>
<br>
<input type="number" style="width:300px;height:40px;" name="prize" placeholder="Enter Product Price" required/>
<br>
<br>
<input type="date" style="width:300px;height:40px;" name="date" placeholder="Enter Product Date" required/>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRODUCT IMAGE 
<input type="file" name="image1" required/>
<br>
<br>
<input type="text" style="width:300px;height:40px;" name="num" placeholder="Available product number"/><br><br> 
<br>
<input type="text" style="width:300px;height:40px;" name="des" placeholder="enter disription about image"/><br><br>
<br>

<input type="submit" name="sub" value="Upload">
</center>
</h1>
<?php
$conn=mysqli_connect("localhost","root","","dms") or die("coooo");

if(isset($_POST['sub']))
{
$name=$_POST['name'];


$type=$_POST['radio'];
$num1=$_POST['num'];
$date=$_POST['date'];
$pr=$_POST['prize'];
$des=$_POST['des'];

$image1=$_FILES["image1"]["name"];
$target="customer/upload/".$image1;
move_uploaded_file($_FILES["image1"]["tmp_name"],$target);
                        
 

$querymy="INSERT INTO product(ptype,pname,price,img,description,date,num) values('$type','$name',$pr,'$image1','$des',$date,$num1)";


mysqli_query($conn,$querymy)  or  die("Error description: " . mysqli_error($conn));

echo "Added ......";

	
}
else
{
echo "";
}

?></body>
</html>