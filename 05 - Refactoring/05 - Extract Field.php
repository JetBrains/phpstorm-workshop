<?php
/**
 * Extract Field
 *
 * Extract an expression into a field.
 *
 * Ctrl+Alt+F (Windows/Linux)
 * Alt+Command+F (Mac OS X)
 */

namespace Refactoring5\JetBrains;

class Greeter {
    public function greet($name) {
        // 1. Extract the string 'Hello' into a field named $_greeting so we are able to customize the greeting.
        //    Use the "Initialize in class constructor" option to generate a constructor.
        //    Make it a protected field..
        return 'Hello' . ', '  . $name;
    }
}