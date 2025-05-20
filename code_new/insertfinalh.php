<?php
    require('./config.php');

    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $hid = $_POST['id'];
        $mail = $_POST['mail'];
        $num = $_POST['number'];
        $site= $_POST['site'];

        $query = "INSERT INTO hotel (HID,HName, HEmail,Hcontact,Hwebsite) VALUES('$hid','$name','$mail','$num','$site')";
        $res = mysqli_query($con, $query);

        if($res){
            echo '<script> 
        alert("Hotel Added succesfully");
        window.location.href = "./hotels.php"; // Redirect after alert is closed
      </script>';
            exit(); 
        }else{
         
            echo "Error adding record: " . mysqli_error($con);
        }
    }
?>


    
