<?php

namespace App;

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Метод переноса точки по осям x и y
    public function move($dx, $dy)
    {
        $this->x += $dx;
        $this->y += $dy;
    }
}
