<?php
/**
 * Move
 *
 * F6 (Windows/Linux/macOS)
 *
 * Change the location of a file, directory, class or static member.
 */

namespace Refactoring11\JetBrains;

// 1. Move the current file into the Code directory.
// 2. Move the Code directory and all its contents into the MoreCode directory.
// 3. Move Class1, Class2 and Class3 into separate files.

class Class1
{
}

class Class2
{
}

class Class3
{
}

// 4. Move the static method log() from the Utilities class to the Logger class.
class Utilities
{
    public static function log($message)
    {
        echo $message;
    }
}

class Logger
{

}

// 5. Note that the calls to Utilities::log() have been updated.
Utilities::log('Almost at the end of the exercise');
Utilities::log('At the end of the exercise');
