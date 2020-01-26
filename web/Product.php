<?php

class Product
{

public $productArray = array(
"3D45" => array(
'id' => '1',
'name' => 'Lenovo Pentium 2020',
'code' => '3D45',
'image' => 'images02/pic01.jpg',
'price' => '2000.00'
),
"4F56" => array(
'id' => '2',
'name' => 'HP EliteBook 840 G6',
'code' => '4F56',
'image' => 'images02/pic02.jpg',
'price' => '1500.00'
),
"6G56" => array(
'id' => '3',
'name' => 'Apple MacBook Pro Silver',
'code' => '6G56',
'image' => 'images02/pic03.jpg',
'price' => '1800.00'
),
"7T45" => array(
'id' => '4',
'name' => 'XPS 13 2-in-1 Premium',
'code' => '7T45',
'image' => 'images02/pic04.png',
'price' => '2800.00'
),
"9E23" => array(
'id' => '5',
'name' => 'Dell XPS 15 9570',
'code' => '9E23',
'image' => 'images02/pic05.jpg',
'price' => '3500.00'
),
"8O34" => array(
'id' => '6',
'name' => 'HP Omen 17t',
'code' => '8O34',
'image' => 'images02/pic06.jpg',
'price' => '3500.00'
)
);

public function getAllProduct()
{
return $this->productArray;
}
}
