<?php

namespace Controllers;

use Slim\Container;
use PDO;
use PDOExeption;

class MoviesController
{

    private $request;
    private $response;
    private $db;

    public function __construct(Container $container)
    {
        $this->request = $container->get('request');
        $this->response = $container->get('response');
        $this->db = $container->get('db');
    }

    public function index ()
    {
    try {
        $sql = 'select * from movies';

        $stmt = $this->db->prepare($sql);

        $stmt -> execute();

        return $this ->response->withJson($stmt->fetchAll(PDO::FETCH_ASSOC));

    } catch (PDOExeption $e) {
        return $this->response->withJson(['error' => $e->getMessage()]);
    }
    }

    public function show ()
    {
        try {
            $sql = 'select * from movies where id= ?';

            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(1,10);

            $stmt -> execute();
    
            return $this ->response->withJson($stmt->fetch(PDO::FETCH_ORI_FIRST));
    
        } catch (PDOExeption $e) {
            return $this->response->withJson(['error' => $e->getMessage()]);
        }
        }

    public function create ()
    {
        return $this->response->withJson(['id' => 'args' ]);
    }

    public function edit ()
    {
        return $this->response->withJson(['id' => 'patch' ]);
    }

    public function repleace ()
    {
        return $this->response->withJson(['id' => 'put' ]);
    }

    public function delete ()
    {
        return $this->response->withJson(['id' => 'delete' ]);
    }


}