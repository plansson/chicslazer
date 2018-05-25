<?php

class apiMethodEntity
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $path
     */
    protected $path = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var ArrayOfString $aliases
     */
    protected $aliases = null;

    /**
     * @param string $title
     * @param string $path
     * @param string $name
     * @param ArrayOfString $aliases
     */
    public function __construct($title, $path, $name, $aliases)
    {
      $this->title = $title;
      $this->path = $path;
      $this->name = $name;
      $this->aliases = $aliases;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return apiMethodEntity
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
      return $this->path;
    }

    /**
     * @param string $path
     * @return apiMethodEntity
     */
    public function setPath($path)
    {
      $this->path = $path;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return apiMethodEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getAliases()
    {
      return $this->aliases;
    }

    /**
     * @param ArrayOfString $aliases
     * @return apiMethodEntity
     */
    public function setAliases($aliases)
    {
      $this->aliases = $aliases;
      return $this;
    }

}
