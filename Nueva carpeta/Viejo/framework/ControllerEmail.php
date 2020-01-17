<?php

class ControllerEmail implements ControllerInterface
{
    private $email;

    public function get()
    {
        if (isset ($_GET ['email']))
        {
        $this->email = ($_GET["email"]);
        $this->email = 'luciano_S@get.com';
        return $this->email;
        }    
    }
    
    public function post()
    {
        if (isset($_POST['email']))
        {
        $this->email = ($_POST["email"]);
        $this->email = 'luciano_S@post.com';
        return $this->email;
        }
    }

}