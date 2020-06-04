<?php
/**
 * Refactor This
 *
 * Ctrl+Shift+Alt+T (Windows/Linux)
 * Ctrl+T (macOS)
 *
 * Refactor symbol or code fragment in Project View, Structure Tool Window, Editor or UML Class Diagram.
 */

namespace Refactoring1\JetBrains;

// 1. Rename the $name variable using the Refactor This keyboard shortcut. New name for $name should be $firstName.
//    Notice that the IDE can also search in comments / strings.
$name = 'Zaphod';

// 2. See that the Rename refactoring has updated all occurrences of the variables in the current scope.
echo $name . ' was here.';

// 3. The Refactor This menu also works on blocks of code. Select the following 4 lines of code and use Refactor This.
//    Apply the Extract Method... refactoring and name it "reverseString". The $firstName argument can be named $stringToReverse.
$nameBackwards = '';
for ($i = 0; $i < strlen($name); $i++) {
    $nameBackwards = substr($name, $i, 1) . $nameBackwards;
}

// 4. The Extract Method refactoring should not update the below code.
echo 'Name backwards: ' . $nameBackwards;

// 5. From the Project Tool Pane, select the current file. Use Refactor This and rename it to "01_Refactor_This_done.php".
//    Do not use te Refactor button, instead use Preview to see which files will be affected by the rename.
//    Notice that Code.php will be updated, and also the file name in this comment block in exercise 03_Copy_Clone
//    From the tool window, click Do Refactor to continue the refactoring.
