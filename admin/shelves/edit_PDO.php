<?php

require_once('db.php');

$get_id=$_REQUEST['tbl_image_id'];

move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location1=$_FILES["image"]["name"];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE myshop_shelves SET image_location ='$location1' WHERE tbl_image_id = '$get_id' ";

$conn->exec($sql);
echo "<script>window.location='../../../../../wp-admin/edit.php'</script>";
?>