<?php
/**
 * Writing tests
 *
 * Create new file, select PHPUnit test.
 *
 * Alt+Insert or Ctrl+Shift+T (Go to Test) (Windows/Linux)
 * Command+N or Command+Shift+T (Go to Test) (macOS)
 */

namespace Testing\JetBrains;

// 1. Create a new PHP file. From the navigation bar, create a new file using the PHP template.
//
// 2. Paste the following code
//
//    namespace Testing\JetBrains;
//    use Testing\JetBrains\Queue;
//    class QueueTest extends TestCase {
//
//    }
//
// 3. Add a function called setUp() which sets up a new Queue in a new field called $_queue;.
//    To generate the setUp() function, we can use the Generate | Override method action (Alt+Insert / Command+N).
//
//    This is what the class should look like:
//
//   class QueueTest extends TestCase {
//       /** @var Queue */
//       protected $_queue;
//
//       public function setUp() {
//           $this->_queue = new Queue();
//       }
//   }
//
//    Note: the Code | Comment With Line Comment menu may be handy if you are copying/pasting the above code.
//
// 4. Add the first test, verifying the enqueue() method. This can be done using Alt+Insert / Command+N.
//
//  public function testEnqueueIncreasesItemCount() {
//      $this->_queue->enqueue('test');
//      $this->assertEquals(1, $this->_queue->getNumberOfItems());
//  }
//
// 5. From the test, navigate back to the Queue class using Navigate to Test Subject.
//    This is the same keyboard shortcut as Go to Test.
