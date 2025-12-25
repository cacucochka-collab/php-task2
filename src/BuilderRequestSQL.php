<?php

namespace App;

use App\SqlInterface;

class BuilderRequestSQL implements SqlInterface
{
    private array $select = [" "];
    private string $from;
    private string $where;
    /*
    private string $groupBy;
    */
    private string $orderBy;

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

    public function where(string $condition)
    {
        $this->where = $condition;
        return $this;
    }

    /*
    public function groupBy(string $columns)
    {

    }
     */
    public function orderBy(string $columns, string $direction = "ASC")
    {
        $this->orderBy = "$columns " . $direction;
        return $this;
    }

    public function PrintConsole(): string
    {
        return "SELECT " . implode(", ", $this->select) .
            "\nFROM " . $this->from .
            "\nWHERE " . $this->where .
            "\nORDER BY " . $this->orderBy;
    }
}
