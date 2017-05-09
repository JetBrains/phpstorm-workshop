<?php
/**
 * Simple Breakpoints
 *
 * Toggle Line Breakpoint
 *
 * Ctrl+F8 (Windows/Linux)
 * Command+F8 (Mac OS X)
 *
 * Tell the interpreter to pause execution and inspect variables.
 */

namespace Debugging1\JetBrains;

$name = 'Hotblack';

// 1. Place a breakpoint on the following line of code.
$name = 'Desiato';

for ($i = 0; $i < 5; $i++) {
    // 2. Place a breakpoint on the following line of code.
    $name = 'Person ' . $i;
}

// 4. Use the context menu to debug the current PHP script. This should launch the debugger and break on our first breakpoint.
//    We can see the current statement (that is about to be executed) marked.
//    From the Debug Pane below, the $name variable holds 'Hotblack'.
//    HINT: Right click anywhere in this file and select Debug, and the the filename with the PHP icon.
// 5. Resume program by pressing the green icon from the tool window or using F9 (Command+Alt+R on Mac OS X).
// 6. From the tool window below, the $name variable holds 'Desiato'.
//    Also a new variable $i is now available, set to zero.
// 7. Resume debugging using the Play button
// 8. Every time we go through the loop, the variables that have been modified can be inspected.
