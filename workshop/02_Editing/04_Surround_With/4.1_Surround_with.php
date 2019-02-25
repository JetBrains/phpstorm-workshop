<?php
/**
 * Surround With
 *
 * Ctrl+Alt+T (Windows/Linux)
 * Alt+Command+T (macOS)
 *
 * Show Intention Actions
 *
 * Alt+Enter (Windows/Linux/Mac OSX)
 *
 * Wrap the selected text with relevant content (e.g. try/catch or if statement)
 *
 * NOTE: You can also invoke contextual surrounds using Show Intention Actions
 * NOTE: On Ubuntu, Ctrl+Alt+T is overwritten by a system shortcut - you may need to rebind these keys to use the shortcuts.
 */

namespace Editing4\JetBrains;

class SurroundWith
{
    // 1. Wrap the statement in the following function in a try/catch block.
    public function surroundWithTryCatch()
    {
        echo 'This may be throwing an Exception. Riiiight!';
    }

    // 2. Place the caret on the $items[0] element. Press Alt+Enter to surround with an if(!empty(....)) check.
    public function division($items)
    {
        return $items[0] / $items[1];
    }
}
