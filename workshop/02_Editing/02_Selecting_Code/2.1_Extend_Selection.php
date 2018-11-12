<?php
/**
 * Extend and Shrink Selection
 *
 * Ctrl+W / Ctrl+Shift+W (Windows/Linux)
 * Alt+Up / Alt+Down (macOS)
 *
 * Extend (or Shrink) the selection to the next logical boundary
 */

namespace Editing2\JetBrains;

use Exception;

class SelectingCode
{
    // 1. Place the caret inside the $importantValue variable and Extend Selection to select it.
    //    Extend again to select the complete statement without ;
    //    Extend again to select the complete statement with the ;
    //    Extend again to select the complete line
    //    Extend again to select the function body
    //    Extend again to select the entire function
    //    Extend again to select the entire class
    //    Extend again to select the entire namespace
    //    Extend again to select the entire file
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
