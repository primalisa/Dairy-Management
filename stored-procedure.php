<?php

include ("connection.php");
 error_reporting(0);
$sql="CALL `getcustomer`()";
$stmt=$conn->prepare($sql);
$stmt->execute();
$customer=$stmt->fectchAll(PDO::FETCH_ASSOC);

print_r($customer); exit;


?>

<html>
hello
</html>