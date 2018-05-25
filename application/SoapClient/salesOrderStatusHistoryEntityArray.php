<?php

class salesOrderStatusHistoryEntityArray
{

    /**
     * @var salesOrderStatusHistoryEntity[] $salesOrderStatusHistoryEntityArray
     */
    protected $salesOrderStatusHistoryEntityArray = null;

    /**
     * @param salesOrderStatusHistoryEntity[] $salesOrderStatusHistoryEntityArray
     */
    public function __construct(array $salesOrderStatusHistoryEntityArray)
    {
      $this->salesOrderStatusHistoryEntityArray = $salesOrderStatusHistoryEntityArray;
    }

    /**
     * @return salesOrderStatusHistoryEntity[]
     */
    public function getSalesOrderStatusHistoryEntityArray()
    {
      return $this->salesOrderStatusHistoryEntityArray;
    }

    /**
     * @param salesOrderStatusHistoryEntity[] $salesOrderStatusHistoryEntityArray
     * @return salesOrderStatusHistoryEntityArray
     */
    public function setSalesOrderStatusHistoryEntityArray(array $salesOrderStatusHistoryEntityArray)
    {
      $this->salesOrderStatusHistoryEntityArray = $salesOrderStatusHistoryEntityArray;
      return $this;
    }

}
