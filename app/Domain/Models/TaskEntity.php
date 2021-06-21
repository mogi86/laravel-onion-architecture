<?php

namespace App\Domain\Models;

class TaskEntity
{
    private string $id;

    private string $name;

    private string $description;

    public function __construct(string $name, string $description) {
        $this->id = 1;
        $this->name = $name;
        $this->description = $description;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function toString(): string
    {
        return "id=$this->id, name=$this->name, description=$this->description";
    }
}
