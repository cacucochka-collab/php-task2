<?php

namespace App;
interface SqlInterface
{
    public function select(array $columns); //Выборка
    public function from(string $table); //Откуда/из какой
    public function orderBy(string $columns); //Сортировка
}