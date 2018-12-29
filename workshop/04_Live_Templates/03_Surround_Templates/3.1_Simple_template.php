<?php
/**
 * Creating Live Templates - Surround Template
 *
 * Surround With
 *
 * Ctrl+Alt+T (Windows/Linux)
 * Alt+Command+T (macOS)
 *
 * Surround With Live Template
 *
 * Ctrl+Alt+J (Windows/Linux)
 * Alt+Command+J (macOS)
 *
 * Surround code with a template. A template is only seen as a surround template when the $SELECTION$ variable is defined.
 *
 * NOTE: On Ubuntu, Ctrl+Alt+T is overwritten by a system shortcut - you may need to rebind these keys to use the shortcuts.
 */

namespace LiveTemplates3\JetBrains;

/*
1. Open the the Setting Pane then Editor | Live Templates and add a new live template.
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
   HINT: You can set the default to "Exception" (including quotes) if you want a default exception set.
   Default value for VARIABLENAME can be set to "exception" (including quotes).

   Save the live template.

2. Test the newly created live template. Select the line of code below and use Surround With Live Template.
*/

echo "This will throw an exception";
