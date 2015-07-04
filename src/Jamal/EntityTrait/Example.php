<?php

namespace Jamal\EntityTrait;

class Example
{
    public $id;
    public $name;
    public $age;
    public $phone;

    use EntityTrait;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}
