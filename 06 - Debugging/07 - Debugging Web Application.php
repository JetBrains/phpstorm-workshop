<?php
/**
 * Debugging Web Application
 *
 * Use Zero-Configuration to start debugging.
 */

namespace Debugging7\JetBrains;

// 1. Visit http://www.jetbrains.com/phpstorm/marklets/ and generate bookmarklets for your debugger (Zend Debugger or Xdebug).
//    Drag at least the Start Debugger bookmarklet to the bookmarks bar.
//
//    If you prefer using a simple browser extension, refer http://confluence.jetbrains.com/display/PhpStorm/Browser+Debugging+Extensions
//    and install one. For example for Chrome, install https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc.
// 2. Create a new run configuration for the current script.
//    Select PHP Built-in Web Server, give the configuration a name.
//    Set the host to 127.0.0.1, port to 789.
//    Set the document root to the folder in which the 07 - Debugging Web Application.php file lives.
//    We can now host the current script by running the configuration.
// 3. Run the configuration and open http://127.0.0.1:789/07 - Debugging Web Application.php
// 4. In PhpStorm, use the Run | Start Listen for PHP Debug Connections menu.
// 5. In the browser, use the Start Debugger bookmarklet. Click the "Show Greeting" button and note that PhpStorm informs about a new debug connection.
//    Place some additional breakpoints and see that the Variables view in the Debug Tool Window now holds additional globals ($_COOKIE, $_GET, $_REQUEST).

// Troubleshooting: if PhpStorm does not accept the debuggign connection, make sure that under Project Settings | PHP | Debug,
// external connections are enabled and tha the number of allowed connections is >= 1.
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