<?php

namespace App;
interface SqlInterface
{
    public function select(array $columns);
    public function from(string $table);
    public function where(string $condition);
    public function groupBy(string $columns);
    public function orderBy(string $columns);
}