<?php
/**
 * Go to super class / method
 *
 * Navigate to the super class or method.
 *
 * Ctrl+U (Windows/Linux)
 * Command+U (Mac OS X)
 *
 * Ctrl+H Show Hierarchy tool window (Windows/Linux/Mac OS X)
 */
namespace Navigation4\JetBrains\Customers;

// 1. Place the caret on Customer and use the keyboard shortcut to navigate the hierarchy up.
class GoldCustomer extends Customer
{
    // 2. Place the caret on __construct and use the keyboard shortcut to navigate the hierarchy up.
    // 3. Bring up the Hierarchy tool window and inspect the class hierarchy.
    //    You can also navigate from the tool window.
    /**
     * @param $name string
     */
    function __construct($name)
    {
        parent::__construct($name, 0.25);
    }
}