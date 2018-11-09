<?php


namespace LiveTemplates2\JetBrains;

/*
1. Open Settings/Preferences | Editor | General | Postfix Completion.

2. Click [+] and select PHP to add a new postfix template.

   Name the live template "ake".

   Set the template text to:

    array_key_exists($EXPR$, $END$);

   The $EXPR$ variable denotes the expression to transform; $END$ indicates where to place the caret after applying the template.

3. Save the live template.

4. Test the newly created live template below.
*/

$MyArray = array('first' => 1, 'second' => 2);

var $key = '';

//$key . 'first'.ake <TAB>

/*
 * Notice that PhpStorm detects two expressions for the template and prompts to choose one.
 * You can enable *Apply to the topmost expression* when creating a template to have the topmost applicable expression selected automatically.
 * */