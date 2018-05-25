<?php

class catalogProductRequestAttributes
{

    /**
     * @var ArrayOfString $attributes
     */
    protected $attributes = null;

    /**
     * @var ArrayOfString $additional_attributes
     */
    protected $additional_attributes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getAttributes()
    {
      return $this->attributes;
    }

    /**
     * @param ArrayOfString $attributes
     * @return catalogProductRequestAttributes
     */
    public function setAttributes($attributes)
    {
      $this->attributes = $attributes;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getAdditional_attributes()
    {
      return $this->additional_attributes;
    }

    /**
     * @param ArrayOfString $additional_attributes
     * @return catalogProductRequestAttributes
     */
    public function setAdditional_attributes($additional_attributes)
    {
      $this->additional_attributes = $additional_attributes;
      return $this;
    }

}
