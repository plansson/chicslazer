<?php

class catalogAttributeOptionEntity
{

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $label
     * @param string $value
     */
    public function __construct($label, $value)
    {
      $this->label = $label;
      $this->value = $value;
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
     * @return catalogAttributeOptionEntity
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
     * @return catalogAttributeOptionEntity
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
