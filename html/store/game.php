<html>
	<?php

	$connect = mysqli_connect("localhost","root","","rokitgames");

	
	?>

	<head>
		<link rel = "stylesheet" type = "text/css" href = "../../css/mycss6.css" />
	</head>

	<body>
		<div class="header">
 			 <div class="header-right">
 				 <img src="../../images/Rokit.png" width="150" height="50">
			</div>
		</div>
		<form action = "game_forward.php" method = "POST">
			<input type = "text" name = "name" value="<?php 
			if(isset($_GET['name'])){
					echo $_GET['name'];
			}?>"
			autocomplete ="off">
			
			  <select name="col">
    				<option value="name" <?php 
					if(isset($_GET['col']))
					{
						if($_GET['col']=="name"){
							echo "selected";	
						}
					}?>>Name</option>
				<option value="g_id"<?php 
					if(isset($_GET['col']))
					{
						if($_GET['col']=="g_id"){
							echo "selected";	
						}
					}?>>Game ID</option>
    				<option value="price" <?php 
					if(isset($_GET['col']))
					{
						if($_GET['col']=="price"){
							echo "selected";	
						}
					}?>>Price</option>
    				<option value="description"<?php 
					if(isset($_GET['col']))
					{
						if($_GET['col']=="description"){
							echo "selected";	
						}
					}?>>Description</option>
				<option value="Company" <?php 
					if(isset($_GET['col']))
					{
						if($_GET['col']=="company"){
							echo "selected";	
						}
					}?>>Company</option>
  			</select>
				
			<input type = "submit" name ="action" value = "Search">
			<input type = "submit" name ="action" value = "Reset">
			<?php
			session_start();
			if($_SESSION["Username"] == "root"){?>
			<input type = "submit" name ="action" value ="Delete">
			<input type ="submit" name = "action" value = "Delete All">
			<input type ="submit" name = "action" value = "Insert a game"> <?php
			}?>
		</form><br>
		<table>
			<tr>
				<th>Game Code</th>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Company</th>
			</tr>
			<?php
	if(isset($_GET['name'])){
			$a = $_GET['name'];
			$x = $_GET['col'];
			
			$sql="SELECT * FROM games WHERE `$x` LIKE \"%$a%\"";

			$result = mysqli_query($connect,$sql);		


			?>

			<?php while($row = mysqli_fetch_array($result))
			{
			?>
			<tr>
				<td><?php echo $row["g_id"]; ?> </td>
				<td><?php echo $row["name"]; ?> </td>
				<td><?php echo $row["price"]; ?> </td>
				<td><?php echo $row["description"]; ?> </td>
				<td><?php echo $row["company"]; ?> </td>
			</tr>
			<?php 
			}
			}
			?>
		</table>
		<br>
		<br>
		<form action ="<?php
		if($_SESSION["Username"] == "root"){
			echo "../admin/adminpanel.php";
		}
		else{
			echo "../index.php";
		}?>" method = "post">
			<input type ="submit" value = "Go Back">
			
		</form>
		