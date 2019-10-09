<?php
include_once ("User.php");
class Student extends User
{
    public $group;

    public function __construct($names, $phone, $address, $role,$group)
    {
        parent::__construct($names, $phone, $address, $role);
        $this->group = $group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }

    public function getGroup()
    {
        return $this->group;
    }
}