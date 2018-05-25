<?php

class salesOrderCreditmemoData
{

    /**
     * @var orderItemIdQtyArray $qtys
     */
    protected $qtys = null;

    /**
     * @var float $shipping_amount
     */
    protected $shipping_amount = null;

    /**
     * @var float $adjustment_positive
     */
    protected $adjustment_positive = null;

    /**
     * @var float $adjustment_negative
     */
    protected $adjustment_negative = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return orderItemIdQtyArray
     */
    public function getQtys()
    {
      return $this->qtys;
    }

    /**
     * @param orderItemIdQtyArray $qtys
     * @return salesOrderCreditmemoData
     */
    public function setQtys($qtys)
    {
      $this->qtys = $qtys;
      return $this;
    }

    /**
     * @return float
     */
    public function getShipping_amount()
    {
      return $this->shipping_amount;
    }

    /**
     * @param float $shipping_amount
     * @return salesOrderCreditmemoData
     */
    public function setShipping_amount($shipping_amount)
    {
      $this->shipping_amount = $shipping_amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdjustment_positive()
    {
      return $this->adjustment_positive;
    }

    /**
     * @param float $adjustment_positive
     * @return salesOrderCreditmemoData
     */
    public function setAdjustment_positive($adjustment_positive)
    {
      $this->adjustment_positive = $adjustment_positive;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdjustment_negative()
    {
      return $this->adjustment_negative;
    }

    /**
     * @param float $adjustment_negative
     * @return salesOrderCreditmemoData
     */
    public function setAdjustment_negative($adjustment_negative)
    {
      $this->adjustment_negative = $adjustment_negative;
      return $this;
    }

}
