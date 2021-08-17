<?php
	include_once '../conn.php'

?>

<?php


 	$Email=$_POST["email"];
	$Username=$_POST["name"];
	$Userid=$_POST["id"];
	$game=$_POST["game"];
	

$sql="insert into tournament(email,username,userid,gamename) values('$Email','$Username','$Userid','$game')";

if (mysqli_query($conn,$sql))
{	
	echo"<script>alert ('Registration Successfull!!!')</script>";
	
}
else{
	echo "<script>alert ('Error in registration')</script>";
}
mysqli_close($conn);


?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<form action="Tournaments.php">
	<input type="submit" value="Go Back">
	

</form>



</body>
</html>