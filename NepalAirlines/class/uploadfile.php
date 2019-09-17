<?php 
include ('../admin/config/connection.php');

$file=$_FILES['filename'];
$filename=$file['name'];
$tmp_name=$file['tmp_name'];
$path="img/".$filename;
$imagepath='img/'.$filename;
print_r($file);
move_uploaded_file($tmp_name, $path);


$con->query("INSERT into images(name, path) values ('$filename','$imagepath')");

header("Location: fileupload.php");

?>