<html>
<body>
<?php
 include ("connection.php");
 error_reporting(0);
$sql="DELETE FROM farmer WHERE ssn='$_GET[ssn]'";
if(mysqli_query($conn,$sql)){
	echo "deleted successfully";
header("refresh:1;url=getallfarmer.php");}
else
echo"not deleted";
?>


</body>
</html>