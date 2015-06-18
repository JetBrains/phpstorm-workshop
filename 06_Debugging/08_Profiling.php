<?php
/**
 * Profiling
 *
 * Insight into # of calls, execution times per function, ...
 * Note: Xdebug only
 */

namespace Debugging8\JetBrains;

require_once 'Code/FruitRepository.php';
require_once 'Code/Person.php';

use Debugging\JetBrains\FruitRepository;
use Debugging\JetBrains\Person;

/*
1. Edit your php.ini and add the following two lines to the Xdebug configuration.
   Set the output_dir to a temporary path on your machine.
xdebug.profiler_enable=1
xdebug.profiler_output_dir="c:\Temp\"
*/

// 2. Run the current script, for example using the context menu or a run configuration.
// 3. After run, use the Tools | Analyze Xdebug Profiler Snapshot... and open the file that was generated in the temporary folder specified in php.ini.
// 4. We can now see all calls, which functions are called by other functions, timings, ... and analyze potential performance issues.
// 5. Make sure to remove the profiler configuration again. It can generate a lot of data on your disk!







$fruitRepository = new FruitRepository();
$fruits = $fruitRepository->getAll();
/** @var Person[] $people */
$people = array();

for ($i = 0; $i < 200; $i++) {
    $people[] = new Person('Person ' . $i, $i);
}

foreach ($people as $person) {
    foreach ($fruits as $fruit) {
        // 2. Place a breakpoint on the following line of code
        echo $person->getName() . ", age " .  $person->getAge() . ", likes " . $fruit . "\r\n";
    }
}
