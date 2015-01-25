<?php
namespace Navigation1\JetBrains\Customers;


class Customer {
    /** @var string */
    protected $_name;

    /** @var int */
    protected $_age;

    /**
     * @param string $name
     * @param int $age
     */
    function __construct($name, $age)
    {
        $this->_age = $age;
        $this->_name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Celebrate birthday.
     */
    public function celebrateBirthday() {
        echo 'Yay!';
    }
}
