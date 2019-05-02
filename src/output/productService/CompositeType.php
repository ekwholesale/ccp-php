<?php

class CompositeType
{

    /**
     * @var boolean $BoolValue
     */
    protected $BoolValue = null;

    /**
     * @var string $StringValue
     */
    protected $StringValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getBoolValue()
    {
      return $this->BoolValue;
    }

    /**
     * @param boolean $BoolValue
     * @return CompositeType
     */
    public function setBoolValue($BoolValue)
    {
      $this->BoolValue = $BoolValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getStringValue()
    {
      return $this->StringValue;
    }

    /**
     * @param string $StringValue
     * @return CompositeType
     */
    public function setStringValue($StringValue)
    {
      $this->StringValue = $StringValue;
      return $this;
    }

}
