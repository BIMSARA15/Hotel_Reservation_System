<?php

session_start();
include "connection.php";

$email = $_POST["e"];
$password = $_POST["p"];
$rememberme = $_POST["r"];

if(empty($email)){
    echo ("Please enter your Email Address.");
}else if(strlen($email) > 100){
    echo ("Email must contain LOWER THAN 100 characters.");
}else if(empty($password)){
    echo ("Please enter your Password.");
}else if(strlen($password) > 20 || strlen($password) < 5){
    echo ("Password must contain BETWEEN 5 to 20 characters.");
}else{

    $rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."' AND `password`='".$password."'");
    $num = $rs->num_rows;

    if($num == 1){
        $t="success";
        echo ($t);
        $data = $rs->fetch_assoc();
        $_SESSION["u"] = $data;
        $_SESSION["e"]=$email;
        if($rememberme == "true"){

            setcookie("email",$email,time()+(60*60*24*365));
            setcookie("password",$password,time()+(60*60*24*365));

        }

    }else{
        echo ("Invalid Email Address or Password.");
    }

}

?>