<?php
/**
 * Inspections - Highlights
 *
 * In-editor highlighting of code issues.
 */

namespace Inspections1\JetBrains;

class Highlights {
    // 1. An error highlight should be shown in the following function (missing semicolon).
    public function errorFunction() {
        echo 'First line'
        echo 'Second line';
    }

    // 2. A warning highlight should be shown in the following function (foreach over boolean?).
    public function warningFunction1() {
        $variable = true;
        foreach ($variable as $item) {

        }
    }

    // 3. Use the settings (project settings | inspections | PHP) and enable the "Assignment in condition" inspection.
    //    This will warn us that we have missed an = in the if statement below.
    public function warningFunction2() {
        $variable = 1;
        if ($variable = 2) {

        }
    }

    // 4. A warning highlight should be shown in the following function (missing break statement) - this is actually a suggestion.
    public function warningFunction3() {
        $variable = 1;
        switch ($variable) {
            case 1:
                echo 'Number one';
            case 2:
                echo 'Number two';
        }
    }

    // 5. Dead code (unused variable).
    public function deadCodeFunction1() {
        $variable = true;
    }

    // 6. Dead code (unreachable statement).
    public function deadCodeFunction2() {
        return true;

        if (true) {
            return false;
        }
    }

    // 7. A warning highlight is shown on the misspelled variable "$mispelled".
    //    Suppress the inspection for this statement only.
    public function spelling() {
        $mispelled = true;
    }
}
