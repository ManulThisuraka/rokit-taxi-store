<?php
require_once("../conn.php");
  //check form submission
  if(isset($_POST['register'])){
        $UserName = $_POST['userName'];
        $Email = $_POST['email'];
        $Password = $_POST['psw'];
 
                $sql = "select * from userdetails where username='$UserName' and email='$Email'";
                $results = mysqli_query($conn,$sql);
                $norec= mysqli_num_rows($results);


            if(mysqli_num_rows($results)>=1)
                {
                    echo '<script language="javascript">';
                    echo 'alert("Username or Email is already exist ")';  //not showing an alert box.
                    echo '</script>';
                    ?>
                    <script language="Javascript">
                         window.location="insertuser.php";
                    </script>
                    <?php

                }
                else{
                    $query = "insert into userdetails (email, username, password) values ('$Email', '$UserName', '$Password')";
                
                
                if(mysqli_query($conn,$query))
                {
                    //echo "Wade Goda";
                     echo '<script language="javascript">';
                    echo 'alert("Scuessfully registered ")';  //not showing an alert box.
                    echo '</script>';
                    ?>
                    <script language="Javascript">
                         window.location="insertuser.php";
                    </script>
                    <?php
                    
                }
                }


            }
        
  
    

?>