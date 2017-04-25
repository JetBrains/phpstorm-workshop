<?php
/**
 * Navigate back and forward
 *
 * Ctrl+Alt+Left/Right (Windows/Linux)
 * Command+[/](Mac OS X)
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
        // 3. Navigate forward using the keyboard shortcut.
        $navigateTo->destination();
    }
}

class NavigateTo
{
    public function destination()
    {
        // 2. Now navigate back using the keyboard shortcut.
    }
}
