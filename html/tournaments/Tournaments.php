<?php
  
require_once("../conn.php");

$sql="SELECT * FROM addtournaments";

$result = mysqli_query($conn,$sql);
?>
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






<br><br>


<table id="t01" align="center">
 <tr>  
                              <th>Date</th>  
                               <th>Game</th>
                               <th>Time</th>  
                                

                          </tr>  
                            <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?> 
                          <tr>  
                               <td><?php echo $row["date"];?></td> 
                               <td><?php echo $row["gamename"];?></td> 
                               <td><?php echo $row["time"];?></td>  
                                
          
        
        
                          </tr>  
                          <?php  
                          }  
                          ?>  
</table>


 <button class="button4" style="vertical-align:middle" id="button4" onclick="loadData('button4')"><span><a href="RegisterTournaments.php">Register for tournements</a> </span></button>

<form action="../rokitgames.php">
  <input type="submit" value="Go Back">
  

</form>



<footer>
  <div class="testdiv" style="width:10px; margin:110px; margin-bottom: 0">
  
  </div>
</footer>
</body>
</html>
