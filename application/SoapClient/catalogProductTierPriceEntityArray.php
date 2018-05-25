<?php

class catalogProductTierPriceEntityArray
{

    /**
     * @var catalogProductTierPriceEntity[] $catalogProductTierPriceEntityArray
     */
    protected $catalogProductTierPriceEntityArray = null;

    /**
     * @param catalogProductTierPriceEntity[] $catalogProductTierPriceEntityArray
     */
    public function __construct(array $catalogProductTierPriceEntityArray)
    {
      $this->catalogProductTierPriceEntityArray = $catalogProductTierPriceEntityArray;
    }

    /**
     * @return catalogProductTierPriceEntity[]
     */
    public function getCatalogProductTierPriceEntityArray()
    {
      return $this->catalogProductTierPriceEntityArray;
    }

    /**
     * @param catalogProductTierPriceEntity[] $catalogProductTierPriceEntityArray
     * @return catalogProductTierPriceEntityArray
     */
    public function setCatalogProductTierPriceEntityArray(array $catalogProductTierPriceEntityArray)
    {
      $this->catalogProductTierPriceEntityArray = $catalogProductTierPriceEntityArray;
      return $this;
    }

}
