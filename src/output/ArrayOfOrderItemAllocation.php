<?php

class ArrayOfOrderItemAllocation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderItemAllocation[] $OrderItemAllocation
     */
    protected $OrderItemAllocation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderItemAllocation[]
     */
    public function getOrderItemAllocation()
    {
      return $this->OrderItemAllocation;
    }

    /**
     * @param OrderItemAllocation[] $OrderItemAllocation
     * @return ArrayOfOrderItemAllocation
     */
    public function setOrderItemAllocation(array $OrderItemAllocation = null)
    {
      $this->OrderItemAllocation = $OrderItemAllocation;
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
      return isset($this->OrderItemAllocation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderItemAllocation
     */
    public function offsetGet($offset)
    {
      return $this->OrderItemAllocation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderItemAllocation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderItemAllocation[] = $value;
      } else {
        $this->OrderItemAllocation[$offset] = $value;
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
      unset($this->OrderItemAllocation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderItemAllocation Return the current element
     */
    public function current()
    {
      return current($this->OrderItemAllocation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderItemAllocation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderItemAllocation);
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
      reset($this->OrderItemAllocation);
    }

    /**
     * Countable implementation
     *
     * @return OrderItemAllocation Return count of elements
     */
    public function count()
    {
      return count($this->OrderItemAllocation);
    }

}
