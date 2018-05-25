<?php

class catalogProductAttributeMediaCreateEntity
{

    /**
     * @var catalogProductImageFileEntity $file
     */
    protected $file = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $position
     */
    protected $position = null;

    /**
     * @var ArrayOfString $types
     */
    protected $types = null;

    /**
     * @var string $exclude
     */
    protected $exclude = null;

    /**
     * @var string $remove
     */
    protected $remove = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return catalogProductImageFileEntity
     */
    public function getFile()
    {
      return $this->file;
    }

    /**
     * @param catalogProductImageFileEntity $file
     * @return catalogProductAttributeMediaCreateEntity
     */
    public function setFile($file)
    {
      $this->file = $file;
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
     * @return catalogProductAttributeMediaCreateEntity
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param string $position
     * @return catalogProductAttributeMediaCreateEntity
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getTypes()
    {
      return $this->types;
    }

    /**
     * @param ArrayOfString $types
     * @return catalogProductAttributeMediaCreateEntity
     */
    public function setTypes($types)
    {
      $this->types = $types;
      return $this;
    }

    /**
     * @return string
     */
    public function getExclude()
    {
      return $this->exclude;
    }

    /**
     * @param string $exclude
     * @return catalogProductAttributeMediaCreateEntity
     */
    public function setExclude($exclude)
    {
      $this->exclude = $exclude;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemove()
    {
      return $this->remove;
    }

    /**
     * @param string $remove
     * @return catalogProductAttributeMediaCreateEntity
     */
    public function setRemove($remove)
    {
      $this->remove = $remove;
      return $this;
    }

}
