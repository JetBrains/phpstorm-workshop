<?php
/**
 * Inspections - Gutter and Lens
 *
 * Right gutter displays error information. Use Lens mode for preview
 */

namespace Inspections4\JetBrains;

// 1. On the right-hand side, find the error gutter.
// 2. Hover over the red (!) at the top and get a summary of the code quality in the file.
// 3. Hover over a small stripe to see the warning/error information.
// 4. Hover over a small stripe to see lens mode (only when the code in which the issue occurs is not in viewport).

class Navigation
{
    public function errorFunction()
    {
        echo 'First line'
        echo 'Second line';
    }

    public function warningFunction1()
    {
        $variable = true;
        foreach ($variable as $item) {

        }
    }

    public function warningFunction2()
    {
        $variable = 1;
        if ($variable = 2) {

        }
    }

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

    public function deadCodeFunction1()
    {
        $variable = true;
    }

    public function deadCodeFunction2()
    {
        return true;

        if (true) {
            return false;
        }
    }

    public function spelling()
    {
        $mispelled = true;
    }
}
