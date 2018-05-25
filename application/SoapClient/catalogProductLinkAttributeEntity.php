<?php

class catalogProductLinkAttributeEntity
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return catalogProductLinkAttributeEntity
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return catalogProductLinkAttributeEntity
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
