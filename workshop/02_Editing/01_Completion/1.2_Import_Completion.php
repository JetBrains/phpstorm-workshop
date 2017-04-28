<?php
/**
 * Basic Completion With Import
 *
 * Ctrl+Space (Windows/Linux/Mac OS X)
 *
 * Ctrl+Shift+Enter to complete statement (Windows/Linux)
 * Shift+Command+Enter to complete statement (Mac OS X)
 *
 * When you use basic completion with classes or functions from outside this
 * namespace, the `use` statements are added automatically.
 */

namespace Editing1\JetBrains;

// 1. Make the class implement ICustomer (place the caret after implements)
//     Using basic completion will add
//         `use Navigation4\JetBrains\Customers\ICustomer;`

class ImportCompletion implements
{
}
