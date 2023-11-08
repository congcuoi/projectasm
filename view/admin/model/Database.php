<?php
    function Connect() {
        $hostname = "localhost";
        $user = "root";
        $pass = "";
        $database = "f8_php_da1";

        $connect = new mysqli($hostname, $user, $pass, $database);
        if(!$connect){
            die('Connect error ( ' . mysqli_connect_error() . ')');
        }
        echo 'connect success';
        return $connect;
    }
?>