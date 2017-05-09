<?php

namespace Debugging\JetBrains;

/**
 * Class Person. Represents a person who has a name and age.
 *
 * @package Debugging\JetBrains
 */
class Person
{
    protected $name;
    protected $age;

    function __construct($name, $age = 42)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}
