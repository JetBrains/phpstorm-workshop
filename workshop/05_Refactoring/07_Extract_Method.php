<?php
/**
 * Extract Method
 *
 * Ctrl+Alt+M (Windows/Linux)
 * Alt+Command+M (macOS)
 *
 * Extract a block of code into a method, detecting variables.
 */

namespace Refactoring7\JetBrains;

// 1. Select the last 3 lines of the following code and use Extract Method.
//    Apply the Extract method refactoring and name it "reverseString". The $name argument can be named $stringToReverse.
$name = 'Eddie';
$nameBackwards = '';
for ($i = 0; $i < strlen($name); $i++) {
    $nameBackwards = substr($name, $i, 1) . $nameBackwards;
}

class Bootstrap
{
    public function run()
    {
        // 2. Select the following lines of code and extract them into a method called initialize(). Make it a public function.
        //    Note that the IDE detects the $databaseName and $database variable are required and are returned from the function.

        // Initialize settings
        $databaseName = 'sample';
        $database = mysqli_connect('localhost', 'root', '');

        // 3. Select the following lines of code and extract them into a method called createDatabase(). Make it protected.
        //    Note that the IDE detects the $databaseName and $database arguments are required and are added to the function.

        // Create database
        $query = "CREATE DATABASE $databaseName";
        mysqli_query($database, $query);

        // 4. Select the following lines of code and extract them into a method called sendEmail(). Make it protected.
        //    Note that the IDE detects the $databaseName variable is required and are returned from the function.

        // Send out e-mail
        $body = 'The database ' . $databaseName . ' has been created!';
        $to = 'frankie.mouse@magrathea.org';
        mail($to, 'Database created', $body);
    }
}
