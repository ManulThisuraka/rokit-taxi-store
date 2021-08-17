<?php
	include('conn.php');

   
     if (isset($_POST['change'])) {
           $UN=$_POST['username'];
           $NPW=$_POST['password'];
           $sql="Update userdetails
           set  password='$NPW'
           where username='$UN'";
           $results=mysqli_query($conn,$sql);
            if ($results) {
                echo '<script language="javascript">';
                echo 'alert("Password change successfull")';  //not showing an alert box.
                echo '</script>';
                ?>
                   <script language="Javascript">
                    window.location="index.php";
                   </script>
                <?php 
            }
            else {
               echo '<script language="javascript">';
                echo 'alert("Error Please Check your infomation and try agin")';  //not showing an alert box.
                echo '</script>';
                ?>
                   <script language="Javascript">
                    window.location="createnewpass.php";
                   </script>
                <?php 
             }     
       }
  ?> 