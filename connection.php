<?php

    $serverName="localhost";
    $databaseName="id12350809_user";
    $userName="id12350809_codewithme20";
    $password="codewithme20";
    $con=mysqli_connect($serverName,$userName,$password,$databaseName);
    if(!$con)
    {
        echo "Error occured in connection"
    }
?>

