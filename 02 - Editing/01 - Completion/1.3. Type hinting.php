<?php
/**
 * Type hinting
 *
 * Hint PhpStorm about the types you are working with.
 */

namespace Editing1\JetBrains;

use Debugging\JetBrains\Person;

$people = array();
$people[] = new Person('Maarten');

foreach ($people as $person) {
    // 1. Autocompletion on $person will not show anything about the Person class.
    //    Type $person-> and see for yourself.

    // $person->

    // 2. We can solve this!
    //    Find the $people = array(); and add a PHPDoc comment: /** @var $people Person[] */ - this tells PhpStorm the array contains Person objects.
    //
    //    Type $person-> and see for yourself that we now have autocompletion.

    // $person->

    // 3. Place the cursor on $person and hit Ctrl+Q (F1). See quick documentation about the variable.
    // 4. Place the cursor on Person and hit Ctrl+Q (F1). See quick documentation about the type.
    // 5. Navigate to the Person class and add PHPDoc on the class. Add several @property annotations, for example:
    //    @property string Address Address of the person
    //    @property string Country Person country
    //    While these properties don't actually exist, PhpStorm parses the annotations and will provide Address and Country
    //    when using the Person class. Try it here, by typing: $person->A
    //
    //    Note PhpStorm also supports @method, @type, @property, @deprecated, @global, @name, @param, @static, @since, @link, @mixin, ...

    // $person->A
}
