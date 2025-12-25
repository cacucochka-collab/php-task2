<?php
namespace App;

use App\SqlInterface;

class BuilderRequestSQL implements SqlInterface
{
    public array $select = [" "];
    public string $from;
    public string $orderBy;

    public function select(array $columns)
    {
        $this->select = $columns;
        return $this;
    }
    public function from(string $table)
    {
        $this->from = $table;
        return $this;
    }
    public function orderBy(string $columns, string $direction = "ASC")
    {
            $this->orderBy = "$columns " . $direction;
        return $this;
    }
    public function PrintConsole():string
    {
        return "SELECT ".implode(", ", $this->select)."\nFROM ".$this->from."\nORDER BY ".$this->orderBy;
    }
}
