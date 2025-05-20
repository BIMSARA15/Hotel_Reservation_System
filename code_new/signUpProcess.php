<?php

include "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$pid = $_POST["pid"];
$password = $_POST["p"];
$mobile = $_POST["m"];
$gender = $_POST["g"];
$al_1 = $_POST["a1"];
$al_2 = $_POST["a2"];
$al_3 = $_POST["a3"];
$city = $_POST["city"];
$pcode = $_POST["pcode"];
$country = $_POST["c"];



if(empty($fname)){
    echo ("Please enter your First Name.");
}else if(strlen($fname) > 45){
    echo ("First Name must have less than 45 characters.");
}else if(empty($lname)){
    echo ("Please enter your Last Name.");
}else if(strlen($lname) > 45){
    echo ("Last Name must have less than 45 characters.");
}else if(empty($email)){
    echo ("Please enter your Email Address.");
}else if(strlen($email) > 100){
    echo ("Email must have less than 100 characters.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email Address");
}else if(empty($pid)){
    echo ("Please enter your passport id");
}else if(strlen($pid) <8){
    echo ("invalid passport number.");
}else if(strlen($pid) > 9){
    echo ("invalid passport number.");
}else if(empty($password)){
    echo ("Please enter your Password.");
}else if(strlen($password)<5 || strlen($password)>20){
    echo ("Password length must be between 5 - 20 characters.");
}else if(empty($mobile)){
    echo ("Please enter your Mobie Number.");
}else if(empty($al_1)){
    echo ("Please enter your Address.");
}else if(empty($al_2)){
    echo ("Please enter your Address.");
}else if(empty($al_3)){
    echo ("Please enter your Address.");
}else if(empty($city)){
    echo ("Please enter your city.");
}else if(empty($pcode)){
    echo ("Please enter your postal code.");
}else{
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."' OR  `mobile`='".$mobile."' OR `passport`='".$pid."'"); 
    $n = $rs->num_rows;

    if($n > 0){
        echo ("User with the same Mobile Number, Email or Passport Number already exists.");
    }else{

        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");

        Database::iud("INSERT INTO 
        `user`(`fname`,`lname`,`email`,`passport`,`password`,`mobile`,`gender_id`,`address_line_01`,`address_line_02`,`address_line_03`,`city`,`postal_code`,`country_id`,`status`,`joined_date`) 
        VALUES ('".$fname."','".$lname."','".$email."','".$pid."','".$password."','".$mobile."','".$gender."','".$al_1."','".$al_2."','".$al_3."','".$city."','".$pcode."','".$country."','0','".$date."')");

        echo ("Success");

    }


}


?>