<?php
/**
 * Navigate back / forward
 *
 * Returns the caret to the last navigation point.
 *
 * Ctrl+Alt+Left / Right (Windows/Linux)
 * Command+Alt+Left / Right (Mac OS X)
 */

namespace Navigation3\JetBrains;

class NavigateBack {
    public function startingPoint() {
        $navigateTo = new NavigateTo();

        // 1. Navigate to destination()
        // 3. Navigate forward using the keyboard shortcut
        $navigateTo->destination();
    }
}

class NavigateTo {
    public function destination() {
        // 2. Now navigate back using the keyboard shortcut
    }
}
