<?php

class catalogProductImageEntity
{

    /**
     * @var string $file
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
     * @var string $exclude
     */
    protected $exclude = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var ArrayOfString $types
     */
    protected $types = null;

    /**
     * @param string $file
     * @param string $label
     * @param string $position
     * @param string $exclude
     * @param string $url
     * @param ArrayOfString $types
     */
    public function __construct($file, $label, $position, $exclude, $url, $types)
    {
      $this->file = $file;
      $this->label = $label;
      $this->position = $position;
      $this->exclude = $exclude;
      $this->url = $url;
      $this->types = $types;
    }

    /**
     * @return string
     */
    public function getFile()
    {
      return $this->file;
    }

    /**
     * @param string $file
     * @return catalogProductImageEntity
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
     * @return catalogProductImageEntity
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
     * @return catalogProductImageEntity
     */
    public function setPosition($position)
    {
      $this->position = $position;
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
     * @return catalogProductImageEntity
     */
    public function setExclude($exclude)
    {
      $this->exclude = $exclude;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return catalogProductImageEntity
     */
    public function setUrl($url)
    {
      $this->url = $url;
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
     * @return catalogProductImageEntity
     */
    public function setTypes($types)
    {
      $this->types = $types;
      return $this;
    }

}
