<?php
/**
 * Code Expansion
 *
 * Expand text shortcut using template.
 * Expands into code with variable “hotspots”
 * Hotspot can be linked to a macro, such as “suggest type of variable”, “suggest name for variable”, “clipboard content”, “new GUID”, etc.
 * Tab to move between hotspots.
 * Template can define end point for caret.
 *
 * Tab (Windows/Linux/Mac OS X)
 */

namespace LiveTemplates1\JetBrains;

// 1. Open the IDE settings | Live Templates and inspect the various live templates available.
//    We can see the available live templates here or create our own.
class CodeExpansion {
    // 2. Create a protected function firstFunction().
    //    Type prof and hit TAB. Enter firstFunction in teh first hotspot and hit TAB again.
    //    We could accept arguments or choose to have none. Hit TAB again to move the caret to the function body.

    // prof <TAB>

    // 3. Create a public static function staticFunction1() by using the pubsf live template.

    // pubsf <TAB>

    protected function secondFunction(){
        $numbers = array(1,2,3,4,5,6,7,8,9);

        // 4. Loop over the $numbers array. Type "fore" and hit TAB.
        //    In the first hotspot, enter $numbers and hit TAB again.
        //    In the second hotspot, enter a variable name and hit TAB to move to the loop body.

        // fore <TAB>
    }
}