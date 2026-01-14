<?php

namespace App;

use App\SqlInterface;

class BuilderRequestSQL implements SqlInterface
{
    private array $select = [];
    private array $from = [];
    private array $where = [];
    private array $groupBy = [];
    private array $orderBy = [];

    public function select(array $columns)
    {
        $this->select = $columns;
        return $this;
    }

    public function from(string $table)
    {
        $this->from[] = $table;
        return $this;
    }

    public function where(string $condition)
    {
        $this->where[] = $condition;
        return $this;
    }

    public function groupBy(string $columns)
    {
        $this->groupBy[] = $columns;
        return $this;
    }

    public function orderBy(string $columns, string $direction = "ASC")
    {
        $this->orderBy[] = "$columns " . $direction;
        return $this;
    }

    public function toSql(): string
    {
        return "SELECT " . implode(", ", $this->select).
            "\nFROM " . implode(", ", $this->from).
            "\nWHERE " . implode("and ", $this->where).
            "\nGROUP BY " . implode(", ", $this->groupBy).
            "\nORDER BY " . implode(", ", $this->orderBy);
    }
}
