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
  <form action="deletion_user.php" method="post">
  <div class="imgcontainer">
    <img src="../../images/logo1.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <h1>Remove User Account</h1> 
      <label for="email"><b>Enter Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="usr" autocomplete="off">
      <button type="Submit" name="deleteusr">Delete</button>
      
    
 </div>
</form>
<button class="usermanagement" onclick="myFunction3()">Go Back</button>
      

        <script>
          function myFunction3() {
            
            window.location="usermanagement.php";
            
          }
        </script>

</body>
</html>
<?php
    }
    else
    {
      print '<script type="text/javascript">alert("You do not have access");</script>';
    }
?>