<?php

class User
{
    public $names;
    public $phone;
    public $address;
    public $role;

    public function __construct($names, $phone, $address, $role)
    {
        $this->names = $names;
        $this->phone = $phone;
        $this->address = $address;
        $this->role = $role;
    }

    public function getNames()
    {
        return $this->names;
    }

    public function setNames($names)
    {
        $this->names = $names;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}