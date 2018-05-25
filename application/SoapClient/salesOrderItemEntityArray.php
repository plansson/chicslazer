<?php

class salesOrderItemEntityArray
{

    /**
     * @var salesOrderItemEntity[] $salesOrderItemEntityArray
     */
    protected $salesOrderItemEntityArray = null;

    /**
     * @param salesOrderItemEntity[] $salesOrderItemEntityArray
     */
    public function __construct(array $salesOrderItemEntityArray)
    {
      $this->salesOrderItemEntityArray = $salesOrderItemEntityArray;
    }

    /**
     * @return salesOrderItemEntity[]
     */
    public function getSalesOrderItemEntityArray()
    {
      return $this->salesOrderItemEntityArray;
    }

    /**
     * @param salesOrderItemEntity[] $salesOrderItemEntityArray
     * @return salesOrderItemEntityArray
     */
    public function setSalesOrderItemEntityArray(array $salesOrderItemEntityArray)
    {
      $this->salesOrderItemEntityArray = $salesOrderItemEntityArray;
      return $this;
    }

}
