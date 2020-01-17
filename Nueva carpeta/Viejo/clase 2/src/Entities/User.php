<?php

class User
{
    //propiedad o atributo
    //visibilidad: publico, protected, private

   public $email = '';
   public $password = '';

   //setters y getters
   public function setEmail(string $a)
   {
       $this->email = $a;
   
       return $this;
   }

   public function setPassword(string $p)
{
    $this->password = $p;

    return $this;
}

    public function getEmail() : string 
{
    return $this->email;
}

}

?>