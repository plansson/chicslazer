<?php

class salesOrderShipmentEntityArray
{

    /**
     * @var salesOrderShipmentEntity[] $salesOrderShipmentEntityArray
     */
    protected $salesOrderShipmentEntityArray = null;

    /**
     * @param salesOrderShipmentEntity[] $salesOrderShipmentEntityArray
     */
    public function __construct(array $salesOrderShipmentEntityArray)
    {
      $this->salesOrderShipmentEntityArray = $salesOrderShipmentEntityArray;
    }

    /**
     * @return salesOrderShipmentEntity[]
     */
    public function getSalesOrderShipmentEntityArray()
    {
      return $this->salesOrderShipmentEntityArray;
    }

    /**
     * @param salesOrderShipmentEntity[] $salesOrderShipmentEntityArray
     * @return salesOrderShipmentEntityArray
     */
    public function setSalesOrderShipmentEntityArray(array $salesOrderShipmentEntityArray)
    {
      $this->salesOrderShipmentEntityArray = $salesOrderShipmentEntityArray;
      return $this;
    }

}
