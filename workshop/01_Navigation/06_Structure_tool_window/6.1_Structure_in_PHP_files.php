<?php
/**
 * Structure Tool Window
 *
 * Alt+7 (Windows/Linux)
 * Command+7 s(Windows/Linux)
 *
 * Navigate to File Structure
 *
 * Ctrl+F12 (Windows/Linux)
 * Command+F12 (macOS)
 *
 * Display outline of file: classes, functions (with icons displaying accessibility).
 * Also show HTML, JavaScript, CSS, ...
 *
 * 1. Open the Structure Tool pane.
 * 2. Using the arrow keys, navigate to fourthFunction().
 *    (Enter navigates to selected item)
 * 3. Open the Navigate to File Structure popup. Move to the HTML section.
 *    Navigate to the first paragraph.
 */

namespace Navigation6\JetBrains;

class Class1
{
    /** @var int */
    protected $_classVariable;

    static function fourthFunction()
    {
    }

    public function firstFunction()
    {
    }

    protected function thirdFunction()
    {
    }

    private function secondFunction()
    {
    }
}

class Class2
{
    public function firstFunction()
    {
    }
}

$standardVariable = 1;
function standardFunction()
{
}

?>
<html>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deserunt ea
    expedita magni omnis quis temporibus
    velit vitae. Ex laboriosam nesciunt nisi obcaecati possimus quia repellendus
    sequi similique soluta voluptas?</p>
</body>
</html>
