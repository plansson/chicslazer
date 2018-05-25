<?php

class directoryRegionEntityArray
{

    /**
     * @var directoryRegionEntity[] $directoryRegionEntityArray
     */
    protected $directoryRegionEntityArray = null;

    /**
     * @param directoryRegionEntity[] $directoryRegionEntityArray
     */
    public function __construct(array $directoryRegionEntityArray)
    {
      $this->directoryRegionEntityArray = $directoryRegionEntityArray;
    }

    /**
     * @return directoryRegionEntity[]
     */
    public function getDirectoryRegionEntityArray()
    {
      return $this->directoryRegionEntityArray;
    }

    /**
     * @param directoryRegionEntity[] $directoryRegionEntityArray
     * @return directoryRegionEntityArray
     */
    public function setDirectoryRegionEntityArray(array $directoryRegionEntityArray)
    {
      $this->directoryRegionEntityArray = $directoryRegionEntityArray;
      return $this;
    }

}
