<?php
/**
 * Navigate to Last Edit Location.
 *
 * Ctrl+Shift+Backspace (Windows/Linux)
 * Shift+Command+Delete (macOS)
 *
 * Navigate back to where code was last edited.
 */

namespace Navigation3\JetBrains;

class NavigateRecent
{
    public function startingPoint()
    {
        // 1. Navigate to step1().
        $this->step1();
    }

    public function step1()
    {
        // 2. Uncomment the following line.
        //echo 'In step 1.';

        // 3. Navigate to step2().
        $this->step2();
    }

    public function step2()
    {
        // 4. Navigate back to where we last edited using Last Edit Location.
    }
}