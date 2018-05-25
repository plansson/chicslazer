<?php

class catalogProductImageFileEntity
{

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var string $mime
     */
    protected $mime = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $content
     * @param string $mime
     */
    public function __construct($content, $mime)
    {
      $this->content = $content;
      $this->mime = $mime;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return catalogProductImageFileEntity
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return string
     */
    public function getMime()
    {
      return $this->mime;
    }

    /**
     * @param string $mime
     * @return catalogProductImageFileEntity
     */
    public function setMime($mime)
    {
      $this->mime = $mime;
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
     * @return catalogProductImageFileEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
