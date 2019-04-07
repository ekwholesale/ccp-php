<?php

class ArrayOfAPIProductWarehouseBayStockMovement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APIProductWarehouseBayStockMovement[] $APIProductWarehouseBayStockMovement
     */
    protected $APIProductWarehouseBayStockMovement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return APIProductWarehouseBayStockMovement[]
     */
    public function getAPIProductWarehouseBayStockMovement()
    {
      return $this->APIProductWarehouseBayStockMovement;
    }

    /**
     * @param APIProductWarehouseBayStockMovement[] $APIProductWarehouseBayStockMovement
     * @return ArrayOfAPIProductWarehouseBayStockMovement
     */
    public function setAPIProductWarehouseBayStockMovement(array $APIProductWarehouseBayStockMovement = null)
    {
      $this->APIProductWarehouseBayStockMovement = $APIProductWarehouseBayStockMovement;
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
      return isset($this->APIProductWarehouseBayStockMovement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APIProductWarehouseBayStockMovement
     */
    public function offsetGet($offset)
    {
      return $this->APIProductWarehouseBayStockMovement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APIProductWarehouseBayStockMovement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->APIProductWarehouseBayStockMovement[] = $value;
      } else {
        $this->APIProductWarehouseBayStockMovement[$offset] = $value;
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
      unset($this->APIProductWarehouseBayStockMovement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APIProductWarehouseBayStockMovement Return the current element
     */
    public function current()
    {
      return current($this->APIProductWarehouseBayStockMovement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->APIProductWarehouseBayStockMovement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->APIProductWarehouseBayStockMovement);
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
      reset($this->APIProductWarehouseBayStockMovement);
    }

    /**
     * Countable implementation
     *
     * @return APIProductWarehouseBayStockMovement Return count of elements
     */
    public function count()
    {
      return count($this->APIProductWarehouseBayStockMovement);
    }

}
