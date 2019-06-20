<?php

class SetSageAccountIDRequest
{

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var string $SageAccountID
     */
    protected $SageAccountID = null;

    /**
     * @param int $CustomerID
     */
    public function __construct($CustomerID)
    {
      $this->CustomerID = $CustomerID;
    }

    /**
     * @return int
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param int $CustomerID
     * @return SetSageAccountIDRequest
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSageAccountID()
    {
      return $this->SageAccountID;
    }

    /**
     * @param string $SageAccountID
     * @return SetSageAccountIDRequest
     */
    public function setSageAccountID($SageAccountID)
    {
      $this->SageAccountID = $SageAccountID;
      return $this;
    }

}
