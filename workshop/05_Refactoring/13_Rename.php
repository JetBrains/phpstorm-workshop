<?php
/**
 * Rename
 *
 * Shift+F6 (Windows/Linux/macOS)
 *
 * Rename symbols, automatically correcting all references in the code.
 */

namespace Refactoring13\JetBrains;

// 1. Rename the Person class to Customer by using Rename and then over-typing. Notice that all usages will be updated.
// 2. Undo the last rename, then rename the Person class using Rename refactor.
//    Use Shift+F6 again when over-typing to enable the advanced dialog, enable the Search in comments and strings.
//    option and perform the rename - notice how the preview box shows the comments can be updated.
class Person
{
    // ...

    // 3. Rename the sayHello() function to sayGoodbye().
    public function sayHello()
    {
        return 'Hello!';
    }

    // 4. Rename the $name parameter to $string. Note that the PHPDoc block is updated as well.
    /**
     * @param string $name Name of the person.
     */
    public function greet($name)
    {

    }
}

$person = new Person(); // creates a new Person
$person->sayHello();

// 5. Rename the current file to "13_Rename_done.php". Note that all usages of the file will be updated.
