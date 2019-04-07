<?php

class GetDataUsingDataContract
{

    /**
     * @var CompositeType $composite
     */
    protected $composite = null;

    /**
     * @param CompositeType $composite
     */
    public function __construct($composite)
    {
      $this->composite = $composite;
    }

    /**
     * @return CompositeType
     */
    public function getComposite()
    {
      return $this->composite;
    }

    /**
     * @param CompositeType $composite
     * @return GetDataUsingDataContract
     */
    public function setComposite($composite)
    {
      $this->composite = $composite;
      return $this;
    }

}
