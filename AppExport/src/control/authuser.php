<?php

include "config.php";

$username = $_POST['username'];
$contraseña = $_POST['password'];

$hashPassword = password_hash($contraseña, PASSWORD_DEFAULT, ['cost' => 10]);


$sql =  mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");

if ($sql == true) {
    $user = mysqli_fetch_assoc($sql);
    if ($user == null) {
        $respuesta = array('response' => 'mal');
    } else {
        if (password_verify($user['password'], $hashPassword) != true) {
            $respuesta = array('response' => 'mal');
        } else {

            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            $respuesta = array(
                'response' => 'bien',
            );
        }
    }
}

echo (json_encode($respuesta));
