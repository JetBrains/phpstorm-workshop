<?php
/**
 * Navigate to super class/method
 *
 * Ctrl+U (Windows/Linux)
 * Command+U (macOS)
 *
 * Ctrl+H Show Hierarchy tool window (Windows/Linux/macOS)
 *
 * Navigate to the super class or method
 * (traverse backwards up the class hierarchy)
 */

namespace Navigation4\JetBrains\Customers;

// 1. Place the caret on Customer and use Navigate to Super Method to navigate up
// the hierarchy.
class GoldCustomer extends Customer
{
    // 2. Place the caret on __construct and use Navigate to Super Method to
    // navigate up the hierarchy up.
    // 3. Bring up the Hierarchy tool window and inspect the class hierarchy.
    // (You can also navigate from the tool window)
    /**
     * @param string $name
     */
    public function __construct($name)
    {
        parent::__construct($name, 0.25);
    }
}
