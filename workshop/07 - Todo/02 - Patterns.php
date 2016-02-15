<?php
/**
 * Patterns
 *
 * Customize todo patterns to recognize other keywords.
 *
 * Ctrl+Alt+S (Windows/Linux)
 * Command+, (Mac OS X)
 */

namespace Todo2\JetBrains;

// 1. Through the IDE Settings | Todo, add a new pattern: \breview\b.*
//    This should make the following comment visible.

// review: check if this line is highlighted and recognized by PhpStorm's todo system.

// 2. Add another pattern which matches code reviews that Maarten has to perform: \bverify\[\bMaarten\b\].*
//    This should make the following comment visible.

// verify[Maarten]: check if this line is highlighted and recognized by PhpStorm's todo system.

// 3. Open the TODO Tool Window and see if these new patterns are shown in there.
