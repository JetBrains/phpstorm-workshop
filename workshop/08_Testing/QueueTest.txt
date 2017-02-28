<?php

namespace Testing\JetBrains;

require "Code/Queue.php";

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase{
    /** @var Queue */
    protected $_queue;

    public function setUp() {
        $this->_queue = new Queue();
    }

    public function testEnqueueIncreasesItemCount() {
        $this->_queue->enqueue('test');
        $this->assertEquals(1, $this->_queue->getNumberOfItems());
    }

    public function testPeekReturnsNullWhenNoItemsInQueue() {
        $result = $this->_queue->peek();
        $this->assertNull($result);
    }

    public function testPeekReturnsItemWhenItemsInQueue() {
        $this->_queue->enqueue('test');
        $result = $this->_queue->peek();
        $this->assertEquals('test',$result);
    }
}
