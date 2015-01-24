<?php
namespace Debugging\JetBrains;


class FruitRepository {
    protected $_fruits = array();

    public function __construct() {
        $this->_fruits = array('apple', 'pear', 'lemon');
    }

    public function getAll() {
        return $this->_fruits;
    }
} 
