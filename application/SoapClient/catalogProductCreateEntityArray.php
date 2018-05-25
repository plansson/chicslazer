<?php

class catalogProductCreateEntityArray
{

    /**
     * @var catalogProductCreateEntity[] $catalogProductCreateEntityArray
     */
    protected $catalogProductCreateEntityArray = null;

    /**
     * @param catalogProductCreateEntity[] $catalogProductCreateEntityArray
     */
    public function __construct(array $catalogProductCreateEntityArray)
    {
      $this->catalogProductCreateEntityArray = $catalogProductCreateEntityArray;
    }

    /**
     * @return catalogProductCreateEntity[]
     */
    public function getCatalogProductCreateEntityArray()
    {
      return $this->catalogProductCreateEntityArray;
    }

    /**
     * @param catalogProductCreateEntity[] $catalogProductCreateEntityArray
     * @return catalogProductCreateEntityArray
     */
    public function setCatalogProductCreateEntityArray(array $catalogProductCreateEntityArray)
    {
      $this->catalogProductCreateEntityArray = $catalogProductCreateEntityArray;
      return $this;
    }

}
