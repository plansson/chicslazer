<?php

class directoryCountryEntityArray
{

    /**
     * @var directoryCountryEntity[] $directoryCountryEntityArray
     */
    protected $directoryCountryEntityArray = null;

    /**
     * @param directoryCountryEntity[] $directoryCountryEntityArray
     */
    public function __construct(array $directoryCountryEntityArray)
    {
      $this->directoryCountryEntityArray = $directoryCountryEntityArray;
    }

    /**
     * @return directoryCountryEntity[]
     */
    public function getDirectoryCountryEntityArray()
    {
      return $this->directoryCountryEntityArray;
    }

    /**
     * @param directoryCountryEntity[] $directoryCountryEntityArray
     * @return directoryCountryEntityArray
     */
    public function setDirectoryCountryEntityArray(array $directoryCountryEntityArray)
    {
      $this->directoryCountryEntityArray = $directoryCountryEntityArray;
      return $this;
    }

}
