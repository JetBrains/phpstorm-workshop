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
1. Create run configuration for the current file, for example using the context menu or a run configuration.
2. Set the following line into Interpreter options:
-d xdebug.profiler_enable=1 -d xdebug.profiler_output_dir=/home/vagrant
3. Run the created configuration
4. Open Remote Host (View|Tool Windows|Remote Host)
5. Navigate to /home/vagrant inside Remote Host
6. D'n'D cachegrind.out.* file into a project dir
7. Use the Tools | Analyze Xdebug Profiler Snapshot... and open the file that was generated inside a project dir
8. We can now see all calls, which functions are called by other functions, timings, ... and analyze potential performance issues.
*/





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
