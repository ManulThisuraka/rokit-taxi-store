<html>
	<?php

	$connect = mysqli_connect("localhost","root","","rokitgames");

	
	?>

	<head>
		<style>
				
		
		</style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="../../css/styles13.css">
		
	</head>
	<div class="header">
  			<div class="header-right">
  				<img src="../../images/Rokit.png" width="150" height="50">
   			</div>
		</div>

	<body>
			
			<?php
			
			$sql="SELECT * FROM news ORDER BY id DESC";

			$result = mysqli_query($connect,$sql);		


			?>
			<br><br>
			<h1 class="title">Latest News </h1><br><br>
			<div class="container">
			<?php while($row = mysqli_fetch_array($result))
			{
			?>
			
  				<div class="row">
    				<div class="col">
     					 <h1><?php echo $row["heading"]; ?> </h1><br>
            			<p><?php $lenth=strlen( $row["par"] );
               					 echo $shotn=substr( $row["par"] ,0,350);
                			if ($lenth>350) {
                			?>
                			<a href="<?php echo($row['link']) ?>">more.......</a> 
               			 <?php
                			}
							?></p>
   					 </div>
    				<div class="col">
      					<img src = "../../images/<?php echo $row["image"];?>" width="100%" height="auto" alt="user"   onMouseOver="showText('Some Text')"  onMouseOut="hide();">
    				</div>
    			</div>
 			 	<br>
 			 	<br>
 			 	<hr>
			
			<?php 
			}
			
			?>
		</div>
		<br>
		<br>

		<footer>
<p style="font-size: 12px;">© 2020, Rokit Games, Inc. All rights reserved.Rokit, Rokit Games, the Rokit Games logo trademarks or registered trademarks of Rokit Games, Inc. in the United States of America and elsewhere. Other brands or product names are the trademarks of their respective owners. Non-US transactions through Rokit Games International, S.à r.l.</p>
<a href=terms.html>Terms of Service</a>
<br>&nbsp;</br>
<a href=policy.html>Privacy Policy</a>
<br>&nbsp;</br>
<a href=storerefund.html>Store Refund Policy</a>
</footer>
		