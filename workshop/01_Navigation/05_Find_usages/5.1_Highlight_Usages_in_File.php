<?php
/**
 * Highlight Usages in File
 *
 * Ctrl+Shift+F7 (Windows/Linux)
 * Shift+Command+F7 (macOS)
 *
 * Highlight usages of a given symbol in the current file.
 */

namespace Navigation5\JetBrains;

class HighlightUsagesInFile
{
    const MIN_VALUE = -3.5;
    const MAX_VALUE = 3.5;

    // 1. Place the caret on $newValue and see the usages are automatically underlined.
    //    Note the different colour highlights for read and write usage.
    //
    // 2. Place the caret on $newValue and use Highlight Usages in File.
    //    Note the different colour highlights for read and write usage.
    //    Note the highlights in the stripe on the right of the editor.
    //    Escape clears the highlight.
    public function adjust($original, $delta)
    {
        $newValue = $original + $delta;

        if ($newValue < self::MIN_VALUE) {
            $newValue = self::MAX_VALUE;
        }
        if ($newValue > self::MIN_VALUE) {
            $newValue = self::MAX_VALUE;
        }

        return $newValue;
    }
}
