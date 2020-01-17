<?php


class User
{
    private $email = '';
    private $password = '';
    private $rememberMe = false;

    public function setEmail ($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
    public function SetPassword ($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword()
    {
        
        return $this->password;
    }

    public function rememberMe ()
    {
        $this->rememberMe = true;
        return $this;
    }

    public function forget()
    {
        $this->rememberMe = false;
        return $this;
    }

    public function isRememberMe ()
    {
        return $this->rememberMe;
    }

    public function getValidationRules()
    {
        return[
            'email' => ['isNotEmpty','isEmail'],
            'password' => ['isSecurePassword'],
        ];
    }

}

?>