<?php
/**
 * Surround With
 *
 * Wrap selected text with new content, e.g. try/catch or if statement.
 *
 * Ctrl+Alt+T (Windows/Linux)
 * Alt+Command+T (Mac OS X)
 * Alt+Enter
 */

namespace Editing4\JetBrains;

class SurroundWith {
    // 1. Wrap the statement in the following function in a try/catch block.
    public function surroundWithTryCatch() {
        echo 'This may be throwing an Exception. Riiiight!';
    }

    // 2. Place the caret on the $items[0] element. Hit Alt+Enter to surround with an if(empty(....)) check.
    public function division($items) {
        return $items[0] / $items[1];
    }
}