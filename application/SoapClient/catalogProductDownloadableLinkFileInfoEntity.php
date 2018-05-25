<?php

class catalogProductDownloadableLinkFileInfoEntity
{

    /**
     * @var string $file
     */
    protected $file = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $size
     */
    protected $size = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param string $file
     * @param string $name
     * @param int $size
     * @param string $status
     */
    public function __construct($file, $name, $size, $status)
    {
      $this->file = $file;
      $this->name = $name;
      $this->size = $size;
      $this->status = $status;
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
     * @return catalogProductDownloadableLinkFileInfoEntity
     */
    public function setFile($file)
    {
      $this->file = $file;
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
     * @return catalogProductDownloadableLinkFileInfoEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param int $size
     * @return catalogProductDownloadableLinkFileInfoEntity
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return catalogProductDownloadableLinkFileInfoEntity
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
