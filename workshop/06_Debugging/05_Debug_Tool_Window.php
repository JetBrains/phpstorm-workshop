<?php
/**
 * Debug Tool Window
 *
 * Available during a debug session. Showing execution details, variables, watches.
 * Allows running code / modifying variable value.
 *
 * Alt+5 (Alt+F8 evaluate expression) (Windows/Linux)
 * Command+5 (Alt+F8 evaluate expression) (macOS)
 */

namespace Debugging3\JetBrains;

require_once 'Code/Person.php';

use Debugging\JetBrains\Person;

$name = 'Maarten';
$fruits = array('apple', 'pear', 'lemon');

// 1. Navigate to the Person class constructor and place a breakpoint in it.
$person = new Person($name);

foreach ($fruits as $fruit) {
    // 2. Place a breakpoint on the following line of code.
    echo $person->getName() . " likes " . $fruit . "\r\n";
}

// 3. Use the context menu to debug the current PHP script. This should launch the debugger and break on our first breakpoint in Person.php.
//    The Debug Tool Window shows us frames on the left, in other words which line of code called into which line of code.
//    We can see the Person.php file is called into from the current file. In large applications, this allows walking the execution stack.
// 4. Click the "05_Debug_Tool_Window.php" entry from the frames list. We can see where the Person constructor is called.
// 5. Continue (using the toolbar button or F9).
// 6. From the Debug Tool Window, we can see all variables in the current scope: $fruit, $fruits, $name, $person and the $_SERVER global.
//    Expand the $fruits variable and see which values are in there. We should see three values.
//    Expand the $person variable and see it holds a variable _name.
// 7. The variables shown are only the variables that are in scope. If we want to "pin" inspecting a variable, we can add it under Watches on the right.
//    Using the context menu, add the $name variable to watches and see it appear there.
// 8. Let's say we wanted to test the code with a different name, without changing code.
//    From the Debug Tool Window, expand $person and set the _name property to your name using the F2 keyboard shortcut.
// 9. Continue execution once (F9) and see on the Console that your name is printed.
// 10. From the Debug Tool Window, use the Evaluate Expression toolbar button (or Alt+F8) to change the name. E.g. evaluate: $person->setName('Mikhail').
//     We can also run PHP code in here, for example evaluate $a = 1 + 1. The Evaluate Expression Window will show the result.
