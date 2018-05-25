<?php

class associativeArray
{

    /**
     * @var associativeEntity[] $associativeArray
     */
    protected $associativeArray = null;

    /**
     * @param associativeEntity[] $associativeArray
     */
    public function __construct(array $associativeArray)
    {
      $this->associativeArray = $associativeArray;
    }

    /**
     * @return associativeEntity[]
     */
    public function getAssociativeArray()
    {
      return $this->associativeArray;
    }

    /**
     * @param associativeEntity[] $associativeArray
     * @return associativeArray
     */
    public function setAssociativeArray(array $associativeArray)
    {
      $this->associativeArray = $associativeArray;
      return $this;
    }

}
