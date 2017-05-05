<?php
/**
 * Inline
 *
 * Ctrl+Alt+N (Windows/Linux)
 * Alt+Command+N (Mac OS X)
 *
 * Replace redundant variables or functions with the full expression. It is the opposite of Extract Method.
 */

namespace Refactoring\JetBrains;

// 1. Place the caret over $name and inline the variable.
$name = 'Benji';
echo $name;
