<?php
/**
 * Creating Simple Live Templates
 */

namespace LiveTemplates2\JetBrains;

/*
1. Open the Setting Pane then Editor | Live Templates and add a new live template.
   HINT: Click the [+] icon in the right hand side of the live template list
   Name the live template "cls".

   Set the template text to:

class $CLASS_NAME$ {
    $END$
}

   Set the context for the live template to be available in PHP.
   Reformat according to style should be enabled.
   Save the live template.

2. Test the newly created live template using "cls".
   The $CLASS_NAME$ variable is a hotspot.
   The $END$ variable is a special marker telling the IDE where to locate the cursor after expanding the template.
*/

// cls <TAB>
