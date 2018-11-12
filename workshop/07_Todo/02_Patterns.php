<?php
/**
 * Patterns
 *
 * Customize todo patterns to recognize other keywords.
 *
 * Ctrl+Alt+S (Windows/Linux)
 * Command+, (macOS)
 */

namespace Todo2\JetBrains;

// 1. Open the Settings Pane then Editor | Todo.
//    Add a new pattern: \breview\b.*
//    This should make the following comment highlighted.

// review: check if this line is highlighted and recognized by PhpStorm's todo system.

// 2. Add another pattern which matches code reviews that Maarten has to perform: \bverify\[\bMaarten\b\].*
//    This should make the following comment highlighted.

// verify[Maarten]: check if this line is highlighted and recognized by PhpStorm's todo system.

// 3. Open the TODO Tool Window and see if these new patterns are shown in there.