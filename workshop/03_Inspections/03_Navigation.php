<?php
/**
 * Inspections - Navigate to Next Highlighted Error
 *
 * F2 / Shift+F2 (Windows/Linux/macOS)
 *
 * Navigate back and forth between code errors.
 */

namespace Inspections3\JetBrains;

// 1. Using the keyboard shortcut, navigate back and forth between errors.

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
        foreach ($variable ask $item) {

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
        $variable = 1
        switch ($variable) {
            case 1:
                echo 'Number one';
            case 2:
                echo 'Number two';
        }
    }

    public function deadCodeFunction1()
    {
        $variable = true; {
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
