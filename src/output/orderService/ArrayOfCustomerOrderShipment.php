<?php

class ArrayOfCustomerOrderShipment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomerOrderShipment[] $CustomerOrderShipment
     */
    protected $CustomerOrderShipment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerOrderShipment[]
     */
    public function getCustomerOrderShipment()
    {
      return $this->CustomerOrderShipment;
    }

    /**
     * @param CustomerOrderShipment[] $CustomerOrderShipment
     * @return ArrayOfCustomerOrderShipment
     */
    public function setCustomerOrderShipment(array $CustomerOrderShipment = null)
    {
      $this->CustomerOrderShipment = $CustomerOrderShipment;
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
      return isset($this->CustomerOrderShipment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomerOrderShipment
     */
    public function offsetGet($offset)
    {
      return $this->CustomerOrderShipment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomerOrderShipment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomerOrderShipment[] = $value;
      } else {
        $this->CustomerOrderShipment[$offset] = $value;
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
      unset($this->CustomerOrderShipment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomerOrderShipment Return the current element
     */
    public function current()
    {
      return current($this->CustomerOrderShipment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CustomerOrderShipment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CustomerOrderShipment);
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
      reset($this->CustomerOrderShipment);
    }

    /**
     * Countable implementation
     *
     * @return CustomerOrderShipment Return count of elements
     */
    public function count()
    {
      return count($this->CustomerOrderShipment);
    }

}
