<?php

namespace App;

class UsersCollection
{
    private $users = [];
    
    public function __construct(array $data = [])
    {
        foreach ($data as $item) {
            $geo = new Geo;
            $geo->setLat($item->address->geo->lat);
            $geo->setLng($item->address->geo->lng);

            $address = new Address;
            $address->setStreet($item->address->street);
            $address->setSuite($item->address->suite);
            $address->setCity($item->address->city);
            $address->setZipcode($item->address->zipcode);
            $address->setGeo($geo);

            $user = new User;
            $user->setName($item->name);
            $user->setUsername($item->username);
            $user->setEmail($item->email);
            $user->setAddress($address);
            $user->setPhone($item->phone);
            $user->setWebsite($item->website);
            $user->setCompany($item->company);

            $this->users[] = $user;

            var_dump ($user);
        }
    }

    public function get()
    {
        return $this->users;
    }
}