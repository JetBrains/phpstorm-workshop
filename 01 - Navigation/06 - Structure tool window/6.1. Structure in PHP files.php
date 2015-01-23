<?php
/**
 * File Structure Tool Window
 *
 * Display outline of file: classes, functions (with icons displaying accessibility).
 * Also show HTML, JavaScript, CSS, ...
 *
 * Alt+7 (Windows/Linux)
 * Command+7 s(Windows/Linux)
 *
 * Ctrl+F12 for popup (Windows/Linux)
 * Command+F12 for popup (Mac OS X)
 *
 * 1. Open the File Structure Tool Window.
 * 2. Using the arrow keys, navigate to fourthFunction().
 *    Enter navigates to function.
 * 3. Open the File Structure Tool Window. Switch to HTML from the title bar.
 *    Navigate to the first paragraph.
 */

namespace Navigation6\JetBrains;

class Class1 {
    /** @var int */
    protected $_classVariable;

    public function firstFunction() {

    }

    private function secondFunction() {

    }

    protected function thirdFunction() {

    }

    static function fourthFunction() {

    }
}

class Class2 {
    public function firstFunction() {

    }
}

$standardVariable = 1;
function standardFunction() {

}
?>
<html>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deserunt ea expedita magni omnis quis temporibus
    velit vitae. Ex laboriosam nesciunt nisi obcaecati possimus quia repellendus sequi similique soluta voluptas?</p>
</body>
</html>