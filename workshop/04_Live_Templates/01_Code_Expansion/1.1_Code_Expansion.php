<?php
/**
 * Code Expansion
 *
 * Tab (Windows/Linux/macOS)
 *
 * Expand text shortcut using template.
 * Expands into code with variable “hotspots”.
 * Hotspot can be linked to a macro, such as “suggest type of variable”, “suggest name for variable”, “clipboard content”,
 *     “new GUID”, etc.
 * Tab to move to next hotspot.
 * Template can define end point for caret.
 */

namespace LiveTemplates1\JetBrains;

// 1. Open the Setting Pane then Editor | Live Templates and inspect the various live templates available.
//    We can see the available live templates here or create our own.
// HINT: Notice how we have different live templates depending on the type of file we are editing

class CodeExpansion
{
    // 2. Create a protected function firstFunction().
    //    Type prof and press TAB. Enter firstFunction in the first hotspot and press TAB again.
    //    We could accept arguments or choose to have none. Press TAB again to move the caret to the function body.

    // prof <TAB>

    // 3. Create a public static function staticFunction1() by using the pubsf live template.

    // pubsf <TAB>

    protected function secondFunction()
    {
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

        // 4. Loop over the $numbers array. Type "fore" and press TAB.
        //    In the first hotspot, enter $numbers and press TAB again.
        //    In the second hotspot, accept the default variable name and press TAB to move to the loop body.

        // fore <TAB>

    }
}
