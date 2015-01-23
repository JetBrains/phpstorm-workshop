<?php
/**
 * Intentions
 *
 * Let the IDE figure out possible actions from context and execute them.
 *
 * Alt+Enter (Windows/Linux/Mac OS X)
 */

namespace Editing5\JetBrains;

class Intentions {
    // 1. Flip '==' intention. Place the cursor over "$variable" inside the if statement and hit Alt+Enter.
    //    We can now flip $variable == true and make it read true == $variable.
    public function flipIntention() {
        $variable = true;
        if ($variable == true) {

        }
        echo 'This may be throwing an Exception. Riiiight!';
    }

    // 2. Create File intention. Place the caret on "nonexistingfile.php" and hit Alt+Enter.
    //    We can now generate the file.
    public function createFileIntention($items) {
        include 'nonexistingfile.php';
    }

    // 3. Simplify Boolean Expression Intention. Place the caret over the last statement in the function.
    //    Hit Alt+Enter and let the IDE simplify the statement.
    public function simplifyIntention() {
        $a = 0;
        $b = 1;
        echo !($a && !$b);
    }
}