<?php

require 'src/Entities/User.php';

//objeto o instancia de una clase
$user = new User;

$user
    ->setEmail('joe@info.com.ar')
    ->setPassword('1234')
;

var_dump($user);

echo $user-> getEmail();

?>