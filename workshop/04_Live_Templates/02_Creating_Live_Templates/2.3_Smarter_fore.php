<?php
/**
 * Creating Live Templates
 */

namespace LiveTemplates2\JetBrains;

/*
1. Open the the Setting Pane then Editor | Live Templates and add a new live template.
   Name the live template "fe" - we will mimic the fore template but make it smarter.

   Set the template text to:

foreach ($ITEMS$ as $ITEM$) {
    $END$
}

   Set the context for the live template to be available in PHP.
   Reformat according to style should be enabled.

   Click the Edit Variables button. We can specify default values or expressions for our template hotspots.
   Set the expression for ITEMS to: complete().
   Set the default for ITEM to "$item" (including quotes).

   Save the live template.

2. Test the newly created live template below. Notice how we are making use of the IDE's autocompletion features to make
       the template smarter.
*/

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

// fe <TAB>
