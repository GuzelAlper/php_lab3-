<?php

require 'vendor/autoload.php';

use App\MagicClass;

// Создаем новый экземпляр класса MagicClass
$magic = new MagicClass();

// Демонстрация вызова всех магических методов

// Вызываем несуществующий метод объекта (вызовет __call)
$magic->nonExistentMethod(); // __call

// Вызываем несуществующий статический метод класса (вызовет __callStatic)
MagicClass::nonExistentStaticMethod(); // __callStatic

// Выводим объект как строку (вызовет __toString)
echo $magic; // __toString

// Присваиваем значение несуществующему свойству (вызовет __set)
$magic->property = "значение"; // __set

// Получаем значение несуществующего свойства (вызовет __get)
echo $magic->property; // __get

// Проверяем, установлено ли свойство (вызовет __isset)
isset($magic->property); // __isset

// Удаляем несуществующее свойство (вызовет __unset)
unset($magic->property); // __unset

// Используем объект как функцию (вызовет __invoke)
$magic(); // __invoke

// Клонируем объект (вызовет __clone)
$cloneMagic = clone $magic;
