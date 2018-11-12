<?php
/**
 * Extract Parameter
 *
 * Ctrl+Alt+P (Windows/Linux)
 * Alt+Command+P (macOS)
 *
 * Add a new parameter to a function declaration. Determine the default. Can generate PHPDoc.
 */


function greet($name)
{
    // 1. Extract the 'Hello' string into a parameter called "greeting".
//    Notice that we can select which expression to extract.
//    PhpStorm will automatically generate PHPDoc for the function.
    return 'Hello' . ', ' . $name;
}