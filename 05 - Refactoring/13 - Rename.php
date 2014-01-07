<?php
/**
 * Rename
 *
 * Allow you to rename symbols, automatically correcting all references in the code.
 *
 * Shift+F6 (Windows/Linux/Mac OS X)
 */

namespace Refactoring13\JetBrains;

// 1. Rename the Person class to Customer. Note that all usages will be updated.
//    Also search in comments so that these are updated too.
class Person {
    // ...

    // 2. Rename the sayHello() function to sayGoodbye()
    public function sayHello() {
        return 'Hello!';
    }

    // 3. Rename the $name parameter to $string. Note that the PHPDoc block is updated as well.
    /**
     * @param $name string Name of the person.
     */
    public function greet($name) {

    }
}

$person = new Person(); // creates a new Person
$person->sayHello();

// 4. Rename the current file to "13 - Rename - done.php". Note that all usages of the file will be updated.