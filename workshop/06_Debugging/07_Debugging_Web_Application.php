<?php
/**
 * Debugging Web Application
 *
 * Use Zero-Configuration to start debugging.
 */

namespace Debugging7\JetBrains;

// 0. Make sure that you've entered the valid IP address in docker-compose.yml
// 1. Make sure that you've executed "docker-compose up"
// 2. Visit http://www.jetbrains.com/phpstorm/marklets/ and generate bookmarklets for your debugger (Zend Debugger or Xdebug).
//    Drag at least the Start Debugger bookmarklet to the bookmarks bar.
//
//    If you prefer using a simple browser extension, refer to https://www.jetbrains.com/help/phpstorm/browser-debugging-extensions.html
//    and install one. For example for Chrome, install https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc.
// 3. Open http://localhost:8081/07_Debugging_Web_Application.php or click browser icon in the right upper corner of editor
// 4. In PhpStorm, use the Run | Start Listening for PHP Debug Connections menu.
// 5. In the browser, use the Start Debugger bookmarklet. Click the "Show Greeting" button and note that PhpStorm informs about a new debug connection.
//    Place some additional breakpoints and see that the Variables view in the Debug Tool Window now holds additional globals ($_COOKIE, $_GET, $_REQUEST).
?>
<!DOCTYPE html>
<html>
<head>
    <title>Web Application</title>
</head>
<body>
<form>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"/>
    <input type="submit" value="Show Greeting"/>
</form>
<?php
if (isset($_REQUEST['name'])) {
    echo '<h2>Hello, ' . htmlentities($_REQUEST['name']) . '</h2>';
}
?>
</body>
</html>
