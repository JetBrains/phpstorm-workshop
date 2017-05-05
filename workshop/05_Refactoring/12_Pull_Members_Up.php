<?php
/**
 * Pull Members Up / Push Members Down
 *
 * Move members from subclass to superclass or from superclass to subclass.
 */

namespace Refactoring12\JetBrains;

// 1. Pull the getName() function from SilverCustomer to Person. Use Refactor This.
// 2. Push the calculateDiscount() down to Customer. Use Refactor This.
//    Note that the move will throw a problem detection because calculateDiscount() is used
//    in calling code and expected on the Person class.
class Person
{
    protected $name;

    public function calculateDiscount($amount)
    {

    }
}

class Customer extends Person
{

}

class SilverCustomer extends Customer
{
    public function getName()
    {
        return $this->name;
    }
}

$customer = new SilverCustomer();
$customer->getName();

$person = new Person();
$person->getName();
$person->calculateDiscount(100);
