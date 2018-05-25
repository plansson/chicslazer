<?php

class giftMessageResponse
{

    /**
     * @var string $entityId
     */
    protected $entityId = null;

    /**
     * @var boolean $result
     */
    protected $result = null;

    /**
     * @var string $error
     */
    protected $error = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEntityId()
    {
      return $this->entityId;
    }

    /**
     * @param string $entityId
     * @return giftMessageResponse
     */
    public function setEntityId($entityId)
    {
      $this->entityId = $entityId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param boolean $result
     * @return giftMessageResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param string $error
     * @return giftMessageResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
