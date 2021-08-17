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
<div class="header">
  			<div class="header-right">
  				<img src="../../images/Rokit.png" width="150" height="50">
   			</div>
		</div>
<body>
  <form action="newsprocess.php" method="post" enctype="multipart/form-data">
 

  <div class="container">
    <label for="email"><b>Heading</b></label><br><br>
    <textarea id="textarea" name="heading" placeholder="Enter Heading" rows="2" cols="70"></textarea><br><br>

    <label for="email"><b>Description</b></label><br><br>
    <textarea id="description" name="des" placeholder="Enter Description" rows="6" cols="70"></textarea><br><br>
    <label for="email"><b>Select image to upload:</b></label><br><br>
 	<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  	<input type="submit" value="Upload Image" name="submit" disabled><br><br>
    <button type="submit" name="submit">Submit</button>
    
  </div>
</form>
<button class="usermanagement1" onclick="myFunction3()">Go Back</button>
      

        <script>
          function myFunction3() {
            
            window.location="../admin/adminpanel.php";
            
          }
        </script>
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