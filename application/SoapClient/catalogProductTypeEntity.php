<?php

class catalogProductTypeEntity
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $label
     */
    protected $label = null;

    
    public function __construct()
    {
    
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
     * @return catalogProductTypeEntity
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return catalogProductTypeEntity
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
