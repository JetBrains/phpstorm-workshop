<?php
/**
 * Import Completion
 *
 * Basic code completion when using classes or functions from other namespaces.
 * Automatically adds import when selected.
 *
 * Ctrl+Space (Windows/Linux/Mac OS X)
 *
 * Ctrl+Shift+Enter to complete statement (Windows/Linux)
 * Shift+Command+Enter to complete statement (Mac OS X)
 */

namespace Editing1\JetBrains;

// 1. Make the class implement ICustomer. Using import completion will add:
//       use Navigation4\JetBrains\Customers\ICustomer;

class ImportCompletion
    implements // ICustomer {
}
