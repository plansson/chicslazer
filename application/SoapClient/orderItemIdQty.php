<?php

class orderItemIdQty
{

    /**
     * @var int $order_item_id
     */
    protected $order_item_id = null;

    /**
     * @var float $qty
     */
    protected $qty = null;

    /**
     * @param int $order_item_id
     * @param float $qty
     */
    public function __construct($order_item_id, $qty)
    {
      $this->order_item_id = $order_item_id;
      $this->qty = $qty;
    }

    /**
     * @return int
     */
    public function getOrder_item_id()
    {
      return $this->order_item_id;
    }

    /**
     * @param int $order_item_id
     * @return orderItemIdQty
     */
    public function setOrder_item_id($order_item_id)
    {
      $this->order_item_id = $order_item_id;
      return $this;
    }

    /**
     * @return float
     */
    public function getQty()
    {
      return $this->qty;
    }

    /**
     * @param float $qty
     * @return orderItemIdQty
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

}
