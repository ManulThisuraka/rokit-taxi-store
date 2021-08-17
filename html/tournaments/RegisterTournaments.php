<!DOCTYPE html>
<html>
<head>

	<title>Rokit Games </title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../../css/styles123.css">
<script type="text/javascript"  src="../../js/myScript.js"></script>




</head>







<body>

  

<div class="header">
  <div class="header-right">
      <img src="../../images/Rokit.png" width="150" height="50">
  
      
      
      <img src="../../images/account.png" id="User" width="45"  height="45" align= "right" alt="user"   onMouseOver="showText('Some Text')"  onMouseOut="hide();">
    
  
</div>
<hr width="100%" color="black">


	<form method="POST"  action="submitTournaments.php">
  <div class="container2">
    <h1>Register For a Tournament</h1>
    
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" >

    <label for="game"><b>Game</b></label>
    <input type="text" placeholder="Enter the game" name="game" id="game" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="id"><b>ID</b></label>
    <input type="text" placeholder="Enter ID" name="id" id="id" required>

        <hr>

    <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  
</form>





<footer>
  <div class="testdiv" style="width:10px; margin:110px; margin-bottom: 0">
  
  </div>
</footer>
</body>
</html>
