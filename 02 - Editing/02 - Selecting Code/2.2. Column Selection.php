<?php
/**
 * Column Selection.
 *
 * Toggle column selection. Allows editing multiple lines in one go.
 *
 * Alt+Shift+Insert (Windows/Linux)
 * Shift+Command+8 (Mac OS X)
 */

namespace Editing2\JetBrains;

class ColumnSelection {
    // 1. Enable column selection.
    // 2. Draw a rectangle over the $someVariable column.
    // 3. Rename the variable to $foo
    // 2. Disable column selection.
    public function columnSelection() {
        $someVariable = 3;
        $someVariable = 6;
        $someVariable = 9;
        $someVariable = 'a';
        $someVariable = 'b';
        $someVariable = 'c';
    }
}
