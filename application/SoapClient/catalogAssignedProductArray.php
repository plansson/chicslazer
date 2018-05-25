<?php

class catalogAssignedProductArray
{

    /**
     * @var catalogAssignedProduct[] $catalogAssignedProductArray
     */
    protected $catalogAssignedProductArray = null;

    /**
     * @param catalogAssignedProduct[] $catalogAssignedProductArray
     */
    public function __construct(array $catalogAssignedProductArray)
    {
      $this->catalogAssignedProductArray = $catalogAssignedProductArray;
    }

    /**
     * @return catalogAssignedProduct[]
     */
    public function getCatalogAssignedProductArray()
    {
      return $this->catalogAssignedProductArray;
    }

    /**
     * @param catalogAssignedProduct[] $catalogAssignedProductArray
     * @return catalogAssignedProductArray
     */
    public function setCatalogAssignedProductArray(array $catalogAssignedProductArray)
    {
      $this->catalogAssignedProductArray = $catalogAssignedProductArray;
      return $this;
    }

}
