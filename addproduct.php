<?php
include_once("Connection.php");
if(isset($_POST['btn_upload']))
{
	$Name = $_POST['pname'];
	
    $des = $_POST['description'];
    
    $price = $_POST['price'];
   
    $category = $_POST['category'];

	$filetmp = $_FILES["file_img"]["tmp_name"];
	$filename = $_FILES["file_img"]["name"];
	$filetype =  $_FILES["file_img"]["type"];
	$filepath = "photo/".$filename;
	move_uploaded_file($filetmp, $filepath);
	$sql = "insert into additem(ProductName,Description,Price,Category,img_name,img_path,img_type) values ('$Name','$des',$price,'$category','$filename','$filepath','$filetype')";
	if(mysqli_query( $conn, $sql ))
	{
		echo "value inserted to db";
	}
	else
	{
		die(mysqli_error($conn));
	}
}
?>