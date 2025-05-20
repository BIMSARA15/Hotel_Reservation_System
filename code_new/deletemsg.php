<?php
    require('./config.php');

    $id=$_GET['id'];

    $query="DELETE FROM contact_us WHERE fid='$id';";
    $res= mysqli_query($con , $query);

    if($res){
        echo '<script> 
        alert("Question deleted succesfully");
        window.location.href = "./adminmsg.php"; // Redirect after alert is closed
      </script>';
    }else{
        echo "Cannot delete".mysqli_error($con);
    }


?>