<?php
/**
 * Debugging Web Application
 *
 * Use Zero-Configuration to start debugging.
 */

namespace Debugging7\JetBrains;

// 0. Open docker-compose.yml and change remote_host=<ip> to your ip.
// 1. Visit http://www.jetbrains.com/phpstorm/marklets/ and generate bookmarklets for your debugger (Zend Debugger or Xdebug).
//    Drag at least the Start Debugger bookmarklet to the bookmarks bar.
//
//    If you prefer using a simple browser extension, refer http://confluence.jetbrains.com/display/PhpStorm/Browser+Debugging+Extensions
//    and install one. For example for Chrome, install https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc.
// 2. Start docker image: "docker-compose up"
// 3. Open http://localhost/06_Debugging_Web_Application.php
// 4. In PhpStorm, use the Run | Start Listen for PHP Debug Connections menu.
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
