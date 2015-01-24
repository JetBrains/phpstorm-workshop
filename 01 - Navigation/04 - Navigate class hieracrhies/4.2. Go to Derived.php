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
     * @param double $discount
     */
    public function setDiscount($discount);

    /**
     * @param string $name
     */
    public function setName($name);
}
