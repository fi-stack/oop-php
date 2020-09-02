<?php

class Product
{
    public $color;

    public function __construct()
    {
        echo "New product was created. <br>";
    }

    public function __clone()
    {
        echo "New product was cloned. <br>";
    }
}

$shirt1 = new Product;
$shirt1->color = 'Blue';

$shirt2 = clone $shirt1;
// method __clone akan dipanggil saat kita memanggil clone instance. dan __construct tidak akan berjalan pada saat melakukan proses clone tsb

echo $shirt1->color . "<br>";
echo $shirt2->color . "<br>";

echo "<hr>";

$shirt2->color = "Red";

echo $shirt1->color . "<br>";
echo $shirt2->color . "<br>";
