<?php
	$name = $_POST['name'];
	$price = $_POST['price'];
	$company = $_POST['company'];
	$des = $_POST['description'];

	$link = mysqli_connect("localhost", "root", "", "rokitgames");
	$sql = "INSERT INTO games (name,price,company,description) VALUES ('$name','$price','$company','$des')";
	
	
	if(mysqli_query($link, $sql))
	{
        	header("location:insert_game.php?m=1");
	}
	else{
		header("location:insert_game.php?m=0");
	}