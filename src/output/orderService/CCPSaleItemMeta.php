<?php

class CCPSaleItemMeta
{

    /**
     * @var anyType $type
     */
    protected $type = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anyType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param anyType $type
     * @return CCPSaleItemMeta
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return CCPSaleItemMeta
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return CCPSaleItemMeta
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return CCPSaleItemMeta
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
