<?php

class salesOrderShipmentItemEntityArray
{

    /**
     * @var salesOrderShipmentItemEntity[] $salesOrderShipmentItemEntityArray
     */
    protected $salesOrderShipmentItemEntityArray = null;

    /**
     * @param salesOrderShipmentItemEntity[] $salesOrderShipmentItemEntityArray
     */
    public function __construct(array $salesOrderShipmentItemEntityArray)
    {
      $this->salesOrderShipmentItemEntityArray = $salesOrderShipmentItemEntityArray;
    }

    /**
     * @return salesOrderShipmentItemEntity[]
     */
    public function getSalesOrderShipmentItemEntityArray()
    {
      return $this->salesOrderShipmentItemEntityArray;
    }

    /**
     * @param salesOrderShipmentItemEntity[] $salesOrderShipmentItemEntityArray
     * @return salesOrderShipmentItemEntityArray
     */
    public function setSalesOrderShipmentItemEntityArray(array $salesOrderShipmentItemEntityArray)
    {
      $this->salesOrderShipmentItemEntityArray = $salesOrderShipmentItemEntityArray;
      return $this;
    }

}
