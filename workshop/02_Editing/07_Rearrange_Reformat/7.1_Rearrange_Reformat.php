<?php
/**
 * Reformat Code
 *
 * Ctrl+Alt+L (Windows/Linux)
 * Alt+Command+L (macOS)
 *
 * Reformat all code according to code style and optionally rearrange entries in
 * code according to settings
 *
 * Show Reformat Code Dialog
 *
 * Shift+Ctrl+Alt+L (Windows/Linux)
 * Shift+Alt+Command+L (macOS)
 *
 * Reformat/rearrange code with the dialog to change settings
 */

namespace Editing7\JetBrains;

use Editing2\JetBrains;
use Editing6\JetBrains\Person;

// 1. The class below is a mess.
//    - Public/protected/static members are all mixed
//    - Brackets are inconsistent
//    - Indents are inconsistent
// 2. Use Code | Rearrange Code in the menu to reorganize the class below.
// 3. Use Undo to roll back the Rearrange Code action.
// 4. There are also some unused imports (Editing2\JetBrains and Editing6\JetBrains\Person).
//    Use Code | Optimize Imports from the menu to solve this.
// 5. Use Undo and roll back the Optimize Imports action.
// 6. Using the keyboard shortcut, use Reformat Code to run both Rearrange Code and
//    Optimize Imports in one go (you may need to invoke using Show Reformat
//    Code Dialog)
//    NOTE: Reformat Code can be run on the entire project at once.
// 7. Open the settings and navigate to
//    Editor | Code Style | PHP
//    On the Arrangement tab, modify the settings so that fields are ordered by visibility and then by name.
//    Use Rearrange Code to test the new settings.

class Rearrange
{
    protected $_firstProperty;
    public $_secondProperty;
    public static $_thirdProperty;
    protected $_fourthProperty;

    public function firstFunction()
    {
        for ($i = 0; $i < 10; $i++) {
            echo 'Test';
        }
    }

    public function setFirstProperty($firstProperty)
    {
        $this->_firstProperty = $firstProperty;
    }

    public function getFirstProperty()
    {
        return $this->_firstProperty;
    }

    public function setSecondProperty($secondProperty)
    {
        $this->_secondProperty = $secondProperty;
    }

    public function getSecondProperty()
    {
        return $this->_secondProperty;
    }

    public static function setThirdProperty($thirdProperty)
    {
        self::$_thirdProperty = $thirdProperty;
    }

    public static function getThirdProperty()
    {
        return self::$_thirdProperty;
    }

    public function setFourthProperty($fourthProperty)
    {
        $this->_fourthProperty = $fourthProperty;
    }

    public function getFourthProperty()
    {
        return $this->_fourthProperty;
    }
}
