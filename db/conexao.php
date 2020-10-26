<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "moradiamais";

    $con = mysqli_connect($host, $user, $pass, $dbName);

    if ($con) {
        
        return true;

    } else {

        die ("falha" .mysqli_errno($con));
    }

    


