<?php

class directoryRegionEntity
{

    /**
     * @var string $region_id
     */
    protected $region_id = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $region_id
     * @param string $code
     * @param string $name
     */
    public function __construct($region_id, $code, $name)
    {
      $this->region_id = $region_id;
      $this->code = $code;
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getRegion_id()
    {
      return $this->region_id;
    }

    /**
     * @param string $region_id
     * @return directoryRegionEntity
     */
    public function setRegion_id($region_id)
    {
      $this->region_id = $region_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return directoryRegionEntity
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return directoryRegionEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
