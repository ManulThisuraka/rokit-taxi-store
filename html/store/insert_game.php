<html>
	<head>
		<title>Insert Game Details</title>
		<link rel = "stylesheet" type = "text/css" href = "../../css/mycss21.css" />
	</head>
	<body>
		<div class="header">
  			<div class="header-right">
  				<img src="../../images/Rokit.png" width="150" height="50">
   			</div>
		</div>
		<?php
		if (isset($_GET['m']))
		{
			if($_GET['m']=="1")
			{		
				print '<script type="text/javascript">alert("Game Successfuly added to the game library");</script>';
			}
			else
			{
				print '<script type="text/javascript">alert("Error occured contact an admin!");</script>';
			}
		}
		
		?>
		<div class="container">
		<form action="game_insertion.php" method="post">
			<p>Name of the game</p>
			<input type ="text" name="name" autocomplete ="off">
			<br><br>
			<p>Price of the game</p>
			<input type="number" name="price" autocomplete ="off"><br><br>
			<p>Company  of the game</p>
			<input type="text" name="company" autocomplete ="off"><br><br>
			<p>Description</p><br>
			<textarea name="description" rows="4" cols="50"></textarea>
			<br><br><br>
			<input type="submit" name="action" value="Insert">
			<input type ="reset">
		</form>
		</div>
		<div class="container">
			<form action ="game.php">
				<input type="submit" value="Go Back">
			</form>
		</div>
		<footer>
<p style="font-size: 12px;">© 2020, Rokit Games, Inc. All rights reserved.Rokit, Rokit Games, the Rokit Games logo trademarks or registered trademarks of Rokit Games, Inc. in the United States of America and elsewhere. Other brands or product names are the trademarks of their respective owners. Non-US transactions through Rokit Games International, S.à r.l.</p>
<a href="../view/termscon.php">Terms of Service</a>
<br>&nbsp;</br>
<a href="../view/privacypoli.php">Privacy Policy</a>
<br>&nbsp;</br>
<
</footer>
			
	</body>
</html>
			