<?php

namespace Navigation4\JetBrains\Customers;

class SilverCustomer extends Customer
{
    /**
     * @param string $name
     */
    function __construct($name)
    {
        parent::__construct($name, 0.10);
    }
}
