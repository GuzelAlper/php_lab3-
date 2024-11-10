<?php

namespace App;

class Vector
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Вычисление длины вектора
    public function length()
    {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    // Проверка того, равен ли вектор нулю или нет
    public function isZero()
    {
        return $this->x == 0 && $this->y == 0;
    }

    //Проверка того, перпендикулярна ли она другому вектору
    public function isPerpendicular(Vector $other)
    {
        return ($this->x * $other->x + $this->y * $other->y) == 0;
    }
}
