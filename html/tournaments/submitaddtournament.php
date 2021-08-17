<?php
	include_once '../conn.php'

?>

<?php

	$game=$_POST["game"];
	$date=$_POST["date"];
	$time=$_POST["time"];

$sql="insert into addtournaments(gamename,date,time) values('$game','$date','$time')";

if (mysqli_query($conn,$sql))
{	
	echo"<script>alert ('Tournament added Successfull!!!')</script>";
	
}
else{
	echo "<script>alert ('Tournament added unsuccessfull')</script>";
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
<form action="http://localhost/RoKit Games/html/tournaments/addtournament.php">
	<input type="submit" value="Go Back">
	

</form>



</body>
</html>