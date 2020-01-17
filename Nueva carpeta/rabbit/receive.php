<?php

require_once __DIR__ . '/vendor/autoload.php';
use \PhpAmqpLib\Connection\AMQPStreamConnection as AMQPStreamConnection;

$connection = new AMQPStreamConnection('10.90.242.122', 10001, 'guest', 'guest');$channel = $connection->channel();
$channel = $connection->channel();

$channel->queue_declare('chat13', false, false, false, false);

$callback = function ($msg) {
    echo ' [x] Received ', $msg->body, "\n";
};

$channel->basic_consume('chat13', '', false, true, false, false, $callback);

while (count($channel->callbacks)) {
    $channel->wait();
}
?>