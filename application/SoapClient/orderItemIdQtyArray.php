<?php

class orderItemIdQtyArray
{

    /**
     * @var orderItemIdQty[] $orderItemIdQtyArray
     */
    protected $orderItemIdQtyArray = null;

    /**
     * @param orderItemIdQty[] $orderItemIdQtyArray
     */
    public function __construct(array $orderItemIdQtyArray)
    {
      $this->orderItemIdQtyArray = $orderItemIdQtyArray;
    }

    /**
     * @return orderItemIdQty[]
     */
    public function getOrderItemIdQtyArray()
    {
      return $this->orderItemIdQtyArray;
    }

    /**
     * @param orderItemIdQty[] $orderItemIdQtyArray
     * @return orderItemIdQtyArray
     */
    public function setOrderItemIdQtyArray(array $orderItemIdQtyArray)
    {
      $this->orderItemIdQtyArray = $orderItemIdQtyArray;
      return $this;
    }

}
