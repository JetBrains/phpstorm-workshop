<?php
/**
 * Generate Code
 *
 * Generate code, e.g. class members, constructor, docblock comments, fields, ...
 *
 * Alt+Insert (Windows/Linux)
 * Command+N (Mac OS X)
 */

namespace Editing6\JetBrains;

// 1. Place the cursor somewhere in the Person class.
// 2. Generate the setId() method by overriding method.
// 3. Generate a constructor.
// 4. Generate getters and setters.
// 5. Generate PHPDoc blocks.
// 6. Generate the __toString method by implementing method.
// 7. Place the caret on the _age property usage in the isTeenager() method. Use Alt+Enter to generate a private field $_age.
class Person extends Entity {
    protected $_firstName;
    protected $_lastName;

    public function isTeenager() {
        return $this->_age > 10;
    }

    // here is a good place to start
}

class Entity {
    /** @var int */
    protected $_id;

    /**
     * @param $id int
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }
}