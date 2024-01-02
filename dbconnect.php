<?php

$servername    = "localhost";
$username      = "root";
$password      = "";
$dbname        = "foodii";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn) 
{
    // echo "db connected";
}
else {
    echo "failed to connect ";
}


?>