<?php

session_start();

require 'ValidatorInterface.php';
require 'Usuario.php';
require 'Request.php';
require 'Validator.php';
require 'UserValidator.php';
require 'IsNotEmptyRule.php';
require 'IsEmail.php';
require 'IsSecurePassword.php';


$user = new User();
$request = new Request();


$user  
    ->setEmail ($request->get('email'))
    ->setPassword ($request->get('password'));
    
if ($request->get('rememberMe', 'bool')) {
        $user->rememberMe();
}

$validator = new UserValidator($user,$user->getValidationrules());
$validator->validate();
$user->setemail('asads@dss.coas');

var_dump($validator);

/*
    echo "\n" . 'El email es ' . $user1->getEmail() . "\n" . "\n";
    echo 'La contraseña es ' . $user1->getPassword() . "\n" . "\n";
    if ($user1->isRememberMe()){
    echo 'Recordado';
    } else {
    echo 'No Recordado';
    }
*/

//print_r($_POST);
?>

<!DOCTYPE html>
<html lang ="en">
<head>
<title>document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="email" name="email" value="<?= $_POST['email'] ?? '' ?>"><br><br>
        <input type="text" placeholder="password" name="password" value="<?= $_POST['password'] ?? '' ?>"><br><br>

        <input type="checkbox" name="remember"> recordarme en este equipo <br><br>
        <button>Login</button>
    </form>
</body>
</html>