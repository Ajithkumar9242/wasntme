<?php

$host = "localhost";

$dbname = "auth-sys";

$user = "root";

$pass = "";

$con = mysqli_connect($host, $user, $pass, $dbname);  

if($con){
    echo "CONNECTED";
}

else{
    echo "err";
}
?>