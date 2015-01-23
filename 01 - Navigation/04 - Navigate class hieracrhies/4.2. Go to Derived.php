<?php
/**
 * Go to Derived
 *
 * Use the gutter on the left to navigate to implementations
 * of the interface/class and its members.
 */
namespace Navigation4\JetBrains\Customers;

// 1. Navigate to the Customer class and come back.
interface ICustomer
{
    /**
     * @return double
     */
    public function getDiscount();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param $discount double
     */
    public function setDiscount($discount);

    /**
     * @param $name string
     */
    public function setName($name);
}