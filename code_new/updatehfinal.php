<?php
    require('./config.php');

    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $hid = $_POST['id'];
        $mail = $_POST['mail'];
        $num = $_POST['number'];
        $site= $_POST['site'];

        // Prepare SQL query for update operation
        $query = "UPDATE hotel 
        SET HName = '$name', 
            HEmail = '$mail', 
            Hcontact = '$num', 
            Hwebsite = '$site' 
        WHERE HID = '$hid';";


        // Execute SQL query
        $res = mysqli_query($con, $query);

        if($res){
            // Redirect if successful
            echo '<script> 
            alert("Hotel Updated succefully");
            window.location.href = "./hotels.php"; // Redirect after alert is closed
          </script>';
            header('Location:');
            exit(); // Make sure to exit after redirection
        }else{
            // Print error message if update fails
            echo "Error updating record: " . mysqli_error($con);
        }
    }        
?>
