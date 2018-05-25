<?php

class associativeMultiArray
{

    /**
     * @var associativeMultiEntity[] $associativeMultiArray
     */
    protected $associativeMultiArray = null;

    /**
     * @param associativeMultiEntity[] $associativeMultiArray
     */
    public function __construct(array $associativeMultiArray)
    {
      $this->associativeMultiArray = $associativeMultiArray;
    }

    /**
     * @return associativeMultiEntity[]
     */
    public function getAssociativeMultiArray()
    {
      return $this->associativeMultiArray;
    }

    /**
     * @param associativeMultiEntity[] $associativeMultiArray
     * @return associativeMultiArray
     */
    public function setAssociativeMultiArray(array $associativeMultiArray)
    {
      $this->associativeMultiArray = $associativeMultiArray;
      return $this;
    }

}
