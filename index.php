<?php

require 'vendor/autoload.php';

use App\Point;
use App\Vector;

// Создаем точку Т1
$t1 = new Point(3, 4);

// Создаем вектор V1
$v1 = new Vector(1, 2);

// Как V2, мы создаем нулевой вектор
$v2 = new Vector(0, 0);

// Мы создаем вектор V3, перпендикулярный вектору V1
$v3 = new Vector(-2, 1);

// Вычисляем и печатаем длину каждого вектора
echo "V1 длина: " . $v1->length() . PHP_EOL;
echo "V2 длина: " . $v2->length() . PHP_EOL;
echo "V3 длина: " . $v3->length() . PHP_EOL;

//Мы проверяем, что V1 и V3 перпендикулярны
if ($v1->isPerpendicular($v3)) {
    echo "V1 и V3 перпендикулярны друг другу." . PHP_EOL;
} else {
    echo "V1 и V3 не перпендикулярны друг другу." . PHP_EOL;
}

// T1 noktasını V1 vektörü kadar taşıyoruz
$t1->move($v1->x, $v1->y);
echo "Новые координаты точки T1: (" . $t1->x . ", " . $t1->y . ")" . PHP_EOL;
