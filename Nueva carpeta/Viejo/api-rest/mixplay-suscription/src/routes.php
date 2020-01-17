<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/movies', 'MoviesController:index');

//$data = json_decode(file_get_contents('templates/movies.json'));

//return $this->response->withJson($data);

$app->get('/movies/{id}', 'MoviesController:show');

$app->post('/movies', 'MoviesController:create');

$app->patch('/movies/{id}', 'MoviesController:edit');

$app->put('/movies/{id}', 'MoviesController:repleace');

$app->delete('/movies/{id}', 'MoviesController:delete');

$app->get('/plans', 'PlansController');