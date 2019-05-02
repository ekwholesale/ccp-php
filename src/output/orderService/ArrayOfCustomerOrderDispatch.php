<?php

class ArrayOfCustomerOrderDispatch implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomerOrderDispatch[] $CustomerOrderDispatch
     */
    protected $CustomerOrderDispatch = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerOrderDispatch[]
     */
    public function getCustomerOrderDispatch()
    {
      return $this->CustomerOrderDispatch;
    }

    /**
     * @param CustomerOrderDispatch[] $CustomerOrderDispatch
     * @return ArrayOfCustomerOrderDispatch
     */
    public function setCustomerOrderDispatch(array $CustomerOrderDispatch = null)
    {
      $this->CustomerOrderDispatch = $CustomerOrderDispatch;
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
      return isset($this->CustomerOrderDispatch[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomerOrderDispatch
     */
    public function offsetGet($offset)
    {
      return $this->CustomerOrderDispatch[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomerOrderDispatch $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomerOrderDispatch[] = $value;
      } else {
        $this->CustomerOrderDispatch[$offset] = $value;
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
      unset($this->CustomerOrderDispatch[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomerOrderDispatch Return the current element
     */
    public function current()
    {
      return current($this->CustomerOrderDispatch);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CustomerOrderDispatch);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CustomerOrderDispatch);
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
      reset($this->CustomerOrderDispatch);
    }

    /**
     * Countable implementation
     *
     * @return CustomerOrderDispatch Return count of elements
     */
    public function count()
    {
      return count($this->CustomerOrderDispatch);
    }

}
