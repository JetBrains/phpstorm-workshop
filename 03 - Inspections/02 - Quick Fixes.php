<?php
/**
 * Inspections - Quick Fixes
 *
 * Highlights provide a Quick Fix action to help remove the warning.
 *
 * Alt+Enter (Windows/Linux/Mac OS X)
 */

namespace Inspections2\JetBrains;

class QuickFixes {
    // 1. A warning highlight is shown on the misspelled variable "$mispelled".
    //    Place the caret over the variable and hit Alt+Enter to fix the typo.
    public function spelling() {
        $mispelled = true;
    }

    // 2. A warning highlight should be shown in the following function because the class Person is unknown.
    //    Place the caret over Person and hit Alt+Enter. We can now import the class.
    public function importClass() {
        $person = new Person();
    }

    // 3. An undefined variable $this->_variable is used.
    //    Place the caret over "_variable" and hit Alt+Enter. We can now generate the field on our class.
    public function undefinedVariable() {
        $this->_variable = 'test';
    }
}