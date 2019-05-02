<?php

class GetData
{

    /**
     * @var int $value
     */
    protected $value = null;

    /**
     * @param int $value
     */
    public function __construct($value)
    {
      $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param int $value
     * @return GetData
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
