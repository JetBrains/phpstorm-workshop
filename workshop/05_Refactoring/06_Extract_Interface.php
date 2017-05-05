<?php
/**
 * Extract Interface
 *
 * Extract an interface from a class.
 */

namespace Refactoring6\JetBrains;

// 1. Extract an interface from the CustomerRepository using Refactor This (See excercise 01_Refactor_This).
//    Name the interface IRepository and make sure it is in the JetBrains\Contracts namespace.
//    Copy PHPDoc blocks and make sure the get(), getAll(), save() and delete() methods are extracted.
//    Checking the "Replace Class references with interface where possible" will update the CustomerController class.
//
//    Apply the refactoring.

class CustomerController
{
    // 2. Verify the PHPDoc block has been updated and IRepository is in there.
    /** @var CustomerRepository */
    protected $_repository;

    function __construct()
    {
        $this->_repository = new CustomerRepository();
    }
}

class CustomerRepository
{
    /** @var Db */
    protected $_db;

    function __construct()
    {
        $this->_db = new Db();
    }

    /**
     * Get by id.
     *
     * @param int $id ID
     * @return mixed Instance.
     */
    public function get($id)
    {
        return $this->_db->get($id);
    }

    public function getAll()
    {
        return $this->_db->getAll('SELECT * FROM customer', 15);
    }

    public function save($instance)
    {
        $this->_db->save($instance);
    }

    public function delete($id)
    {
        $this->_db->delete($id);
    }
}

class Db
{
    public function getAll($query, $pageSize)
    {
        return array();
    }

    public function save($instance)
    {
    }

    public function delete($id)
    {
    }
}
