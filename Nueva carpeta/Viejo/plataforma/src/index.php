<?php

require '../vendor/autoload.php';

use mixplay\plataforma\{
    PlanInterface,
    SuscriberInterface,
    SuscriptionInterface,
    Suscription,
    Plan,
    Suscriber;
}

$plan = new Plan;
$suscription = new Suscription;
$suscriber = new Suscriber;


echo 'El subscriptor tiene el plan: ' . $plan->getName();

echo "\n";

var_dump($plan->search());


?>