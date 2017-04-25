<?php
/**
 * Go to Declaration
 *
 * Ctrl+Click or Ctrl+B (Windows/Linux)
 * Command+Click or Command+B (Mac OS X)
 *
 * Navigate to the declaration of a variable, class or method
 */

namespace Navigation2\JetBrains;

use Navigation1\JetBrains\Customers\Customer;

$name = 'Hadi';
$age = 53;

// 1. Ctrl+Click (or Command+Click on Mac) on the Customer symbol (class name).
// 2. Use the keyboard shortcut (put caret in the word Customer and press Ctrl/Cmd + B).
// 3. Go to Declaration for the $age variable passed into the below constructor.
$person = new Customer($name, $age);

// 4. Navigate to the celebrateBirthday() function.
// 5. Go to Declaration for the $person variable.
$person->celebrateBirthday();

// 6. Go to Declaration for the ArrayIterator SPL class.
$myArray = array();
$myArrayIterator  = new \ArrayIterator($myArray);
