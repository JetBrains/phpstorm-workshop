<?php
/**
 * Bookmarks
 *
 * Windows/Linux:
 *   F11 Toggle Bookmark
 *   Ctrl+F11 Toggle Numbered Bookmark (Bookmark with Mnemonic)
 *   Shift+F11 Show bookmarks
 *   Ctrl+0..9 Navigate to numbered bookmark
 *
 * macOS:
 *   F3 Toggle Bookmark
 *   Alt+F3 Toggle Numbered Bookmark (Bookmark with Mnemonic)
 *   Command+F3 Show bookmarks
 *   Ctrl+0..9 Navigate to numbered bookmark
 *
 * Set, unset and navigate to bookmarks.
 *
 *
 * 1. Navigate to firstFunction() (use Navigate to Symbol or Search Everywhere) and set a bookmark.
 * 2. Navigate to secondFunction() and set a bookmark.
 * 3. Navigate to thirdFunction() and set bookmark with mnemonic, assign it number 3.
 * 4. Show a list of bookmarks and navigate between them.
 * 5. Navigate to the numbered bookmark (Ctrl+3).
 * 6. Remove the bookmark from secondFunction().
 * 7. From the bookmarks list, add a description to one of the bookmarks.
 */

namespace Navigation3\JetBrains;

class Bookmarks
{
    public function firstFunction()
    {
    }

    public function secondFunction()
    {
    }

    public function thirdFunction()
    {
    }
}
