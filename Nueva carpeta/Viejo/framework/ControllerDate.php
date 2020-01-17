<?php

include 'ControllerInterface.php';

class ControllerDate implements ControllerInterface
{
    private $date;
    private $time;

    public function get()
    {
        if (isset($_GET['date']))
        {

        $time = date('l jS \of F Y h:i:s A');
        
        $this->date = ($_GET["date"]);

        $this->date = $time;

        return $this->date;
        }
    }
    
    public function post()
    {
        if (isset($_POST['date']))
        {

        $time ="Ultima modificación: " . date ("F d Y H:i:s.", getlastmod());
        
        $this->date = ($_POST["date"]);

        $this->date = $time;

        return $this->date;
        }
    }
}