<?php
/**
 * Simple Breakpoints
 *
 * Tell the interpreter to pause execution and inspect variables.
 *
 * Ctrl+F8 (Windows/Linux)
 * Command+F8 (macOS)
 */

namespace Debugging1\JetBrains;

$name = 'Maarten';
// 0. PhpStorm has already preconfigured "PHP 7.1 with XDebug" interpreter with enabled XDebug. Please make sure it's
// selected in Settings|PHP|CLI Interpreter.
// 1. Place a breakpoint on the following line of code.
$name = 'Mikhail';

for ($i = 0; $i < 5; $i++) {
    // 2. Place a breakpoint on the following line of code.
    $name = 'Person ' . $i;
}

// 4. Use the context menu to debug the current PHP script. This should launch the debugger and break on our first breakpoint.
//    We can see the current statement (that is about to be executed) marked.
//    From the tool window below, the $name variable holds 'Maarten'.
// 5. Resume program by pressing the green icon from the tool window or using F9 (Command+Alt+R on macOS).
// 6. From the tool window below, the $name variable holds 'Mikhail'.
//    Also a new variable $i is now available, set to zero.
// 7. Resume debugging.
// 8. Every time we go through the loop, the variables that have been modified can be inspected.
