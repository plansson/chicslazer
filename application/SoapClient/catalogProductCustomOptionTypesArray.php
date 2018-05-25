<?php

class catalogProductCustomOptionTypesArray
{

    /**
     * @var catalogProductCustomOptionTypesEntity[] $catalogProductCustomOptionTypesArray
     */
    protected $catalogProductCustomOptionTypesArray = null;

    /**
     * @param catalogProductCustomOptionTypesEntity[] $catalogProductCustomOptionTypesArray
     */
    public function __construct(array $catalogProductCustomOptionTypesArray)
    {
      $this->catalogProductCustomOptionTypesArray = $catalogProductCustomOptionTypesArray;
    }

    /**
     * @return catalogProductCustomOptionTypesEntity[]
     */
    public function getCatalogProductCustomOptionTypesArray()
    {
      return $this->catalogProductCustomOptionTypesArray;
    }

    /**
     * @param catalogProductCustomOptionTypesEntity[] $catalogProductCustomOptionTypesArray
     * @return catalogProductCustomOptionTypesArray
     */
    public function setCatalogProductCustomOptionTypesArray(array $catalogProductCustomOptionTypesArray)
    {
      $this->catalogProductCustomOptionTypesArray = $catalogProductCustomOptionTypesArray;
      return $this;
    }

}
