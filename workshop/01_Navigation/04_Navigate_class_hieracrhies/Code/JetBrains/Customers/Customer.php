<?php

namespace Navigation4\JetBrains\Customers;

class Customer implements ICustomer
{
    /** @var string */
    protected $_name;

    /** @var double */
    protected $_discount;

    /**
     * @param string $name
     * @param double $discount
     */
    public function __construct($name, $discount)
    {
        $this->_name = $name;
        $this->_discount = $discount;
    }

    /**
     * @return double
     */
    public function getDiscount()
    {
        return $this->_discount;
    }

    /**
     * @param double $discount
     */
    public function setDiscount($discount)
    {
        $this->_discount = $discount;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }
}
