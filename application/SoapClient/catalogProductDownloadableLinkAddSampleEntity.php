<?php

class catalogProductDownloadableLinkAddSampleEntity
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var catalogProductDownloadableLinkFileEntity $file
     */
    protected $file = null;

    /**
     * @var string $url
     */
    protected $url = null;

    
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
     * @return catalogProductDownloadableLinkAddSampleEntity
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return catalogProductDownloadableLinkFileEntity
     */
    public function getFile()
    {
      return $this->file;
    }

    /**
     * @param catalogProductDownloadableLinkFileEntity $file
     * @return catalogProductDownloadableLinkAddSampleEntity
     */
    public function setFile($file)
    {
      $this->file = $file;
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
     * @return catalogProductDownloadableLinkAddSampleEntity
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
