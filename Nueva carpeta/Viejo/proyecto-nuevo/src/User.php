<?php

namespace App;

class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string 
     */
    private $name;
    
    /**
     * @var string
     */
    private $username;
    
    /**
     * @var string
     */
    private $email;
    
    /**
     * @var Address
     */
    private $address;
    
    /**
     * @var string
     */
    private $phone;
    
    /**
     * @var string
     */
    private $website;
    
    /**
     * @var Company
     */
    private $company;

    /**
     * @param int $id
     * @return user
     */
    public function setId (int $id)
    {
        $this->id = $id; 
        return $this;
    }

    /**
     * @return int
     */
    public function getId (): int
    {
        return $this->id;
    }

    /**
     * @param string $name
     * @return user
     */
    public function setName ($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName ()
    {
        return $this->name;        
    }

    /**
     * @param string $username
     * @return user
     */
    public function setUsername ($username)
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername ()
    {
        return $this->username;   
    }
    public function setEmail ($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail ()
    {
        return $this->email;
    }

    public function setAddress ($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getAddress ()
    {
    
        return $this->address;    
    }
    public function setPhone ($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone ()
    {
        return $this->phone;    
    }
    public function setWebsite ($website)
    {
        $this->website = $website;
        return $this;
    }

    public function getWebsite ()
    {
        return $this->website;   
    }
    public function setCompany ($company)
    {
        $this->company = $company;
        return $this;
    }

    public function getCompany ()
    {
        return $this->company;
    }

}