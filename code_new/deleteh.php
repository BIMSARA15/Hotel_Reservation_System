<?php
    require('./config.php');

    $id = $_GET['id'];
    $q = "DELETE FROM hotel WHERE HID='$id'";
    $res = mysqli_query($con, $q);

    if($res){
        echo '<script> 
        alert("Hotel deleted succesfully");
        window.location.href = "./hotels.php"; // Redirect after alert is closed
      </script>';
        
        exit(); 
    }else{
        echo "Error deleting record: " . mysqli_error($con);
    }
?>
