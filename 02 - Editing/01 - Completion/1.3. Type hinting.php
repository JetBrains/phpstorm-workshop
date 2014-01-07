<?php
/**
 * Type hinting
 *
 * Hint PhpStorm about the types you are working with.
 */

namespace Editing1\JetBrains;

use Debugging\JetBrains\Person;

$people = array();
$people[] = new Person('Maarten');

foreach ($people as $person) {
    // 1. Autocompletion on $person will not show anything about the Person class.
    //    Type $person-> and see for yourself.

    // $person->

    // 2. We can solve this!
    //    Find the $people = array(); and add a PHPDoc comment: /** @var Person[] */ - this tells PhpStorm the array contains Person objects.
    //
    //    Type $person-> and see for yourself that we now have autocompletion.

    // $person->

    // 3. Place the cursor on $person and hit Ctrl+Q (F1). See quick documentation about the variable.
    // 4. Place the cursor on Person and hit Ctrl+Q (F1). See quick documentation about the type.
}