<?php
       include("conn.php");
	if (isset($_POST['Go'])) {
		$EM=$_POST['email'];
		$UN=$_POST['userName'];

	$sql= "select * from userdetails
              where email='$EM' and username='$UN'";
        $results=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($results);

       $norec= mysqli_num_rows($results);


      if(mysqli_num_rows($results)>=1){
      	
      	?>
        <script language="Javascript">
            window.location="createnewpass.php";
                   </script>
      	<?php    	
      }
      else{
      	echo '<script language="javascript">';
        echo 'alert("Please Check your Information")';  //not showing an alert box.
        echo '</script>';
        ?>
        <script language="Javascript">
            window.location="forgotpass.php";
                   </script>
        <?php 
      }
	}
	?>