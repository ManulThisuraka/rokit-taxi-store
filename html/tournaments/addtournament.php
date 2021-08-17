<!DOCTYPE html>
<html>
<head>

	<title>Rokit Games </title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../../css/styles123.css">
<script type="text/javascript"  src="../../js/myScript.js"></script>
<script>
  alert("Tournament page loaded");
</script>



</head>







<body>

  

<div class="header">
  <div class="header-right">
      <img src="../../images/Rokit.png" width="150" height="50">
  
      
      
      <img src="../../images/account.png" id="User" width="45"  height="45" align= "right" alt="user"   onMouseOver="showText('Some Text')"  onMouseOut="hide();">
    
  
</div>
<hr width="100%" color="black">


	<form method="POST"  action="submitaddtournament.php">
  <div class="container2">
    <h1>Setup Tournament</h1>
    
    <hr>


    <label for="game"><b>Game</b></label>
    <input type="text" placeholder="Enter the game" name="game" id="game" required>

    <label for="id"><b>Date</b></label>
    <input type="Date" placeholder="Enter date" name="date" id="id" required>

    <label for="id"><b>Time</b></label>
    <input type="Time" placeholder="Enter time" name="time" id="id" required>

        <hr>

    <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Add Tournament</button>
  </div>

  
</form>

<form action="../admin/adminpanel.php">
  <input type="submit" value="Go Back">
  

</form>



<footer>
  <div class="testdiv" style="width:10px; margin:110px; margin-bottom: 0">
  
  </div>
</footer>
</body>
</html>
