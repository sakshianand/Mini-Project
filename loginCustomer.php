<?php
session_start();
include_once("Connection.php");


$reg = $_POST['reg'];
$pass = $_POST['pass'];
$result ="select * from customer where Reg  = '$reg' and Password = '$pass'";
$res = mysqli_query($conn,$result);
$row = mysqli_fetch_array($res);
if($row['Reg'] == $reg && $row['Password'] == $pass)
{ header('Location: http://localhost/Ecommerce/main.php');
}
else
{
	echo "wrond credentials";
	session_destroy();
}
$_SESSION['reg']=$reg;

$_SESSION['password']=$pass;


?>