<?php

namespace App\Classes;
class Product 
{
    public $product = [];
    public function index(){

        $this->product = [
            0 => [
                'name' => 'Shirt1',
                'price' => 100,
                'brand' => 'a'
            ],
            1 => [
                'name' => 'Shirt2',
                'price' => 200,
                'brand' => 'abc'
            ],
            3 => [
                'name' => 'Shirt3',
                'price' => 300,
                'brand' => 'abc'
            ],
            4 => [
                'name' => 'Shirt4',
                'price' => 400,
                'brand' => 'abcd'
            ],
            5 => [
                'name' => 'Shirt5',
                'price' => 500,
                'brand' => 'abcde'
            ],
          
        ];
            foreach ($this->product as  $item) {
                    echo  'Product name : ' .$item['name'], ', ' .'Product Price : ' . $item['price'], ', ' . 'Product Brand : ' . $item['brand'] . '<br>';
            }
       

    }
}
