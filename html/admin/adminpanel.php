<?php
		session_start();
		if($_SESSION["Username"] == "root")
		{
			$_SESSION["Username"];
			?>
		<html>
	<head>
		<link rel="stylesheet" type = "text/css" href="../../css/mycss7.css">
	</head>
	<body>
		<div class="header">
 			 <div class="header-right">
 				 <img src="../../images/Rokit.png" width="150" height="50">
			</div>
		</div><br>
			
		
			<h1 class="title">Admin Panel of RoKit Games</h1><br>

			<div class="buttons">
			<button class="itemmanagement" onclick="myFunction()">Item Management</button>
			<p>Search, Reset, Delete, Insert game details to Database</p>

				<script>
					function myFunction() {
  					window.location="../store/game.php";
					}
				</script>

				<button class="itemmanagement" onclick="myFunction1()">User Management</button>
			<p>Insert, View, Delete user details as a admin</p>

				<script>
					function myFunction1() {
  					
                				window.location="usermanagement.php";
					}
				</script>

				<button class="itemmanagement" onclick="myFunction2()">News Management</button>
			<p>Update news details to database</p>

				<script>
					function myFunction2() {
  					
                				window.location="../news/newsmanagement.php";
					}
				</script>

				<button class="itemmanagement" onclick="myFunction3()">Tournament Management</button>
			<p>Update forum details to database</p>

				<script>
					function myFunction3() {
  					
                				window.location="../tournaments/addtournament.php";
					}
				</script>
			
			<button class="itemmanagement" onclick="myFunction4()">Log Out</button>
			

				<script>
					function myFunction4() {
  					window.location="../index.php";
  						
								}
				</script>
		
			</div>

			<footer>
  <div class="footerDiv">
  <p>© 2020, RoKit Games, Inc. All rights reserved. in the Sri Lanka and elsewhere. Other brands or product names are the trademarks of their respective owners. Non-LK transactions through RoKit Games International, S.à r.l.   </p>
  </div>
  <div class="footerLogo" >
  	<img src="../../images/fb.png" style="width:2%">
  	<img src="../../images/insta.png" style="width :2%">
  	<img src="../../images/twitter.png" style="width:2%">
</footer>
		
	</body>
		</html>
<?php
		}
		else
		{
			print '<script type="text/javascript">alert("You do not have access");</script>';
		}
?>