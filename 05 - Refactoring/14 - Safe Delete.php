<?php
/**
 * Safe Delete
 *
 * Safely remove code or symbols.
 *
 * Alt+Delete (Windows/Linux)
 * Command+Delete (Mac OS X)
 */

namespace Refactoring14\JetBrains;

require_once 'Code/MoreCode.php';

// 1. Safe Delete the CoolPerson class from the Project Tool Window.
//    Note that it is not safe to delete the file as it is being used elsewhere.
class CoolPerson {
    protected $_name;

    public function __construct($name) {
        $this->_name = $name;
    }
}
