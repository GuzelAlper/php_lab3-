<?php

namespace App;

class MagicClass
{
    // Конструктор вызывается при создании экземпляра класса
    public function __construct()
    {
        echo "__construct вызван\n";
    }

    // Деструктор вызывается при удалении экземпляра класса
    public function __destruct()
    {
        echo "__destruct вызван\n";
    }

    // Вызывается при обращении к несуществующему методу объекта
    public function __call($name, $arguments)
    {
        echo "__call вызван: $name\n";
    }

    // Вызывается при обращении к несуществующему статическому методу
    public static function __callStatic($name, $arguments)
    {
        echo "__callStatic вызван: $name\n";
    }

    // Вызывается при попытке получить значение несуществующего свойства
    public function __get($name)
    {
        echo "__get вызван: $name\n";
    }

    // Вызывается при попытке присвоить значение несуществующему свойству
    public function __set($name, $value)
    {
        echo "__set вызван: $name = $value\n";
    }

    // Вызывается при вызове функции isset() или empty() на несуществующем свойстве
    public function __isset($name)
    {
        echo "__isset вызван: $name\n";
    }

    // Вызывается при вызове функции unset() на несуществующем свойстве
    public function __unset($name)
    {
        echo "__unset вызван: $name\n";
    }

    // Вызывается при попытке вывести объект как строку
    public function __toString()
    {
        return "__toString вызван\n";
    }

    // Вызывается при попытке использовать объект как функцию
    public function __invoke()
    {
        echo "__invoke вызван\n";
    }

    // Вызывается при клонировании объекта
    public function __clone()
    {
        echo "__clone вызван\n";
    }
}
