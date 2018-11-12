<?php
/**
 * Generate Code
 *
 * Alt+Insert (Windows/Linux)
 * Command+N (macOS)
 *
 * Generate Code (class members, constructor, PHPDoc docblock comments, fields etc)
 */

namespace Editing6\JetBrains;

// 1. Place the cursor somewhere in the Person class.
// 2. Generate the setId() method by using overriding method from Generate Code.
// 3. Generate a constructor.
// 4. Generate getters and setters for both properties.
// 5. Generate PHPDoc docblocks for the entire Person class.
// 6. Generate the __toString method by implementing method.
// 7. Place the caret on the _age property usage in the isTeenager() method.
//    Use Alt+Enter to generate a private field $_age.

class Person extends Entity
{
    protected $_firstName;
    protected $_lastName;

    public function isTeenager()
    {
        return $this->_age > 10;
    }

    // here is a good place to start

}

class Entity
{
    /**
     * @var int
     */
    protected $_id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }
}
