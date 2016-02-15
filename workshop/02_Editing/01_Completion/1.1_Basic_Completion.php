<?php
/**
 * Basic Code Completion
 *
 * Basic code completion for the name of any class, method or variable.
 *
 * Ctrl+Space (Windows/Linux/Mac OS X)
 *
 * Ctrl+Shift+Enter to complete statement (Windows/Linux)
 * Shift+Command+Enter to complete statement (Mac OS X)
 */

namespace Editing1\JetBrains;

class BasicCompletion {
    // 1. Type: $this->
    //    Basic completion shows the code completion options for the current context.
    //    Members of the current type are shown in bold.
    //    Use the Basic Completion keyboard shortcut a second time to see more variants.
    // 2. Type: $value =
    //    Use the Basic Completion keyboard shortcut. After the equals sign, Basic Completion shows the locally scoped
    //      Basic completion options followed by the wider scope of Basic Completion items.
    // 3. The most frequently used item is usually pre-selected e.g. $this->Age might be the most used.
    // 4. Dismiss the window with Esc.
    // 5. Space, tab and enter accept the choice.
    // 6. Type: $this->r
    //    Complete the statement using the keyboard shortcut.
    // 7. Type: if (true
    //    Complete the statement using the keyboard shortcut.
    public function basicCompletion() {
        // $this->

        // $value =

        // if (true

        // 8. Place the caret right after "say". Use basic completion and select sayGoodbye().
        //    Tab replaces the statement, enter prepends the statement.
        $this->sayHello();

        // 9. Use CamelHumps to invoke veryLongFunctionName().
        //    Type: $this->
        //    Use "vlfn" to find the correct function.
        // $this->

        // 10. Try path completion. Include the "01_Simple Breakpoint.php" file by placing the caret inside the quotes
        //     and use he keyboard shortcut.
        require_once '';
    }

    /** @var string */ public $Name;
    /** @var int */ public $Age;
    public function run() { }
    public function sayHello() { }
    public function sayGoodbye() { }
    public function veryLongFunctionName() { }
}
