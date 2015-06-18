<?php
/**
 * Running tests
 *
 * Run Unit Tests using PHPUnit. Note that the PHPUnit framework can be acquired through PEAR or Composer.
 */

namespace Testing\JetBrains;

// 1. Create a new Run Configuration based on PHPUnit. Name it "Run tests" and specify the directory to look for tests:
//      \08 - Testing\
//    Note that a specific class or method can also be run.
//    A PHPUnit XML configuration file can also be specified for this specific run configuration.
// 2. Unless you have PHPUnit installed through PEAR, tests can not be run yet as the PHPUnit framework is not available.
//
//    From Project Settings | PHP | PHPUnit, specify that PHPUnit should be loaded from phpunit.phar.
//    The IDE can automatically download this file.
//
//    If you are using Composer, PHPUnit can also be loaded from a custom file. Specify the path to Composer's
//    Autoload.php if that is the case.
// 3. Almost there! The Queue class ca not be loaded. To solve this, do one of the following:
//
//      Add the line require_once 'Code/Queue.php';
//
//      -or-
//
//      From the Project Settings | PHP | PHPUnit, set \08 - Testing\Code\Bootstrap.php as the default bootstrap file.
//      A bootstrap file can be used to run custom PHP code in the unit test runner. Bootstrap.php includes all required files
//      so that the tests can be run.
// 4. Execute the Run Configuration.
// 5. The Test tool window below shows test results. Using the context menu,
//    additional statistics such as the number of assertions can be viewed.
