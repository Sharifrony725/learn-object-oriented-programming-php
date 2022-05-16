<?php

namespace App\Classes;

class User
{
    public $userName = 'BITM';
    protected $password = 123456;
    private $token = '101010';
    public function login()
    {
        echo 'Yes, Login';
    }
    protected function logout(){

        echo 'Yes, Logout';
    }
    private function changePassword(){
        echo 'Yes , Change Password';
    }
    // public function __construct()
    // {
        
    // }
}
