<?php
/**
 * Creating Live Templates
 */

namespace LiveTemplates2\JetBrains;

/*
1. Open the IDE settings | Live Templates and add a new live template.
   Name the live template "prop".

   Set the template text to the code found in AdvancedTemplate.txt. Note the variables used (And $$ is used to escape PHP's $ sign).

   Set the context for the live template to be available in PHP.
   Reformat according to style should be enabled.

   Click the Edit Variables button. We can specify default values or expressions for our template hotspots.
   Set the expression for PROPERTY_NAME to: capitalize(FIELD_NAME).
   This will automatically populate the PROPERTY_NAME variable with the contents of FIELD_NAME.

   Other templates can be used, for example the current user name, date, time. We can also trigger autocompletion.

   Save the live template.

2. Test the newly created live template using "prop".
   The $CLASS_NAME$ variable is a hotspot.
   The $END$ variable is a special marker telling the IDE where to locate the cursor after expanding the template.
*/

class LiveTemplates {

    // prop <TAB>

}
