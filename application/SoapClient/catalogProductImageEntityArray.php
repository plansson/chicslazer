<?php

class catalogProductImageEntityArray
{

    /**
     * @var catalogProductImageEntity[] $catalogProductImageEntityArray
     */
    protected $catalogProductImageEntityArray = null;

    /**
     * @param catalogProductImageEntity[] $catalogProductImageEntityArray
     */
    public function __construct(array $catalogProductImageEntityArray)
    {
      $this->catalogProductImageEntityArray = $catalogProductImageEntityArray;
    }

    /**
     * @return catalogProductImageEntity[]
     */
    public function getCatalogProductImageEntityArray()
    {
      return $this->catalogProductImageEntityArray;
    }

    /**
     * @param catalogProductImageEntity[] $catalogProductImageEntityArray
     * @return catalogProductImageEntityArray
     */
    public function setCatalogProductImageEntityArray(array $catalogProductImageEntityArray)
    {
      $this->catalogProductImageEntityArray = $catalogProductImageEntityArray;
      return $this;
    }

}
