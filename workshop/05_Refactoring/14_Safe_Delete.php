<?php
/**
 * Safe Delete
 *
 * Alt+Delete (Windows/Linux)
 * Command+Delete (macOS)
 *
 * Safely remove code or symbols.
 */

namespace Refactoring14\JetBrains;

require_once 'Code/MoreCode.php';

// 1. Safe Delete the `14_Safe_Delete.php` file from the Project Pane.
//    Note that it is not safe to delete the file as it is being used elsewhere.
class CoolPerson
{
    protected $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }
}
