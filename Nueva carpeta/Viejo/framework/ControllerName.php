<?php

include_once     'ControllerInterface.php';

class ControllerName implements ControllerInterface
{
private $dato;

    public function get()
    {
        if (isset ($_GET['nombre']))
        {
        $this->dato = $_GET["nombre"];
        
        return json_encode($this->dato);
        }
    }

    public function post()
    {
        if (isset ($_POST['apellido']))
        {
        $this->dato = $_POST["apellido"];
        
        var_dump($_POST);

        return json_encode($this->dato);
        }
    }
}