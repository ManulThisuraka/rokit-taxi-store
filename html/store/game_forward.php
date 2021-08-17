<?php
	$a =$_POST['action'];
	$x = $_POST['name'];
	$c = $_POST['col'];
	if ($a=="Search"){
		header("location:game.php?name=$x&col=$c");
	}
	elseif($a == "Reset"){
		header("location:game.php");
	}
	elseif($a== "Delete"){
		$link = mysqli_connect("localhost", "root", "", "rokitgames");
		$codee= "DELETE FROM `games` WHERE `$c`=\"$x\"";
		if(mysqli_query($link, $codee))
		{
			echo "Deleted";?>
				<form  action= "game.php">
					<input type="submit" value ="Go Back to home">
				</form>
				<?php
		}
		else
		{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);	
		}
		
	}
	elseif($a== "Delete All"){
		$link = mysqli_connect("localhost", "root", "", "rokitgames");
		$codee= "DELETE FROM `games` WHERE `$c` like \"%$x%\"";
		if(mysqli_query($link, $codee))
		{
			echo "Deleted";?>
				<form  action= "game.php">
					<input type="submit" value ="Go Back to home">
				</form>
				<?php
		}
		else
		{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);	
		}
	
	}
	elseif($a=="Insert a game"){
		header("location:insert_game.php");
	}
?>
	