<?php

class catalogProductEntityArray
{

    /**
     * @var catalogProductEntity[] $catalogProductEntityArray
     */
    protected $catalogProductEntityArray = null;

    /**
     * @param catalogProductEntity[] $catalogProductEntityArray
     */
    public function __construct(array $catalogProductEntityArray)
    {
      $this->catalogProductEntityArray = $catalogProductEntityArray;
    }

    /**
     * @return catalogProductEntity[]
     */
    public function getCatalogProductEntityArray()
    {
      return $this->catalogProductEntityArray;
    }

    /**
     * @param catalogProductEntity[] $catalogProductEntityArray
     * @return catalogProductEntityArray
     */
    public function setCatalogProductEntityArray(array $catalogProductEntityArray)
    {
      $this->catalogProductEntityArray = $catalogProductEntityArray;
      return $this;
    }

}
