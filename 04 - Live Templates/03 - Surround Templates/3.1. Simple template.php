<?php
/**
 * Creating Live Templates - Surround template
 *
 * Surround code with a template. A template is only seen as a surround template when the $SELECTION$ variabel is defined.
 *
 * Ctrl+Alt+T or Ctrl+Alt+J (Windows/Linux)
 * Alt+Command+T or Alt+Command+J (Mac OS X)
 */

namespace LiveTemplates3\JetBrains;

/*
1. Open the IDE settings | Live Templates and add a new live template.
   Name the live template "trycatch".

   Set the template text to:

try {
    $SELECTION$
} catch ($TYPE$ $$$VARIABLENAME$) {
    $END$
}

   Set the context for the live template to be available in PHP.
   Reformat according to style should be enabled.

   In the variables dialog, reorder the variables so TYPE is first. Set its expression to complete().
   Default value for VARIABLENAME can be set to "exception" (including quotes).

   Save the live template.

2. Test the newly created live template. Select the line of code below and hit the keyboard shortcut.
*/

echo "This will throw an exception";
