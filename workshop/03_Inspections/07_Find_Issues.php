<?php
/**
 * Inspections - Find Issues
 *
 * Quickfix menu that allows finding all similar issues
 */

namespace Inspections6\JetBrains;

class FindIssues
{
    // 1. A warning highlight should be shown in the following function (foreach over boolean?).
    //    Use Quickfix (Alt+Enter) and run the inspection on the whole project.
    //    See a new tool window opens and displays similar errors throughout the project.
    // HINT: Use the right arrow on the Inspection Options menu (top item) and then select Run Inspection on...

    public function warningFunction()
    {
        $variable = true;
        foreach ($variable as $item) {

        }
    }

    // 2. Dead code (unused variable). Run the inspection on Open Files.

    public function deadCodeFunction()
    {
        $variable = true;
    }
}
