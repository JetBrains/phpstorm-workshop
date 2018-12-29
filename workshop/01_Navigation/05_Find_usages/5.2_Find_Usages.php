<?php
/**
 * Find Usages
 *
 * Alt+F7 (Windows/Linux/macOS)
 *
 * Show Usages (uses popup)
 *
 * Ctrl+Alt+7 (Windows/Linux)
 * Alt+Command+F7 (macOS)
 *
 * Highlight usages of a given symbol in the current project.
 *
 * NOTE: On Ubuntu, Alt+F7 is overwritten
 * by a system shortcut - you may need to rebind these keys to use the shortcuts.
 */

namespace Navigation5\JetBrains;

class FindUsages
{
    const MIN_VALUE = -3.5;
    const MAX_VALUE = 3.5;

    // 1. Place the caret on adjust() and Find Usages.
    //    Note the tool window that opens. We can navigate to usages from this tool window.
    //    Filtering is also possible from this tool window.
    //
    // 2. Place the caret on adjust() and Show Usages using the popup.
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
