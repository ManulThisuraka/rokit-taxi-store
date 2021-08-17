<?php
		session_start();
		if($_SESSION["Username"] == "root")
		{
		
			?><!DOCTYPE html>
<html>
<head>
<title>RoKit Games_UserManage </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "../../css/mycss2.css" />

</head>
<body>

<div class="header">
  
  <img src="../../images/Rokit.png" width="150" height="50">
  
  
</div>
<div class="buttons">
	<h1 class="title">Manage User Details</h1><br><br>

			<button class="usermanagement" onclick="myFunction()">Insert a User Login</button>
			<p>Insert new user details to database</p>

				<script>
					function myFunction() {
  					window.location="insertuser.php";
					}
				</script>

				<button class="usermanagement" onclick="myFunction1()">View User Logins</button>
			<p>View stored user details inside database</p>

				<script>
					function myFunction1() {
  					
                				window.location="viewuserlogin.php";
  
					}
				</script>

				<button class="usermanagement" onclick="myFunction2()">Delete a User Login</button>
			<p>Delete user details in database</p>

				<script>
					function myFunction2() {
  					window.location="deleteuser.php";
					}
				</script>

				<button class="usermanagement" onclick="myFunction3()">Go Back</button>
			

				<script>
					function myFunction3() {
						
  					window.location="adminpanel.php";
  					
					}
				</script>
			
			<button class="usermanagement" onclick="myFunction4()">Log Out</button>
			

				<script>
					function myFunction4() {
  					window.location="../index.php";
  								
					}
				</script>
		</div>







<footer>
<p style="font-size: 12px;">© 2020, Rokit Games, Inc. All rights reserved.Rokit, Rokit Games, the Rokit Games logo trademarks or registered trademarks of Rokit Games, Inc. in the United States of America and elsewhere. Other brands or product names are the trademarks of their respective owners. Non-US transactions through Rokit Games International, S.à r.l.</p>
<a href=terms.html>Terms of Service</a>
<br>&nbsp;</br>
<a href=policy.html>Privacy Policy</a>
<br>&nbsp;</br>
<a href=storerefund.html>Store Refund Policy</a>
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
