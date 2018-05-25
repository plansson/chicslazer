<?php

class salesOrderListEntityArray
{

    /**
     * @var salesOrderListEntity[] $salesOrderListEntityArray
     */
    protected $salesOrderListEntityArray = null;

    /**
     * @param salesOrderListEntity[] $salesOrderListEntityArray
     */
    public function __construct(array $salesOrderListEntityArray)
    {
      $this->salesOrderListEntityArray = $salesOrderListEntityArray;
    }

    /**
     * @return salesOrderListEntity[]
     */
    public function getSalesOrderListEntityArray()
    {
      return $this->salesOrderListEntityArray;
    }

    /**
     * @param salesOrderListEntity[] $salesOrderListEntityArray
     * @return salesOrderListEntityArray
     */
    public function setSalesOrderListEntityArray(array $salesOrderListEntityArray)
    {
      $this->salesOrderListEntityArray = $salesOrderListEntityArray;
      return $this;
    }

}
