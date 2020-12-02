<?php

    $server ="sql108.epizy.com";
    $username ="epiz_27361495";
    $password ="epiz_27361495!";
    $dbname ="epiz_27361495_paiu";

        $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed:" .mysqli_connect_error());
    }





?>