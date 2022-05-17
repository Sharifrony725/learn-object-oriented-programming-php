<?php

namespace App\Classes;

class Student
{
    public $firstName;
    public $lastName;
    public $fullName;
    public function __construct($data)
    {
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        $this->firstName  =  $data['first_name'];
        $this->lastName   =  $data['last_name'];
    }
    public function index()
    {
        $this->fullName =  $this->firstName . ' ' . $this->lastName;
        return $this->fullName;
    }
}


// use App\Classes\User;

// class Student extends User
// {
//     public $data = [];
//     public static $city = 'Feni';
//     public function __construct($value)
//     {
//         echo $value;
//     }
//         public static function hello(){
//             // echo 'Hello, I live in dhaka';
//             echo self::$city;
//         }
//     public function index()
//     {
//         $this->data = [
//             0 => [
//                 'name' => 'rony',
//                 'email' => 'rony@gmail.com',
//                 'mobile' => [
//                     'mobile_one' => 02156454421,
//                     'mobile_two' => 021564544215
//                 ]
//             ],
//             1 => [
//                 'name' => 'rodny',
//                 'email' => 'ronfy@gmail.com',
//                 'mobile' => [
//                     'mobile_one' => 02116454421,
//                     'mobile_two' => 021564544215
//                 ]
//             ],
//             2 => [
//                 'name' => 'roffny',
//                 'email' => 'ronddy@gmail.com',
//                 'mobile' => [
//                     'mobile_one' => 0215645654421,
//                     'mobile_two' => 0215645544215
//                 ]
//             ],
//         ];
//         echo "<pre>";
//         //print_r($this->data);
//         var_dump($this->data);
//         echo "</pre>";
//         // foreach ($this->data as  $item) {
//         //     foreach ($item as  $value) {
//         //         if(is_array($value)){
//         //             foreach ($value as  $v_value) {
//         //                 echo $v_value .'<br>';
//         //             }
//         //         }else{
//         //             echo $value . '<br>';
//         //         }
//         //     }
//         //     echo '<br>';
//     }
//     public function test()
//     {
//         // echo $this->userName . '<br>';
//         // echo $this->password . '<br>';
//         // echo $this->token;
//         echo $this->login() . '<br>';
//         echo $this->logout() . '<br>';
//         //echo $this->changePassword();
//     }
//     // echo $this->data[2]['name'];
//     //$this->data = [
//     //       'name' => 'rony',
//     //       'email' => 'rony@gmail.com',
//     //       'mobile' => 0216513212
//     //   ];
//     //   foreach ($this->data as  $item) {
//     //         echo $item .'</br>';
//     //   }
//     //echo $this->data['name'];
// }
