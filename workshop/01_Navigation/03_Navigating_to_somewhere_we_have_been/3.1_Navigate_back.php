<?php
/**
 * Navigate back and forward
 *
 * Ctrl+Alt+Left / Ctrl+Alt+Right (Windows/Linux)
 * Command+[ / Command+] (macOS)
 *
 * Return the caret to the last navigation point.
 */

namespace Navigation3\JetBrains;

class NavigateBack
{
    public function startingPoint()
    {
        $navigateTo = new NavigateTo();

        // 1. Navigate to destination().
        // 3. Navigate Forward using the keyboard shortcut.
        $navigateTo->destination();
    }
}

class NavigateTo
{
    public function destination()
    {
        // 2. Now Navigate Back using the keyboard shortcut.
    }
}
