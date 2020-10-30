<?php

class ArrayOfOrderDetailCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderDetail[] $OrderDetail
     */
    protected $OrderDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderDetail[]
     */
    public function getOrderDetail()
    {
      return $this->OrderDetail;
    }

    /**
     * @param OrderDetail[] $OrderDetail
     * @return ArrayOfOrderDetail
     */
    public function setOrderDetail(array $OrderDetail = null)
    {
      $this->OrderDetail = $OrderDetail;
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
      return isset($this->OrderDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderDetail
     */
    public function offsetGet($offset)
    {
      return $this->OrderDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderDetail[] = $value;
      } else {
        $this->OrderDetail[$offset] = $value;
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
      unset($this->OrderDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderDetail Return the current element
     */
    public function current()
    {
      return current($this->OrderDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderDetail);
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
      reset($this->OrderDetail);
    }

    /**
     * Countable implementation
     *
     * @return OrderDetail Return count of elements
     */
    public function count()
    {
      return count($this->OrderDetail);
    }

}
