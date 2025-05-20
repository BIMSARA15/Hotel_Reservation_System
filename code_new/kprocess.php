<?php
    require('./config.php');

    if(isset($_POST['check'])){
        $name = $_POST['Name'];
        $pass = $_POST['pass'];
        $loc = $_POST['location'];
        $cin = $_POST['check_in'];
        $cout= $_POST['check_out'];
        $adult = $_POST['adults'];
        $child = $_POST['childs'];
        $room =$_POST['rooms'];

        $query = "INSERT INTO bookings (hotel,location, passport,rooms,adults,child,check_in,check_out) VALUES('$name','$loc','$pass','$room','$adult','$child','$cin','$cout')";
        $res = mysqli_query($con,$query);
if($res){
    echo '<script> 
    alert("Reservation is sent to the relevant admin. You will be contacted via email");
    window.location.href = "./destinations.php"; // Redirect after alert is closed
  </script>';
    }else{
        // Print error message if update fails
        echo "Error updating record: " . mysqli_error($con);
    }
}
        
    
?>