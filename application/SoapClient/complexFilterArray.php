<?php

class complexFilterArray
{

    /**
     * @var complexFilter[] $complexFilterArray
     */
    protected $complexFilterArray = null;

    /**
     * @param complexFilter[] $complexFilterArray
     */
    public function __construct(array $complexFilterArray)
    {
      $this->complexFilterArray = $complexFilterArray;
    }

    /**
     * @return complexFilter[]
     */
    public function getComplexFilterArray()
    {
      return $this->complexFilterArray;
    }

    /**
     * @param complexFilter[] $complexFilterArray
     * @return complexFilterArray
     */
    public function setComplexFilterArray(array $complexFilterArray)
    {
      $this->complexFilterArray = $complexFilterArray;
      return $this;
    }

}
