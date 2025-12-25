<?php

namespace App;
interface SqlInterface
{
    public function select(array $columns); //Выборка
    public function from(string $table); //Откуда/из какой
    public function where(string $condition); //Фильтр только по "name/id"
    /*
    public function groupBy(string $columns); //Группирует чстроки с одинак. значениями
    */
    public function orderBy(string $columns); //Сортировка
}