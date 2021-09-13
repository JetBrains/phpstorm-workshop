<?php
/**
 * Basic Completion
 *
 * Ctrl+Space (Windows/Linux/macOS)
 *
 * Ctrl+Shift+Enter to complete statement (Windows/Linux)
 * Shift+Command+Enter to complete statement (macOS)
 *
 * Basic (code) completion for the name of any class, method or variable.
 */

namespace Editing1\JetBrains;

class BasicCompletion
{
    /** @var string */
    public $Name;

    /** @var int */
    public $Age;

    public function basicCompletion()
    {
        // 1. Type: $this->
        //    Use Basic Completion.
        //    Basic completion shows the code completion options for the current
        //    context.
        //    Members of the current type are shown in bold.
        //    Use Basic Completion a second time to see more variants.
        //    Select $this->Name using space, tab or enter accept the choice.
        // $this->


        // 2. Type: $value =
        //    Use Basic Completion (after the equals sign).
        //    Completion shows locally scoped options followed by the wider
        //    scope of items.
        //    The most frequently used item is usually pre-selected e.g. $this->Age
        //    might be at the top as it's the most used.
        //    Dismiss the window with Esc.
        // $value =


        // 3. Type: $this->r
        //    Complete the statement using the Complete Statement.
        // $this->r
        $this->run();

        // 7. Type: if (true
        //    Complete the statement using Complete Statement.
        // if (true


        // 8. Place the caret right after "say". Use basic completion and replace
        //     the sayHello() method with sayGoodbye().
        //     NOTE: Tab replaces the statement, enter prepends the statement.
        $this->sayHello();


        // 9. Use CamelHumps to invoke veryLongFunctionName().
        //    Type: $this->
        //    Type "vlfn" to find the correct function.
        // $this->

        // 10. Try path completion. Include the "Code/01_Basic_Include.php" file
        //     by placing the caret after Code/ and using basic completion.
        require_once 'Code/';


    }

    public function sayHello()
    {
    }

    public function run()
    {
    }

    public function sayGoodbye()
    {
    }

    public function veryLongFunctionName()
    {
    }
}
