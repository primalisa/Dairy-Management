<?php
 include ("connection.php");
 error_reporting(0);
?>


<html>
<head><title>UPDATE FARMER DETAILS</title>



</head>
<body style="background-color:#8cd5ff;" >




<?php


    $ssn = $_GET['ssn'];
	$name=$_POST['name'];
    $address=$_POST['address'];
    $type=$_POST['type'];



    $farmer_to_edit = mysqli_query($conn,"SELECT * FROM farmer WHERE ssn =".  stripslashes($ssn) );
    $row = mysqli_fetch_array($farmer_to_edit);
?>


<h2>Updating Customer Details</h2>
<center>
<form class="my-form" method="POST" >



<tr>
<td width="100">Customer ID</td>
<td><input name="$ssn" type="text" id="f_id" value='<?php echo stripslashes($row['ssn']) ?>'></td>
</tr>
<br>

<br>
<tr>
<td width="100">Customer Name</td>
<td><input name="name" type="text" id="f_name" value='<?php echo stripslashes($row['name']) ?>'></td>
</tr>
<br>

<br>
<tr>
<td width="100">Customer address</td>
<td><input name="address" type="text" id="f_address" value='<?php echo stripslashes($row['address']) ?>'></td>
</tr>
<tr>
<br>

<br>
<tr>
<td width="100">Milk type </td>
<td><input name="type" type="text" id="f_phone" value='<?php echo stripslashes($row['type']) ?>'></td>
</tr>
<tr>
<br>



<br>
<tr>
<td width="100"></td>
<td></td>
</tr>
<td width="100"></td>
<td>
<input name="update" type="submit" id="update" value="UPDATE" class="button">
</td>
</tr>

</form>
</div>
</center>
<?php
if (isset($_POST['update']))
	{
         $sql="update farmer set ssn='$ssn',name='$name',address='$address',type='$type'   where ssn='$ssn'";
         $ret=mysqli_query($conn,$sql);
      if(!$ret)
      {
         die('could not update data:');
      }
      echo "updated successfully\n";
	  header("refresh:1;url=getallfarmer.php");
    }
?>
</body>
</html>
