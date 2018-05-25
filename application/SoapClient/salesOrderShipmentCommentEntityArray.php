<?php

class salesOrderShipmentCommentEntityArray
{

    /**
     * @var salesOrderShipmentCommentEntity[] $salesOrderShipmentCommentEntityArray
     */
    protected $salesOrderShipmentCommentEntityArray = null;

    /**
     * @param salesOrderShipmentCommentEntity[] $salesOrderShipmentCommentEntityArray
     */
    public function __construct(array $salesOrderShipmentCommentEntityArray)
    {
      $this->salesOrderShipmentCommentEntityArray = $salesOrderShipmentCommentEntityArray;
    }

    /**
     * @return salesOrderShipmentCommentEntity[]
     */
    public function getSalesOrderShipmentCommentEntityArray()
    {
      return $this->salesOrderShipmentCommentEntityArray;
    }

    /**
     * @param salesOrderShipmentCommentEntity[] $salesOrderShipmentCommentEntityArray
     * @return salesOrderShipmentCommentEntityArray
     */
    public function setSalesOrderShipmentCommentEntityArray(array $salesOrderShipmentCommentEntityArray)
    {
      $this->salesOrderShipmentCommentEntityArray = $salesOrderShipmentCommentEntityArray;
      return $this;
    }

}
