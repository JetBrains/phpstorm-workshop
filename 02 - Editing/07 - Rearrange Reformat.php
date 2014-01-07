<?php
/**
 * Rearrange/Reformat Code
 *
 * Rearranges entries in code according to settings. Reformats all code according to code style.
 *
 * Ctrl+Alt+L (Windows/Linux)
 * Command+Alt+L (Mac OS X)
 */

namespace Editing7\JetBrains;

use Editing2;
use Editing6;

// 1. The class below is a mess.
//    - Public/protected/static members are all mixed.
//    - Brackets are inconsistent
//    - Indents are inconsistent
// 2. Use Code | Rearrange Code menu to reorganize the class below.
// 3. Use undo and roll back the Rearrange Code action.
// 4. There are also some unused imports (Editing2 and Editing6). The Code | Optimize Imports menu will solve this.
// 5. Use undo and roll back the Optimize Imports action.
// 6. Using the keyboard shortcut, Reformat Code and run both rearrange as well as optimize imports in one go.
//    Note that if desired, the Reformat Code action can be run on the entire project at once.
// 7. Open the settings and navigate to Project Settings | Code Style | PHP | Arrangement.
//    Modify the settings so fields are ordered by visibility and then by name. Rearrange Code to test the new settings.
class Rearrange {
    protected $_firstProperty;
    public $_secondProperty;
    public static $_thirdProperty;
    protected $_fourthProperty;

    public function firstFunction() {
        for ($i = 0; $i < 10; $i ++)
                    {
            echo 'Test';
        }
    }

    public function setFirstProperty($firstProperty) {
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