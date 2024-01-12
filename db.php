
<?php

$itemName=$_POST['itemName'];

$price=$_POST['price'];
$photo=$_POST['photo'];
$remark=$_POST['remarks'];
$stock=0;
$query="INSERT INTO products( Item_Name, photo, price,remark,stock) VALUES ('$itemName','$photo','$price','$remark',0)";
// $server="localhost";
// $username="san";
// $password="2445";
// $db_name="inventory";

// $con= mysqli_connect($server,$username,$password,);
// $db=mysqli_select_db($con,$db_name);
include ("dbs.php");
$result=mysqli_query($con,$query);

echo "inserted successfully";
 

?>

