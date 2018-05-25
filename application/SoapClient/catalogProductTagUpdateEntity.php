<?php

class catalogProductTagUpdateEntity
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $base_popularity
     */
    protected $base_popularity = null;

    
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
     * @return catalogProductTagUpdateEntity
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return catalogProductTagUpdateEntity
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_popularity()
    {
      return $this->base_popularity;
    }

    /**
     * @param string $base_popularity
     * @return catalogProductTagUpdateEntity
     */
    public function setBase_popularity($base_popularity)
    {
      $this->base_popularity = $base_popularity;
      return $this;
    }

}
