<?php

require 'vendor/autoload.php';
 
class DataBase
{
    private $server;
    private $db;
    private $collection;
 
    public function __construct($db_name, $collection_name)
    {
      $this->server = new MongoDB\Client("mongodb://localhost:27017");

      $this->db = $this->server->{$db_name};
 
      $this->collection = $this->db->{$collection_name};
    }

    public function getMany($id)
    { 
        $out = array();

        $resultados = $this->collection->find(array('id'=>$id));

        foreach($resultados as $resultado)
        {
          $out[] = array('id'=>$resultado->id,'value'=>$resultado->value);
        }
        return $out;
    }
    
    public function insert($id, $value)
    {
      return $this->collection->insertOne(array('id'=>$id,'value'=>$value));
    }

    public function update($id, $value)
    {
            //actualizar , cambiarle el valor

    }

    public function delete($id)
    {
        return $this->collection->remove($this->getMany($id));
    }
}
 
$db = new DataBase('db', 'collection');
$db->insert(10, array('edad'=>10, 'altura'=> '2metros'));
$db->insert(11, "kp");
 
$resultado1 = $db->getMany(10);
var_dump($resultado1);

$db->delete(10);
var_dump($resultado1);