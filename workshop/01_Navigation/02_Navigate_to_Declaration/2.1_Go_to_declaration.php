<?php
/**
 * Go to Declaration
 *
 * Navigate to the declaration of a symbol.
 *
 * Ctrl+Click or Ctrl+B (Windows/Linux)
 * Command+Click or Command+B (macOS)
 */

namespace Navigation2\JetBrains;

use ArrayIterator;
use Navigation1\JetBrains\Customers\Customer;

$name = 'Hadi';
$age = 53;

// 1. Ctrl+Click (or Command+Click on Mac) on the Customer symbol.
// 2. Use the keyboard shortcut.
// 3. Go to Declaration for the $age variable passed into the below constructor.
$person = new Customer($name, $age);

// 4. Navigate to the celebrateBirthday() function.
// 5. Go to Declaration for the $person variable.
$person->celebrateBirthday();

// 6. Go to Declaration for the ArrayIterator SPL class.
$myArray = array();
$myArrayIterator  = new \ArrayIterator($myArray);
