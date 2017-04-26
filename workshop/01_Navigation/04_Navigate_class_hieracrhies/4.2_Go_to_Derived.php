<?php
/**
 * Navigate to Implementation
 *
 * Use the gutter on the left to navigate to implementations
 * of the interface/class and its members.
 */

namespace Navigation4\JetBrains\Customers;

// 1. Navigate to the implementation in the Customer class and come back.
// HINT: You can use Navigate Back from Exercise 3.1 to quickly come back...
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
