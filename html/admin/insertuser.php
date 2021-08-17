<?php
    session_start();
    if($_SESSION["Username"] == "root")
    {
    
      ?>
<!DOCTYPE html>
<html>


<head>
<title>RoKit Games </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "../../css/mycss4.css" />

</head>
<body>
  <form action="insertprocess.php" method="post">
  <div class="imgcontainer">
    <img src="../../images/logo1.jpg" alt="Avatar" class="avatar">
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
    <button class="usermanagement" onclick="myFunction3()">Go Back</button>
      

        <script>
          function myFunction3() {
            
            window.location="usermanagement.php";
            
          }
        </script>
  </div>
</form>
  
</body>
</html>
<?php
    }
    else
    {
      print '<script type="text/javascript">alert("You do not have access");</script>';
    }
?>