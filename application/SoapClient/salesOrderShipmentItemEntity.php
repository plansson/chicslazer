<?php

class salesOrderShipmentItemEntity
{

    /**
     * @var string $increment_id
     */
    protected $increment_id = null;

    /**
     * @var string $parent_id
     */
    protected $parent_id = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $updated_at
     */
    protected $updated_at = null;

    /**
     * @var string $is_active
     */
    protected $is_active = null;

    /**
     * @var string $sku
     */
    protected $sku = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $order_item_id
     */
    protected $order_item_id = null;

    /**
     * @var string $product_id
     */
    protected $product_id = null;

    /**
     * @var string $weight
     */
    protected $weight = null;

    /**
     * @var string $price
     */
    protected $price = null;

    /**
     * @var string $qty
     */
    protected $qty = null;

    /**
     * @var string $item_id
     */
    protected $item_id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getIncrement_id()
    {
      return $this->increment_id;
    }

    /**
     * @param string $increment_id
     * @return salesOrderShipmentItemEntity
     */
    public function setIncrement_id($increment_id)
    {
      $this->increment_id = $increment_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getParent_id()
    {
      return $this->parent_id;
    }

    /**
     * @param string $parent_id
     * @return salesOrderShipmentItemEntity
     */
    public function setParent_id($parent_id)
    {
      $this->parent_id = $parent_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreated_at()
    {
      return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return salesOrderShipmentItemEntity
     */
    public function setCreated_at($created_at)
    {
      $this->created_at = $created_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpdated_at()
    {
      return $this->updated_at;
    }

    /**
     * @param string $updated_at
     * @return salesOrderShipmentItemEntity
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getIs_active()
    {
      return $this->is_active;
    }

    /**
     * @param string $is_active
     * @return salesOrderShipmentItemEntity
     */
    public function setIs_active($is_active)
    {
      $this->is_active = $is_active;
      return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
      return $this->sku;
    }

    /**
     * @param string $sku
     * @return salesOrderShipmentItemEntity
     */
    public function setSku($sku)
    {
      $this->sku = $sku;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return salesOrderShipmentItemEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder_item_id()
    {
      return $this->order_item_id;
    }

    /**
     * @param string $order_item_id
     * @return salesOrderShipmentItemEntity
     */
    public function setOrder_item_id($order_item_id)
    {
      $this->order_item_id = $order_item_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getProduct_id()
    {
      return $this->product_id;
    }

    /**
     * @param string $product_id
     * @return salesOrderShipmentItemEntity
     */
    public function setProduct_id($product_id)
    {
      $this->product_id = $product_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param string $weight
     * @return salesOrderShipmentItemEntity
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param string $price
     * @return salesOrderShipmentItemEntity
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getQty()
    {
      return $this->qty;
    }

    /**
     * @param string $qty
     * @return salesOrderShipmentItemEntity
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

    /**
     * @return string
     */
    public function getItem_id()
    {
      return $this->item_id;
    }

    /**
     * @param string $item_id
     * @return salesOrderShipmentItemEntity
     */
    public function setItem_id($item_id)
    {
      $this->item_id = $item_id;
      return $this;
    }

}
