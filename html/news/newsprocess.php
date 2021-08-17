<?php
	include_once '../conn.php';
	
$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo"<script>alert ('Image Upload Successfull!!!')</script>";
    $uploadOk = 1;
  } else {
     echo"<script>alert ('Image did not Upload Successfull!!!')</script>";
    $uploadOk = 0;
  }
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

?>
<?php
 
	$Head=$_POST["heading"];
	$Des=$_POST["des"];
	$Upload=$_FILES["fileToUpload"]["name"];

$sql="insert into news(heading,par,image) values('$Head','$Des','$Upload')";

if (mysqli_query($conn,$sql))
{	
	echo"<script>alert ('News added Successfull!!!')</script>";
	
}
else{
	echo "<script>alert ('News added unsuccessfull')</script>";
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<form action="http://localhost/RoKit Games/html/admin/adminpanel.php">
	<input type="submit" value="Go Back">
	

</form>



</body>
</html>