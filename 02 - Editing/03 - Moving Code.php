<?php
/**
 * Moving Code
 *
 * Move code or entire statement up/down.
 *
 * Move line up/down:
 * Shift+Alt+Up / Down (Windows/Linux/Mac OS X)
 *
 * Move statement up/down:
 * Shift+Ctrl+Up / Down (Windows/Linux)
 * Shift+Command+Up / Down (Mac OS X)
 */

namespace Editing3\JetBrains;

class MovingCode {
    // 1. Order the lines using move line up / down.
    public function moveLine() {
        $numberFive = 5;
        $numberOne = 1;
        $numberThree = 3;
        $numberTwo = 2;
        $numberFour = 4;
    }

    // 2. Order the if statements using move statement up / down.
    public function moveStatement() {
        if (2 == 2) {
            // ...
            echo 'Number two';
        }
        if (1 == 1) {
            // ...
            echo 'Number one';
        }
        if (3 == 3) {
            // ...
            echo 'Number three';
        }
    }
}
