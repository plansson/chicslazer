<?php

class apiEntity
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var ArrayOfString $aliases
     */
    protected $aliases = null;

    /**
     * @var ArrayOfApiMethods $methods
     */
    protected $methods = null;

    /**
     * @param string $title
     * @param string $name
     * @param ArrayOfString $aliases
     * @param ArrayOfApiMethods $methods
     */
    public function __construct($title, $name, $aliases, $methods)
    {
      $this->title = $title;
      $this->name = $name;
      $this->aliases = $aliases;
      $this->methods = $methods;
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
     * @return apiEntity
     */
    public function setTitle($title)
    {
      $this->title = $title;
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
     * @return apiEntity
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
     * @return apiEntity
     */
    public function setAliases($aliases)
    {
      $this->aliases = $aliases;
      return $this;
    }

    /**
     * @return ArrayOfApiMethods
     */
    public function getMethods()
    {
      return $this->methods;
    }

    /**
     * @param ArrayOfApiMethods $methods
     * @return apiEntity
     */
    public function setMethods($methods)
    {
      $this->methods = $methods;
      return $this;
    }

}
