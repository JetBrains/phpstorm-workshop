<?php

/**
 * Class Session.
 */
class Session {
    /**
     * @var array Store of session data.
     */
    protected $_store;

    /**
     * Instantiates a new Session.
     *
     * @param array $store Store of session data.
     */
    function __construct(&$store)
    {
        $this->_store =& $store;
    }

    /**
     * Checks if a value exists in session.
     *
     * @param string $key Key of the session item.
     * @return bool True if item exists, false if otherwise.
     */
    public function has($key) {
        return isset($this->_store[$key]);
    }

    /**
     * Gets a value from session.
     *
     * @param string $key Key of the session item.
     * @return mixed|null Session item or null if it does not exist.
     */
    public function get($key) {
        if (isset($this->_store[$key])) {
            return $this->_store[$key];
        }
        return null;
    }

    /**
     * Sets a value from session.
     *
     * @param string $key Key of the session item.
     * @param mixed $value Value of the session item.
     * @return Session Fluent interface.
     */
    public function set($key, $value) {
        $this->_store[$key] = $value;
        return $this;
    }
} 
