<?php
/**
 * Inspections - Highlights
 *
 * In-editor highlighting of code issues.
 *
 * NOTE: Inspections are the way that PhpStorm tells you, the developer, what's
 * going on with your code.
 */

namespace Inspections1\JetBrains;

class Highlights
{
    // 1. An error highlight should be shown in the following function (missing semicolon).
    public function errorFunction()
    {
        echo 'First line'
        echo 'Second line';
    }

    // 2. A warning highlight should be shown in the following function (foreach over boolean?).
    public function warningFunction1()
    {
        $variable = true;
        foreach ($variable as $item) {

        }
    }

    // 3. Use the settings (Editor | Inspections | PHP | Probable bugs) and enable the "Assignment in condition" inspection.
    //    This will warn us that we have missed an = in the if statement below.
    // HINT: You can access the settings using Ctrl+Alt+S (Windows/Linux) Command+, (macOS)
    public function warningFunction2()
    {
        $variable = 1;
        if ($variable = 2) {

        }
    }

    // 4. A warning highlight should be shown in the following function (missing break statement) - this is actually a
    //    suggestion.
    public function warningFunction3()
    {
        $variable = 1;
        switch ($variable) {
            case 1:
                echo 'Number one';
            case 2:
                echo 'Number two';
        }
    }

    // 5. Dead code (unused variable).
    public function deadCodeFunction1()
    {
        $variable = true;
    }

    // 6. Dead code (unreachable statement).
    public function deadCodeFunction2()
    {
        return true;

        if (true) {
            return false;
        }
    }

    // 7. A warning highlight is shown on the misspelled variable "$mispelled".
    //    Suppress the inspection for this statement only using Show Intention Actions |  Typo rename to...
    //         | Suppress for statement
    public function spelling()
    {
        $mispelled = true;
    }
}
