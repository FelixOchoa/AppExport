<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "appexport";

$con = mysqli_connect($host, $user, $password, $dbname);

if(!$con){
    die("Conexion error: " .mysqli_connect_error());
}
