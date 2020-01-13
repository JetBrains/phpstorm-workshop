<?php
/**
 * Exception Breakpoints
 *
 * Break when error, warning, notice or Exception occurs.
 * Note: only works with Xdebug.
 *
 * Ctrl+Shift+F8 (Windows/Linux)
 * Shift+Command+F8 (macOS)
 */

namespace Debugging4\JetBrains;
use Exception;

// 1. Use the keyboard shortcut to view all breakpoints.
// 2. Add a new PHP Exception Breakpoint, set it to trigger on Notice.
// 3. Add a new PHP Exception Breakpoint, set it to trigger on Warning.
// 4. Add a new PHP Exception Breakpoint, set it to trigger on Exception.
// 5. Use the context menu to debug the current PHP script. This should launch the debugger.

// 6. Even with no breakpoint specified, the following should break because we are executing a division by zero, triggering a PHP Warning.
//    Hover over the breakpoint to see the error type (Warning).
//    Using the Watches pane, add a watch for the error_get_last() function. Expanding it will display the message of the warning (Division by zero).

$result = 100 / 0;

// 7. Even with no breakpoint specified, the following should break because we are encountering an Exception.
//    Hover over the breakpoint to see the error type (Exception).
throw new Exception('This is bad...');

// 8. A good practice with Xdebug is to always add Exception Breakpoints so you are made aware of an error/Exception during debugging.
