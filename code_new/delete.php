<?php
    require('./config.php');

    // Get data from GET request
    $pass = $_GET['passport'];
    $id2 = $_GET['id'];

    // Prepare SQL query
    $q = "DELETE FROM bookings WHERE passport='$pass' AND res_id='$id2' ";

    // Execute SQL query
    $res = mysqli_query($con, $q);

    // Check if deletion was successful
    if($res){
        // Redirect if successful
        echo '<script> 
        alert("Booking deleted succesfully");
        window.location.href = "./bookings.php"; // Redirect after alert is closed
      </script>';
    }else{
        // Print error message if deletion fails
        echo "Error deleting record: " . mysqli_error($con);
    }
?>
