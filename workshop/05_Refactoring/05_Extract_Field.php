<?php
/**
 * Extract Field
 *
 * Ctrl+Alt+F (Windows/Linux)
 * Alt+Command+F (macOS)
 *
 * Extract an expression into a field.
 */

namespace Refactoring5\JetBrains;

class Greeter
{
    public function greet($name)
    {
        // 1. Extract the string 'Hello' into a field named $greeting so we can customize the greeting.
        //    Make it a protected field.
        // 2. Undo your last edit, and generate a new field with the constructor setting a default value.
        // HINT: Use the "Class Constructor" option to generate a constructor.
        return 'Hello' . ', ' . $name;
    }
}
