<?php
/**
 * Test-Driven Development (TDD)
 *
 * Writing tests first, outlining expected results, after which the method under test gets implemented.
 *
 * Alt+Insert (Windows/Linux)
 * Command+N (macOS)
 */

namespace Testing\JetBrains;

// 1. In QueueTest.txt, add a 2 new tests which tests a currently non-existing method peek():
//
//    public function testPeekReturnsNullWhenNoItemsInQueue() {
//        $result = $this->_queue->peek();
//        $this->assertNull($result);
//    }
//
//    public function testPeekReturnsItemWhenItemsInQueue() {
//        $this->_queue->enqueue('test');
//        $result = $this->_queue->peek();
//        $this->assertEquals('test',$result);
//    }
//
//    In other words: if items are in queue, peek() should return the item. It should return null if no items are in queue.
//
// 2. PhpStorm displays an inspection on the peek() method: Method peek() not found in class Queue.
//    Using Alt+Enter, create the method.
//    Implement the method.
// 3. Run unit tests and see tests are all passing.
