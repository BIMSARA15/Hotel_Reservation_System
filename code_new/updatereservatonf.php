<?php
    require('./config.php');

    if(isset($_POST['check'])){
        $name = $_POST['Name'];
        $pass = $_POST['pass'];
        $id=$_POST['id'];
        $loc = $_POST['location'];
        $cin = $_POST['check_in'];
        $cout= $_POST['check_out'];
        $adult = $_POST['adults'];
        $child = $_POST['childs'];
        $room =$_POST['rooms'];

        $query = "UPDATE bookings 
        SET hotel = '$name', 
            location = '$loc', 
            rooms = '$room' ,
            adults='$adult',
            child='$child',
            check_in='$cin',
            check_out='$cout'
        WHERE res_id = '$id' AND passport = '$pass'";

        $res = mysqli_query($con,$query);

     if($res){
        echo '<script> 
        alert("Reservation updated succesfully");
        window.location.href = "./bookings.php"; // Redirect after alert is closed
      </script>';
        header('Location: ./bookings.php');
     }else
     {
        echo "Cannot Update".mysqli_error($con);
     }
        
    }
    
?>