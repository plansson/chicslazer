<?php

class storeEntityArray
{

    /**
     * @var storeEntity[] $storeEntityArray
     */
    protected $storeEntityArray = null;

    /**
     * @param storeEntity[] $storeEntityArray
     */
    public function __construct(array $storeEntityArray)
    {
      $this->storeEntityArray = $storeEntityArray;
    }

    /**
     * @return storeEntity[]
     */
    public function getStoreEntityArray()
    {
      return $this->storeEntityArray;
    }

    /**
     * @param storeEntity[] $storeEntityArray
     * @return storeEntityArray
     */
    public function setStoreEntityArray(array $storeEntityArray)
    {
      $this->storeEntityArray = $storeEntityArray;
      return $this;
    }

}
