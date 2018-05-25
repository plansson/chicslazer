<?php

class catalogInventoryStockItemUpdateEntityArray
{

    /**
     * @var catalogInventoryStockItemUpdateEntity[] $catalogInventoryStockItemUpdateEntityArray
     */
    protected $catalogInventoryStockItemUpdateEntityArray = null;

    /**
     * @param catalogInventoryStockItemUpdateEntity[] $catalogInventoryStockItemUpdateEntityArray
     */
    public function __construct(array $catalogInventoryStockItemUpdateEntityArray)
    {
      $this->catalogInventoryStockItemUpdateEntityArray = $catalogInventoryStockItemUpdateEntityArray;
    }

    /**
     * @return catalogInventoryStockItemUpdateEntity[]
     */
    public function getCatalogInventoryStockItemUpdateEntityArray()
    {
      return $this->catalogInventoryStockItemUpdateEntityArray;
    }

    /**
     * @param catalogInventoryStockItemUpdateEntity[] $catalogInventoryStockItemUpdateEntityArray
     * @return catalogInventoryStockItemUpdateEntityArray
     */
    public function setCatalogInventoryStockItemUpdateEntityArray(array $catalogInventoryStockItemUpdateEntityArray)
    {
      $this->catalogInventoryStockItemUpdateEntityArray = $catalogInventoryStockItemUpdateEntityArray;
      return $this;
    }

}
