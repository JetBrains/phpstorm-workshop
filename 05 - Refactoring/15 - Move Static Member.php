<?php
/**
 * Move Static Member
 *
 * Move static fields and methods to another type.
 *
 * F6 (Windows/Linux/Mac OS X)
 */

namespace Refactoring15\JetBrains;

// 1. Move the static method "split" from the class Utils to a more specialized StringUtils.
class Utils {
    public static function split($subject, $delimiter)
    {
        return explode($delimiter, $subject);
    }
}

class StringUtils {
}

// 2. Note that calls to Utils::split() have updated to StringUtils::split()
$myArray = Utils::split('This is a test', ' ');
$myCsvRecord = Utils::split('Maarten;JetBrains', ';');