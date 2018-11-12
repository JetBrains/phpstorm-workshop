<?php
/**
 * Navigate through execution.
 *
 * Navigate through execution: Resume, Step Over, Step Into, Smart Step Into, Step out.
 *
 * F9 (resume), F8 (step over), F7 (step into) (Windows/Linux)
 * Alt+Command+R (resume), F8 (step over), F7 (step into) (macOS)
 */

namespace Debugging6\JetBrains;

require_once 'Code/FruitRepository.php';
require_once 'Code/Person.php';

use Debugging\JetBrains\FruitRepository;
use Debugging\JetBrains\Person;

// 1. Place four breakpoints on the following four lines of code.
$fruitRepository = new FruitRepository();
$fruits = $fruitRepository->getAll();

/** @var Person[] $people */
$people = array();

for ($i = 0; $i < 200; $i++) {
    $people[] = new Person('Person ' . $i, $i);
}

foreach ($people as $person) {
    foreach ($fruits as $fruit) {
        // 2. Place a breakpoint on the following line of code.
        echo $person->getName() . ", age " .  $person->getAge() . ", likes " . $fruit . "\r\n";
    }
}

// 3. Use the context menu to debug the current PHP script. This should launch the debugger and break on our first breakpoint.
// 4. Using Resume, execute until we are on the next breakpoint. Let's step into the getAll() function using the keyboard shortcut.
//    We are now in the FruitRepository and can see all variables in it.
// 5. Using Step Out, step back to where we were.
// 6. Using Step Over, step to the next statement. Note that we are now evaluating statement by statement. Use Step Over again to navigate to the next statement.
// 7. Using Resume, execute to the next breakpoint. Note that we stay in the loop, we want to get out. Disable the breakpoint and Resume.
// 8. We are now at the line of code reading: echo $person->getName() . ", age " .  $person->getAge() . ", likes " . $fruit . "\r\n";.
//    There are two method calls here (getName() and getAge(). Use Smart Step-Into to step only into getAge() and skip getName().
//    The IDE will ask us which statement to step into.
