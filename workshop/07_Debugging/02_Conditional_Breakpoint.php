<?php
/**
 * Conditional Breakpoints
 *
 * Tell the interpreter to pause execution and inspect variables, only when a specific condition is true.
 *
 * Ctrl+Shift+F8 (Windows/Linux)
 * Shift+Command+F8 (macOS)
 */

namespace Debugging2\JetBrains;

$output = array();
for ($i = 0; $i < 5000; $i++) {
    // 1. Place a breakpoint on the following line of code.
    // 2. Use the context menu on the breakpoint or use the keyboard shortcut, set the condition to: $i == 4355.
    $output[] = 'Person ' . $i;
}

// 3. Use the context menu to debug the current PHP script. This should launch the debugger.
// 4. Our breakpoint is only hit when the $i variable equals 4355. With a regular breakpoint,
//    we would have had to Resume the program +4000 times before we could check what happens when $i is a specific value.
//    Conditional breakpoints are useful to test for specific values and only pause execution when these values are active.
