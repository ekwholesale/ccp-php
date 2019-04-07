<?php

class ArrayOfItemBayStockLevel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ItemBayStockLevel[] $ItemBayStockLevel
     */
    protected $ItemBayStockLevel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemBayStockLevel[]
     */
    public function getItemBayStockLevel()
    {
      return $this->ItemBayStockLevel;
    }

    /**
     * @param ItemBayStockLevel[] $ItemBayStockLevel
     * @return ArrayOfItemBayStockLevel
     */
    public function setItemBayStockLevel(array $ItemBayStockLevel = null)
    {
      $this->ItemBayStockLevel = $ItemBayStockLevel;
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
      return isset($this->ItemBayStockLevel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemBayStockLevel
     */
    public function offsetGet($offset)
    {
      return $this->ItemBayStockLevel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemBayStockLevel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ItemBayStockLevel[] = $value;
      } else {
        $this->ItemBayStockLevel[$offset] = $value;
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
      unset($this->ItemBayStockLevel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemBayStockLevel Return the current element
     */
    public function current()
    {
      return current($this->ItemBayStockLevel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ItemBayStockLevel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ItemBayStockLevel);
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
      reset($this->ItemBayStockLevel);
    }

    /**
     * Countable implementation
     *
     * @return ItemBayStockLevel Return count of elements
     */
    public function count()
    {
      return count($this->ItemBayStockLevel);
    }

}
