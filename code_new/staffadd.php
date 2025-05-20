<?php
require('./config.php');
if(isset($_POST['check'])){
    $id=$_POST['id'];
    $pass=$_POST['pass'];
    $repass=$_POST['re-pass'];
    $dep=$_POST['dname'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $num=$_POST['num'];
    $mail=$_POST['mail'];
    $hotel=$_POST['hotel']; 

    if($pass==$repass){
        $query="INSERT INTO staff_acc(acc_id,fname,lname,pass,dep,num,hotel,mail) VALUES ('$id','$fname','$lname','$pass','$dep','$num','$hotel','$mail')";
        $res = mysqli_query($con, $query);

        if($res){

            header('Location: ./viewstaff.php');
            exit(); 
        }else{
          
            echo "Error adding record: " . mysqli_error($con);
        }
    }else{
        echo "<script>alert('Passwords do not match');</script>";
        echo "<script>window.location.href='./staffadd.php';</script>";
        exit();
    }
}
?>


