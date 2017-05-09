<?php
/**
 * Profiling
 *
 * Insight into number of calls, execution times per function, etc.
 * Note: Xdebug only
 */

namespace Debugging8\JetBrains;

require_once 'Code/FruitRepository.php';
require_once 'Code/Person.php';

use Debugging\JetBrains\FruitRepository;
use Debugging\JetBrains\Person;

/*
1. Create Run Configuration for the current file, for example using the context menu or adding a run configuration from
      the toolbar dropdown.
NOTE: A Run Configuration is what PhpStorm uses to know what to run and how to run it, when you select Debug from the context
    menu to start a debug session you'll notice a Run Configuration is automatically created in the toolbar dropdown.
2. Set the following line into Interpreter options:
-d xdebug.profiler_enable=1 -d xdebug.profiler_output_dir=/home/vagrant
3. Run the created configuration
4. Open Remote Host (View | Tool Windows | Remote Host)
5. Navigate to /home/vagrant inside Remote Host
6. Drag and drop cachegrind.out.* file into the currect project window
7. Use the Tools | Analyze Xdebug Profiler Snapshot... and open the cachegrind file that was copied into the project
8. We can now see all calls, which functions are called by other functions, timings, ... and analyze potential performance
   issues.
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
        echo $person->getName() . ", age " . $person->getAge() . ", likes " . $fruit . "\r\n";
    }
}
