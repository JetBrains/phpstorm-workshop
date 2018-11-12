<?php
/**
 * Extract Constant
 *
 * Ctrl+Alt+C (Windows/Linux)
 * Alt+Command+C (macOS)
 *
 * Extract a constant to make code cleaner and more maintainable.
 */

namespace Refactoring4\JetBrains;

// 1. Extract "----------------------\r\n" into a constant named HORIZONTAL_LINE.
echo "----------------------\r\n";
echo "Extracting Constants\r\n";
echo "----------------------\r\n";

// 2. In the class below, extract 15 into a constant named PAGESIZE.
//    Notice that the IDE is pretty good at guessing what the constant will be named.
class CustomerRepository
{
    public function getAll()
    {
        $db = new Db();
        return $db->getAll('SELECT * FROM customer', 15);
    }

    public function getAllActive(Db $db)
    {
        return $db->getAll('SELECT * FROM customer WHERE active = 1', 15);
    }
}

class Db
{
    public function getAll($query, $pageSize)
    {
        return array();
    }
}
