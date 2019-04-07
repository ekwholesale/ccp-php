<?php

class ArrayOfApiFault implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApiFault[] $ApiFault
     */
    protected $ApiFault = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApiFault[]
     */
    public function getApiFault()
    {
      return $this->ApiFault;
    }

    /**
     * @param ApiFault[] $ApiFault
     * @return ArrayOfApiFault
     */
    public function setApiFault(array $ApiFault = null)
    {
      $this->ApiFault = $ApiFault;
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
      return isset($this->ApiFault[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApiFault
     */
    public function offsetGet($offset)
    {
      return $this->ApiFault[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApiFault $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ApiFault[] = $value;
      } else {
        $this->ApiFault[$offset] = $value;
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
      unset($this->ApiFault[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApiFault Return the current element
     */
    public function current()
    {
      return current($this->ApiFault);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApiFault);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApiFault);
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
      reset($this->ApiFault);
    }

    /**
     * Countable implementation
     *
     * @return ApiFault Return count of elements
     */
    public function count()
    {
      return count($this->ApiFault);
    }

}
