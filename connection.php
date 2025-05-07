<?php

    $database= new mysqli("localhost","root","","therapy");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>