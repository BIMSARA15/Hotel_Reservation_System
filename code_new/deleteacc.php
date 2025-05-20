<?php
    require('./config.php');

    $id=$_GET['id'];

    $query="DELETE FROM staff_acc WHERE acc_id='$id';";
    $res= mysqli_query($con,$query);

    if($res){
        echo '<script> 
        alert("Account deleted succesfully");
        window.location.href = "./viewstaff.php"; // Redirect after alert is closed
      </script>';
    }else{
        echo "Cannot delete".mysqli_error($con);
    }


?>