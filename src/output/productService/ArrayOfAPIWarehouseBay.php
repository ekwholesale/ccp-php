<?php

class ArrayOfAPIWarehouseBay implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIWarehouseBay[] $APIWarehouseBay
     */
    protected $APIWarehouseBay = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return APIWarehouseBay[]
     */
    public function getAPIWarehouseBay()
    {
      return $this->APIWarehouseBay;
    }

    /**
     * @param APIWarehouseBay[] $APIWarehouseBay
     * @return ArrayOfAPIWarehouseBay
     */
    public function setAPIWarehouseBay(array $APIWarehouseBay = null)
    {
      $this->APIWarehouseBay = $APIWarehouseBay;
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
      return isset($this->APIWarehouseBay[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIWarehouseBay
     */
    public function offsetGet($offset)
    {
      return $this->APIWarehouseBay[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIWarehouseBay $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->APIWarehouseBay[] = $value;
      } else {
        $this->APIWarehouseBay[$offset] = $value;
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
      unset($this->APIWarehouseBay[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIWarehouseBay Return the current element
     */
    public function current()
    {
      return current($this->APIWarehouseBay);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->APIWarehouseBay);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->APIWarehouseBay);
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
      reset($this->APIWarehouseBay);
    }

    /**
     * Countable implementation
     *
     * @return APIWarehouseBay Return count of elements
     */
    public function count()
    {
      return count($this->APIWarehouseBay);
    }

}
