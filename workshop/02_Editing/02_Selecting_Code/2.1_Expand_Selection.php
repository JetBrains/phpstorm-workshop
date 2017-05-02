<?php
/**
 * Expand and Shrink Selection
 *
 * Ctrl+W / Ctrl+Shift+W (Windows/Linux)
 * Alt+Up / Alt+Down (Mac OS X)
 *
 * Expand (or Shrink) the selection to the next logical boundary
 */

namespace Editing2\JetBrains;

use Exception;

class SelectingCode
{
    // 1. Place the caret inside the $importantValue variable and Expand Selection to select it.
    //    Expand again to select the complete statement without ;
    //    Expand again to select the complete statement with the ;
    //    Expand again to select the complete line
    //    Expand again to select the function body
    //    Expand again to select the entire function
    //    Expand again to select the entire class
    //    Expand again to select the entire namespace
    //    Expand again to select the entire file
    // 2. Shrink Selection until the entire extendAndShrinkSelection() function is selected.

    /** @var string */
    public $Name;
    /** @var int */
    public $Age;

    public function extendAndShrinkSelection()
    {
        $importantValue = 32;
        if ($importantValue > 42) {
            try {
                echo 'More important than 42?';
            } catch (Exception $ex) {
                // 3. Place the cursor on the $ex variable. Play with extend/shrink selection.
                echo $ex->getMessage();
            }
        }
    }

    public function run()
    {
    }

    public function sayHello()
    {
    }

    public function sayGoodbye()
    {
    }

    public function veryLongFunctionName()
    {
    }
}
