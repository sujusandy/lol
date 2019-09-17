<form method="post" enctype="multipart/form-data" action="uploadfile.php" >
		<label>Image:</label>
	<input type="file" name="filename">
	<button type="submit">Upload</button>
</form>



<?php 
include('../admin/config/connection.php');
$images= $con->query("select * from images");
while($row = $images->fetch_assoc()){
	$filename = $row["path"];
	echo "<img src='$filename' height='100px' width='100px' />";
}
 ?>
