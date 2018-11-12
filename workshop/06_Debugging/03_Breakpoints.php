<?php
/**
 * Breakpoints
 *
 * See breakpoints that are specified and configure additional options.
 *
 * Ctrl+Shift+F8 (Windows/Linux)
 * Shift+Command+F8 (macOS)
 */

namespace Debugging3\JetBrains;

$name = 'Maarten';
$fruits = array('apple', 'pear', 'lemon');
$currentFruit = '';

foreach ($fruits as $fruit) {
    // 1. Add a conditional breakpoint: only break when the $fruit == 'pear'.
    echo $name . " likes " . $fruit . "\r\n";

    // 2. Place a breakpoint on the following line.
    $currentFruit = $fruit;
}


// 3. Use the keyboard shortcut to view all breakpoints.
//    Edit the first breakpoint we have just added and log message to console.
//    Edit the second breakpoint and only break when the first breakpoint in the current file has been hit.
// 4. Use the context menu to debug the current PHP script. This should launch the debugger. The Console will now display
//    a message similar to: Breakpoint reached: line 18 in 03_Breakpoints.php.
// 5. Resuming will break at the second breakpoint which has enabled itself because the first breakpoint has been hit.
//    This is very useful if you want to do very detailed debugging but only when a first condition has been hit first.
