<?php

session_start();
include "connection.php";

$email = $_POST["e"];
$password = $_POST["p"];


if (empty($email)) {
    echo ("Please enter your Email Address.");
} else if (strlen($email) > 100) {
    echo ("Email must contain LOWER THAN 100 characters.");
} else if (empty($password)) {
    echo ("Please enter your Password.");
} else if (strlen($password) > 20 || strlen($password) < 5) {
    echo ("Password must contain BETWEEN 5 to 20 characters.");
} else{
    $rs = Database::search("SELECT * FROM `staff_acc` WHERE `mail`='" . $email . "' AND  `pass`='" . $password . "'");
    $num = $rs->num_rows;

    if ($num == 1) {
        echo ("success");
        $data = $rs->fetch_assoc();
        $_SESSION["a"] = $data;
                    
        
    } else {
            echo ("Invalid Email Address, employee Id or Password.");
        
    }
}
