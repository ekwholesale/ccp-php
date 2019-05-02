<?php

class ArrayOfWarehouseBay implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WarehouseBay[] $WarehouseBay
     */
    protected $WarehouseBay = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WarehouseBay[]
     */
    public function getWarehouseBay()
    {
      return $this->WarehouseBay;
    }

    /**
     * @param WarehouseBay[] $WarehouseBay
     * @return ArrayOfWarehouseBay
     */
    public function setWarehouseBay(array $WarehouseBay = null)
    {
      $this->WarehouseBay = $WarehouseBay;
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
      return isset($this->WarehouseBay[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WarehouseBay
     */
    public function offsetGet($offset)
    {
      return $this->WarehouseBay[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WarehouseBay $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->WarehouseBay[] = $value;
      } else {
        $this->WarehouseBay[$offset] = $value;
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
      unset($this->WarehouseBay[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WarehouseBay Return the current element
     */
    public function current()
    {
      return current($this->WarehouseBay);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WarehouseBay);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WarehouseBay);
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
      reset($this->WarehouseBay);
    }

    /**
     * Countable implementation
     *
     * @return WarehouseBay Return count of elements
     */
    public function count()
    {
      return count($this->WarehouseBay);
    }

}
