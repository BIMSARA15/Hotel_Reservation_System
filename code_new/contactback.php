<?php 
require('./config.php');




if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $msg = $_POST['msg'];
 
    $query = "INSERT INTO contact_us (name,email,number,review) VALUES ('$name','$email','$number','$msg');";
    $res = mysqli_query($con,$query);

    if($res){
        echo '<script> 
        alert("Your question is sent to our team. they will reach you via email");
        window.location.href = "./contact us.php"; // Redirect after alert is closed
      </script>';
    }else{
        echo "cant add". mysqli_error($con);
    }

    
}



?>