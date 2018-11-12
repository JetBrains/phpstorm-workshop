<?php
/**
 * Type Hinting
 *
 * Hint PhpStorm about the types you are working with.
 *
 * Quick Documentation
 *
 * Ctrl+Q (Windows/Linux)
 * F1 (macOS)
 *
 * View quick documentation information about the variable, class or method
 */

namespace Editing1\JetBrains;

use Debugging\JetBrains\Person;

$people = array();
$people[] = new Person('Trillian');

foreach ($people as $person) {
    // 1. Auto completion on $person will not show anything about the Person class.
    //    Type $person-> and see for yourself.
    // $person->


    // 2. We can solve this!
    //    Find the $people = array(); (line 19) and add a PHPDoc comment above:
    //        /** @var $people Person[] */
    //    This tells PhpStorm the array contains Person objects.
    //    Type $person-> and see for yourself that we now have completion.
    // $person->


    // 3. Place the cursor on $person and use Quick Documentation.

    // 4. Place the cursor on Person and use Quick Documentation.

    // 5. Navigate to the Person class and add PHPDoc annotations on the class.
    //    Add several @property annotations, for example:
    //        @property string Address Address of the person
    //        @property string Country Person country
    //    While these properties don't actually exist, PhpStorm parses the
    //    annotations and will provide Address and Country when using completion
    //    on the Person class. Try it here, by typing: $person->A
    //
    //    Note PhpStorm also supports @method, @type, @property, @deprecated, @global, @name, @param, @static, @since, @link, @mixin, ...
    // $person->A


}
