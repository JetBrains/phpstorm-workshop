<?php
/**
 * Go to Implementation
 *
 * Navigate to the implementation of a given class.
 *
 * Ctrl+Alt+B (Windows/Linux)
 * Alt+Command+B (Mac OS X)
 */

use Navigation4\JetBrains\Customers\Customer;
use Navigation4\JetBrains\Customers\SilverCustomer;
use Navigation4\JetBrains\Customers\GoldCustomer;
use Navigation4\JetBrains\Customers\ICustomer;

class GoToImplementation {
    public function pleaseGoThere() {
        // 1. Put the caret on Customer and Go To Implementation.
        //    Get the choice of Customer, SilverCustomer and GoldCustomer.
        //    SilverCustomer and GoldCustomer are indirect implementations because they derive from Customer.
        $customer = new Customer('Maarten', 0);

        // 2. Put the caret on GoldCustomer and Go To Implementation.
        $customer = new GoldCustomer('Maarten');
    }
}