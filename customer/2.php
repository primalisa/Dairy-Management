<!doctype.html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>
DAIRY MANAGEMENT SYSTEM
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

</style>
	




<body style="background-color:#8cd5ff;"><center>
<?php
$uid=$_GET["uid"];
$user=$_GET["user"];


echo ' <nav class="navbar navbar-expand-lg ">
<div><div class="topnav" style="width:100%;">
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:white;" href="logout.php">Logout</a>&nbsp;&nbsp;<a style="color:white;" href="gallery.php?user=' . $user . '&uid=' . $uid . '">gallery</a></h3></div></nav>';
 



echo '<marquee direction="right"><h1>  ORDERS</h1></marquee>';
echo '<table>
    <tr>
        <th>Painting name &nbsp;&nbsp;&nbsp;                 </th>
        
	<th>Amount                         </th>
    </tr>';

$conn=mysqli_connect("localhost","root","","dms") or die("coooo");
$querymy="select * from order_details where  uid=$uid ";

$result=mysqli_query($conn,$querymy) or die("query issue");
$numrow=mysqli_num_rows($result);

while($row=mysqli_fetch_array($result))
{ 

	echo '
        <tr>
            <td>'.$row["pname"].' &nbsp;&nbsp;&nbsp; </td>
           
		<td>'.$row["price"].'</td>
        </tr>';
     
    

                                   
 }    
echo '
</table>';


?> 
</center>
</body>
</html>