<?php
/**
 * Inspections - Quickfixes
 *
 * Alt+Enter (Windows/Linux/macOS)
 *
 * Highlights provide a Quick Fix action to help remove the warning
 */

namespace Inspections2\JetBrains;

class QuickFixes
{
    // 1. A warning highlight is shown on the misspelled variable `$mispelled`.
    //    Place the caret over the variable and use Quickfix to fix the typo.
    // HINT: Select the default Typo: Rename to... using Enter then select the change using Enter again.
    public function spelling()
    {
        $mispelled = true;
    }

    // 2. A warning highlight should be shown in the following function because the class Person is unknown.
    //    Place the caret over Person and use Quickfix to import the class.
    public function importClass()
    {
        $person = new Person();
    }

    // 3. An undefined variable $this->_variable is used.
    //    Place the caret over "_variable" and use the Quickfix to generate the field for our class.
    public function undefinedVariable()
    {
        $this->_variable = 'test';
    }
}
