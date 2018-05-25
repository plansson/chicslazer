<?php

class catalogInventoryStockItemEntityArray
{

    /**
     * @var catalogInventoryStockItemEntity[] $catalogInventoryStockItemEntityArray
     */
    protected $catalogInventoryStockItemEntityArray = null;

    /**
     * @param catalogInventoryStockItemEntity[] $catalogInventoryStockItemEntityArray
     */
    public function __construct(array $catalogInventoryStockItemEntityArray)
    {
      $this->catalogInventoryStockItemEntityArray = $catalogInventoryStockItemEntityArray;
    }

    /**
     * @return catalogInventoryStockItemEntity[]
     */
    public function getCatalogInventoryStockItemEntityArray()
    {
      return $this->catalogInventoryStockItemEntityArray;
    }

    /**
     * @param catalogInventoryStockItemEntity[] $catalogInventoryStockItemEntityArray
     * @return catalogInventoryStockItemEntityArray
     */
    public function setCatalogInventoryStockItemEntityArray(array $catalogInventoryStockItemEntityArray)
    {
      $this->catalogInventoryStockItemEntityArray = $catalogInventoryStockItemEntityArray;
      return $this;
    }

}
