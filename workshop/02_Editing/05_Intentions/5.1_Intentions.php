<?php
/**
 * Intentions
 *
 * Show Intention Actions (aka Quickfixes)
 *
 * Alt+Enter (Windows/Linux/macOS)
 *
 * Let the IDE figure out possible actions from context and execute them
 */

namespace Editing5\JetBrains;

class Intentions
{
    // 1. Flip '===' intention. Place the cursor over `$variable` inside the if
    //    statement invoke Show Intention Actions (also known as Quickfixes).
    //    We can now flip `$variable === true` and make it read `true === $variable`.

    public function flipIntention()
    {
        $variable = true;
        if ($variable === true) {

        }
        echo 'This may be throwing an Exception. Riiiight!';
    }

    // 2. Create File intention. Place the caret on `nonexistingfile.php` and
    //    invoke Quickfixes.
    //    Generate the file using the Create File intention.
    public function createFileIntention($items)
    {
        include 'nonexistingfile.php';
    }

    // 3. Simplify Boolean Expression Intention. Place the caret over the last statement in the function.
    //    Use the intention to IDE simplify the statement.
    public function simplifyIntention()
    {
        $a = 0;
        $b = 1;
        echo !($a && !$b);
    }
}
