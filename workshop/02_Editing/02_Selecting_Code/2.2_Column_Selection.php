<?php
/**
 * Column Selection Mode
 *
 * Alt+Shift+Insert (Windows/Linux)
 * Shift+Command+8 (Mac OS X)
 *
 * Toggle column selection (allows editing multiple lines in one go)
 */

namespace Editing2\JetBrains;

class ColumnSelection
{
    // 1. Enable Column selection Mode.
    // 2. Draw a rectangle over the $someVariable column.
    // 3. Rename the variable to $foo.
    // 2. Disable Column Selection Mode.
    
    public function columnSelection()
    {
        $someVariable = 3;
        $someVariable = 6;
        $someVariable = 9;
        $someVariable = 'a';
        $someVariable = 'b';
        $someVariable = 'c';
    }
}
