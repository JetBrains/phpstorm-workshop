<?php
/**
 * Writing tests
 *
 * Create new file, select PHPUnit test.
 *
 * Alt+Insert or Ctrl+Shift+T (Go to Test) (Windows/Linux)
 * Command+N or Command+Shift+T (Go to Test) (Mac OS X)
 */

namespace Testing\JetBrains;

// 1. Create a new PHPUnit test file. From the navigation bar, create a new file using the PHPUnit template.
//    Note that another way of creating a test is to use the Go to Test navigation:
//      - Navigate to the Queue class
//      - Use the Go to Test navigation to either go to test or create a new test
//
// 2. For Fully Qualified name, search for the Queue class.
//    All other parameters for the unit test class can be kept at their defaults.
//    Note you can specify the test class name and namespace as well as the directory.
//
//    The created test class will look something like the following:
//
//    class QueueTest extends \PHPUnit_Framework_TestCase {
//
//    }
//
// 3. Add a function called setUp() which sets up a new Queue in a new field called $_queue;
//    To generate the setUp() function, we can use the Generate | Override method action (Alt+Insert / Command+N).
//
//    This is what the class should look like:
//    (note: the Code | Comment With Line Comment menu may be handy if you are copy/pasting the below code)
//
//   class QueueTest extends \PHPUnit_Framework_TestCase {
//       /** @var Queue */
//       protected $_queue;
//
//       public function setUp() {
//           $this->_queue = new Queue();
//       }
//   }
//
// 4. Add a first test, verifying the enqueue() method. This can be done using Alt+Insert / Command+N
//
//  public function testEnqueueIncreasesItemCount() {
//      $this->_queue->enqueue('test');
//      $this->assertEquals(1, $this->_queue->getNumberOfItems());
//  }
//
// 5. From the test, navigate back to the Queue class using Navigate to Test Subject.
//    This is the same keyboard shortcut as Go to Test.
