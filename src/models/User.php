<?php 

namespace src\models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer 
{
    public function __construct()
    {
        parent::__construct("users", [""]);
    }
}