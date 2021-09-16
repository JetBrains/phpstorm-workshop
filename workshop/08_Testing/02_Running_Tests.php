<?php
/**
 * Running tests
 *
 * Run Unit Tests using PHPUnit. Note that the PHPUnit framework can be acquired through PEAR or Composer.
 */

namespace Testing\JetBrains;

// 1. Create a new Run Configuration based on PHPUnit. Name it "Run tests" and specify the directory to look for tests:
//      \08_Testing\
//    Note that a specific class or method can also be run.
//    A PHPUnit XML configuration file can also be specified for this specific run configuration.
// 2. PhpStorm has already preconfigured PHPUnit configuration for Remote Interpreter in Settings | Languages & Frameworks |
// PHP | Test Frameworks | PHPUnit so you you just need to change you interpreter in Settings|PHP|CLI Interpreter to Workshop PHPUnit.
// 3. Almost there! The Queue class can not be loaded. To solve this, do one of the following:
//
//      Add the line require_once 'Code/Queue.php';
//
//      -or-
//
//      From the Settings | PHP | Test Frameworks | PHPUnit,
// set /opt/project/workshop/08_Testing/Code/Bootstrap.php as the default bootstrap file.
//      A bootstrap file can be used to run custom PHP code in the unit test runner.
// Bootstrap.php includes all required files so that the tests can be run.
// 4. Execute the Run Configuration.
// 5. The Test tool window below shows test results. Using the context menu,
//    additional statistics such as the number of assertions can be viewed.
