<?php
	session_start();
	
	require_once("conn.php");
	//check form submission
	if(isset($_POST['login'])){
        $Username = $_POST['username'];
        $Password = $_POST['password'];


        	if ($Username==="root") {
        		$sql = "select * from userdetails where username='root' and password='$Password'";
                $results = mysqli_query($conn,$sql);
				$norec= mysqli_num_rows($results);


      		if(mysqli_num_rows($results)>=1)
      			{
      				echo '<script language="javascript">';
       				echo 'alert("Sucessfully Logged")';  //not showing an alert box.
       				echo '</script>';
       				
              
              	if($Username=="root")
					{
						$_SESSION["Username"] = "root";
						?>
						<script language="Javascript">
						window.location="admin/adminpanel.php";
             			 </script>
				<?php		
				}
                
              

             }else{
             	echo '<script language="javascript">';
        					echo 'alert("Please check you E-mail and Passsword")';  //not showing an alert box.
        					echo '</script>';
      						?>
             				<script language="Javascript">
                				window.location="index.php";
              				</script>
              				<?php
             }
        	}else{
				$sql = "select * from userdetails where username='$Username' and password='$Password'";
                $results = mysqli_query($conn,$sql);
				$norec= mysqli_num_rows($results);


      				if(mysqli_num_rows($results)>=1)
      					{
      						echo '<script language="javascript">';
       						echo 'alert("Sucessfully Logged")';  //not showing an alert box.
       						echo '</script>';
       						if($Username != "root")
								{
									?>
									<script language="Javascript">
									window.location="rokitgames.php";
             			 			</script>
									<?php		
								}
                

            			 }     

  
    				else {
    						echo '<script language="javascript">';
        					echo 'alert("Please check you E-mail and Passsword")';  //not showing an alert box.
        					echo '</script>';
      						?>
             				<script language="Javascript">
                				window.location="index.php";
              				</script>
              				<?php

    					}
    			}
		}




?>