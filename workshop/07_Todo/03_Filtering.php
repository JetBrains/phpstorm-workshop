<?php
/**
 * Filtering
 *
 * Filter tasks in the tool window based on pattern.
 *
 * Alt+6 (Windows/Linux)
 * Command+6 (macOS)
 */

namespace Todo3\JetBrains;

// 1. Open the TODO tool window and make sure the Project scope is selected (show all TODO's in the current project).
// 2. From the toolbar, click the filter icon and edit filters. Create two new filters:
//     - Verify (Maarten), selecting the \bverify\[\bMaarten\b\].* pattern.
//     - Review, selecting the \breview\b.* pattern.
// 3. From the TODO tool window, set the filter to just show Review comments.
// 4. From the TODO tool window, set the filter to just show comments for Maarten.
// 5. In teams, setting patterns with usernames is really handy to filter actual tasks from the noise.
