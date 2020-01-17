<?php

require_once __DIR__ . '/vendor/autoload.php';
use \PhpAmqpLib\Connection\AMQPStreamConnection as AMQPStreamConnection;

//Abrimos una conexión y un canal, y declaramos la cola de la que vamos a consumir. 
$connection = new AMQPStreamConnection('localhost', 10001, 'guest', 'guest');
$channel = $connection->channel();
$channel = $connection->channel();


$channel->queue_declare('chat13', false, false, false, false);


//decirle al servidor que nos entregue los mensajes de la cola.
$callback = function ($msg) {
    echo ' [x] Received ', $msg->body, "\n";
};

$channel->basic_consume('chat13', '', false, true, false, false, $callback);

while (count($channel->callbacks)) {
    $channel->wait();
}
?>