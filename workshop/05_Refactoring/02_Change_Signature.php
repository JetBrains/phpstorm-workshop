<?php
/**
 * Change Signature
 *
 * Ctrl+F6 (Windows/Linux)
 * Command+F6 (macOS)
 *
 * You can use this refactoring to:
 *  - Change the function name
 *  - Add new parameters and remove existing ones
 *  - Assign default values to the parameters
 *  - Reorder parameters
 *  - Change parameter names
 *  - Propagate new parameters through the function call hierarchy
 */

namespace Refactoring2\JetBrains;

// 1. Change the function name to "add" using the Change Signature refactoring.
function addTwoNumbers($a, $b)
{
    return $a + $b;
}

// 2. Note that the affected code is updated as well.
$four = addTwoNumbers(2, 2);

// 3. Change the function signature of sayHello: rename the $name parameter to $firstName add a $lastName parameter.
//    Specify a default value for the $lastName variable, we want our code to parse.
//    E.g. use '' to set an empty string everywhere sayHello is called.
//
//    We can also propagate parameters. The usingSayHello() below uses $name as well, we may want to propagate
//    the new $lastName variable (update the variable names and parameters used where the function is called).
//    In the refactor window, use the Propagate Parameters toolbar button.
//
//    Preview the refactoring and apply it when satisfied.
function sayHello($name)
{
    // 4. Uncomment the following line:
    // $name = $firstName . ' ' . $lastName;
    return "Hello, $name";
}

sayHello('Marvin');


class UsingSayHelloClass
{
    // 5. After the previous refactoring, reorder the $firstName and $lastName parameters using Change Signature.
    // 6. Change Signature and specify a default value for the $firstName variable, e.g. ''.
    //    Important: Do not put this in the Default Value column: that column is used to update all calls to the function.
    //               Instead, rename $firstName to $firstName = ''.
    //
    //    Preview the refactoring and apply it when satisfied.
    public static function usingSayHello($name)
    {
        sayHello($name);
    }
}

UsingSayHelloClass::usingSayHello('Marvin');
