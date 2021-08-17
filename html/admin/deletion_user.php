<?php
session_start();
    if($_SESSION["Username"] == "root")
    {
	require_once("../conn.php");
  //check form submission
 		if(isset($_POST['deleteusr'])){
 		 	$usr=$_POST['usr'];
			
			$sql = "SELECT * FROM userdetails WHERE username='$usr'";
			$results = mysqli_query($conn,$sql);
			$norec= mysqli_num_rows($results);
			if( mysqli_num_rows($results)>=1)
			{
						$del="DELETE FROM userdetails WHERE username = '$usr'";
						if(mysqli_query($conn,$del))
				{
					echo '<script language="javascript">';
                    echo 'alert("Delete Sucessfull ")';  //not showing an alert box.
                    echo '</script>';
                    ?>
                    <script language="Javascript">
                         window.location="deleteuser.php";
                    </script>
                    <?php
				}
				else
				{
					echo '<script language="javascript">';
                    echo 'alert("Delete Unsucessfull ")';  //not showing an alert box.
                    echo '</script>';
                    ?>
                    <script language="Javascript">
                         window.location="deleteuser.php";
                    </script>
                    <?php
				}
			}
			else
			{
				echo '<script language="javascript">';
                    echo 'alert("Username does not exist ")';  //not showing an alert box.
                    echo '</script>';
                    ?>
                    <script language="Javascript">
                         window.location="deleteuser.php";
                    </script>
                    <?php
			}
		}
}
    else
    {
      print '<script type="text/javascript">alert("You do not have access");</script>';
    }
?>