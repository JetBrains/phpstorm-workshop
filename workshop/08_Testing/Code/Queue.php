<?php
namespace Testing\JetBrains;

class Queue {
    /** @var array */
    protected $_store = array();

    public function getNumberOfItems() {
        return count($this->_store);
    }

    public function enqueue($item) {
        array_push($this->_store, $item);
    }

    public function peek() {
        return array_shift($this->_store);
    }
}
