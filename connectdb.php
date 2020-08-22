<?php
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="Duo";
    $dbname="loginSys";
    $dbport="";

    $link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die ( mysqli_connect_error() );

    // var_dump($link);

    // $result = mysqli_query($link,"set names UTF8");

    // var_dump($result);
    // echo "123";
?>