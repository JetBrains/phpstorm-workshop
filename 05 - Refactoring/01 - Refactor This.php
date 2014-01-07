<?php
/**
 * Refactor This
 *
 * Refactor symbol or code fragment in Project View, Structure Tool Window, Editor or UML Class Diagram.
 *
 * Ctrl+Shift+Alt+T (Windows/Linux)
 * Shift+Alt+Command+T (Mac OS X)
 */

namespace Refactoring1\JetBrains;

// 1. Rename the variable using the Refactor This keyboard shortcut. New name for $name should be $firstName.
//    Note that the IDe can also search in comments / strings.
$name = 'Maarten';

// 2. See that the Rename refactoring hs updated all occurrences of the variables in the current scope.
echo $name . ' was here.'; // review: isn't this $name variable named wrong?

// 3. The Refactor This menu also works on blocks of code. Select the following lines of code and use Refactor This.
//    Apply the Extract method refactoring and name it "reverseString". The $firstName argument can be named $stringToReverse.
$nameBackwards = '';
for ($i = 0; $i < strlen($name); $i++) {
    $nameBackwards = substr($name, $i, 1) . $nameBackwards;
}

// 4. The Extract Method refactoring should not update the below code.
echo 'Name backwards: ' . $nameBackwards;

// 5. From the Project Tool Window, select the current file. Use Refactor This and rename it to "01 - Refactor This - done.php".
//    Do not use te Refactor button, instead use Preview to see which files will be affected by the rename.
//    Note that Code.php will be updated.
//    From the tool window, click Do Refactor to continue the refactoring.