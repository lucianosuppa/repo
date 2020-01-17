<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client([
 'verify' => false
]);

$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');

$users = json_decode($response->getBody());

$collection = new App\UsersCollection($users); die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>
<?php foreach($users as $user) : ?>
<li> <?php echo $user->email ?></li>
<li> <?php echo $user->address->street . ", " . $user->address->suite . ", " . $user->address->city . ", (" . $user->address->zipcode . ")" ?></li><br>
<?php endforeach; ?>
</ul>

</body>
</html>