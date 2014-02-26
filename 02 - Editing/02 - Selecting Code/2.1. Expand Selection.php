<?php
/**
 * Selecting Code
 *
 * Various ways of selecting code.
 *
 * Ctrl+W / Ctrl+Shift+W (Windows/Linux)
 * Alt+Up / Alt+Down (Mac OS X)
 */

namespace Editing2\JetBrains;

use Exception;

class SelectingCode {
    // 1. Place the caret inside the $importantValue variable and expand selection to select it.
    //    Expand again to select complete statement without ;.
    //    Expand again to select complete line.
    //    Expand again to select function body.
    //    Expand again to select entire function.
    //    Expand again to select entire class.
    //    Expand again to select entire namespace.
    //    Expand again to select entire file.
    // 2. Shrink selection to until the extendAndShrinkSelection() function is selected.
    public function extendAndShrinkSelection() {
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

    /** @var string */ public $Name;
    /** @var int */ public $Age;
    public function run() { }
    public function sayHello() { }
    public function sayGoodbye() { }
    public function veryLongFunctionName() { }
}
