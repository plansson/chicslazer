<?php

class catalogProductDownloadableLinkFileEntity
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $base64_content
     */
    protected $base64_content = null;

    
    public function __construct()
    {
    
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
     * @return catalogProductDownloadableLinkFileEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase64_content()
    {
      return $this->base64_content;
    }

    /**
     * @param string $base64_content
     * @return catalogProductDownloadableLinkFileEntity
     */
    public function setBase64_content($base64_content)
    {
      $this->base64_content = $base64_content;
      return $this;
    }

}
