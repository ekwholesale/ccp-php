<?php

class ArrayOfAPICustomer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APICustomer[] $APICustomer
     */
    protected $APICustomer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return APICustomer[]
     */
    public function getAPICustomer()
    {
      return $this->APICustomer;
    }

    /**
     * @param APICustomer[] $APICustomer
     * @return ArrayOfAPICustomer
     */
    public function setAPICustomer(array $APICustomer = null)
    {
      $this->APICustomer = $APICustomer;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->APICustomer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APICustomer
     */
    public function offsetGet($offset)
    {
      return $this->APICustomer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APICustomer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->APICustomer[] = $value;
      } else {
        $this->APICustomer[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->APICustomer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APICustomer Return the current element
     */
    public function current()
    {
      return current($this->APICustomer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->APICustomer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->APICustomer);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->APICustomer);
    }

    /**
     * Countable implementation
     *
     * @return APICustomer Return count of elements
     */
    public function count()
    {
      return count($this->APICustomer);
    }

}
