<?php

class ArrayOfMultiPackItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MultiPackItem[] $MultiPackItem
     */
    protected $MultiPackItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MultiPackItem[]
     */
    public function getMultiPackItem()
    {
      return $this->MultiPackItem;
    }

    /**
     * @param MultiPackItem[] $MultiPackItem
     * @return ArrayOfMultiPackItem
     */
    public function setMultiPackItem(array $MultiPackItem = null)
    {
      $this->MultiPackItem = $MultiPackItem;
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
      return isset($this->MultiPackItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MultiPackItem
     */
    public function offsetGet($offset)
    {
      return $this->MultiPackItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MultiPackItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MultiPackItem[] = $value;
      } else {
        $this->MultiPackItem[$offset] = $value;
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
      unset($this->MultiPackItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MultiPackItem Return the current element
     */
    public function current()
    {
      return current($this->MultiPackItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MultiPackItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MultiPackItem);
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
      reset($this->MultiPackItem);
    }

    /**
     * Countable implementation
     *
     * @return MultiPackItem Return count of elements
     */
    public function count()
    {
      return count($this->MultiPackItem);
    }

}
