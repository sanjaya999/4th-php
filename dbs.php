<?php
$server="localhost";
$username="san";
$password="2445";
$db_name="inventory";
$con= mysqli_connect($server,$username,$password,);
$db=mysqli_select_db($con,$db_name);
?>