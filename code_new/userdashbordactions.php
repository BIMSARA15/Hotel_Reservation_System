
<?php

include "connection.php";


$p = $_POST["p"];
$q = $_POST["q"];
$h=$_POST["h"];

// echo($p);
// echo($q);
// echo($h);



if(empty($p)){
    echo ("Please enter your passport.");
}else if(strlen($p) > 9){
    echo ("Invalid passport.");
}else if(empty($q)){
    echo ("Please enter your question");
}else{
    
        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");

        Database::iud("INSERT INTO 
        `reviews`(`passport`,`review`,`h_id`,`date`) 
        VALUES ('".$p."','".$q."','".$h."','".$date."')");

        echo ("success");

    }





?>