<?php
  session_start();
    if($_SESSION["Username"] == "root")
    {
require_once("../conn.php");

$sql="SELECT * FROM userdetails";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
	<head>  
		<link rel="stylesheet" href="../../css/style.css">
           <title>User Accounts</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>
      <body>  
	
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">User Accounts</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                          		<th>User ID</th>  
                               <th>Username</th>  
                               <th>Password</th>  
                               <th>Email</th>  

                          </tr>  
                            <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?> 
                          <tr>  
                               <td><?php echo $row["userID"];?></td> 
                               <td><?php echo $row["username"];?></td>  
                               <td><?php echo $row["password"];?></td>  
                               <td><?php echo $row["email"];?></td> 
					
				
				
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>
					<button class="usermanagement" onclick="myFunction()">GO Back</button>
				<script>
					function myFunction() {
  					window.location="usermanagement.php";
					}
				</script>
                </div>  
           </div>  
           <br />  
      </body>
      </html>
      <?php
    }
    else
    {
      print '<script type="text/javascript">alert("You do not have access");</script>';
    }
?>