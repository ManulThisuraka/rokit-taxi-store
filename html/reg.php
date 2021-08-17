<!DOCTYPE html>
<html>


<head>
<title>RoKit Games </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "../css/mycss4.css" />

</head>
<body>

<div class="header">
  <div class="header-right">
  <img src="../images/Rokit.png" width="150" height="50">
  
    

  </div>
</div>
<hr width="100%" color="black">
<form action="Process.php" method="post">
  <div class="imgcontainer">
    <img src="../images/logo1.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="Enter E-Mail" name="email" required><br>

    <label for="userName"><b>User Name</b></label><br>
    <input type="username" placeholder="Enter Username" name="userName" required value=""><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
     <input type="checkbox" checked="checked" name="remember"> Remember me<br>
    <button type="Submit" name="register">Submit</button>
  </div>

   <div class="container" style="background-color:black">
    <span class="psw">Already have an Account <a href="index.php"><b>Log In</b></a></span>
  </div> 
  
</form>
<footer>
<p style="font-size: 12px;">© 2020, Rokit Games, Inc. All rights reserved.Rokit, Rokit Games, the Rokit Games logo trademarks or registered trademarks of Rokit Games, Inc. in the United States of America and elsewhere. Other brands or product names are the trademarks of their respective owners. Non-US transactions through Rokit Games International, S.à r.l.</p>
<a href="view/termscon.php">Terms of Service</a>
<br>&nbsp;</br>
<a href="view/privacypoli.php">Privacy Policy</a>
<br>&nbsp;</br>
<a href="view/aboutus.php">About Us</a>
</footer>
</body>
</html> 
