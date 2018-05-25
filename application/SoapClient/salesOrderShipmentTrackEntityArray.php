<?php

class salesOrderShipmentTrackEntityArray
{

    /**
     * @var salesOrderShipmentTrackEntity[] $salesOrderShipmentTrackEntityArray
     */
    protected $salesOrderShipmentTrackEntityArray = null;

    /**
     * @param salesOrderShipmentTrackEntity[] $salesOrderShipmentTrackEntityArray
     */
    public function __construct(array $salesOrderShipmentTrackEntityArray)
    {
      $this->salesOrderShipmentTrackEntityArray = $salesOrderShipmentTrackEntityArray;
    }

    /**
     * @return salesOrderShipmentTrackEntity[]
     */
    public function getSalesOrderShipmentTrackEntityArray()
    {
      return $this->salesOrderShipmentTrackEntityArray;
    }

    /**
     * @param salesOrderShipmentTrackEntity[] $salesOrderShipmentTrackEntityArray
     * @return salesOrderShipmentTrackEntityArray
     */
    public function setSalesOrderShipmentTrackEntityArray(array $salesOrderShipmentTrackEntityArray)
    {
      $this->salesOrderShipmentTrackEntityArray = $salesOrderShipmentTrackEntityArray;
      return $this;
    }

}
