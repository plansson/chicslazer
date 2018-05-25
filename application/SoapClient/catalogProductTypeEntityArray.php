<?php

class catalogProductTypeEntityArray
{

    /**
     * @var catalogProductTypeEntity[] $catalogProductTypeEntityArray
     */
    protected $catalogProductTypeEntityArray = null;

    /**
     * @param catalogProductTypeEntity[] $catalogProductTypeEntityArray
     */
    public function __construct(array $catalogProductTypeEntityArray)
    {
      $this->catalogProductTypeEntityArray = $catalogProductTypeEntityArray;
    }

    /**
     * @return catalogProductTypeEntity[]
     */
    public function getCatalogProductTypeEntityArray()
    {
      return $this->catalogProductTypeEntityArray;
    }

    /**
     * @param catalogProductTypeEntity[] $catalogProductTypeEntityArray
     * @return catalogProductTypeEntityArray
     */
    public function setCatalogProductTypeEntityArray(array $catalogProductTypeEntityArray)
    {
      $this->catalogProductTypeEntityArray = $catalogProductTypeEntityArray;
      return $this;
    }

}
