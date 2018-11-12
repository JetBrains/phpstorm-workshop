<?php
/**
 * Navigate to Implementation
 *
 * Ctrl+Alt+B (Windows/Linux)
 * Alt+Command+B (macOS
 *
 * Navigate to the implementation of a given class.
 */

use Navigation4\JetBrains\Customers\Customer;
use Navigation4\JetBrains\Customers\GoldCustomer;

class GoToImplementation
{
    public function pleaseGoThere()
    {
        // 1. Put the caret on Customer and Navigate To Implementation.
        //    Get the choice of Customer, SilverCustomer and GoldCustomer.
        //    SilverCustomer and GoldCustomer are indirect implementations because they derive from Customer.
        $customer = new Customer('Ford', 0);

        // 2. Put the caret on GoldCustomer and Navigate To Implementation.
        $customer = new GoldCustomer('Arthur');
    }
}
