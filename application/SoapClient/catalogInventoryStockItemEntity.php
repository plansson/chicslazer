<?php

class catalogInventoryStockItemEntity
{

    /**
     * @var string $product_id
     */
    protected $product_id = null;

    /**
     * @var string $sku
     */
    protected $sku = null;

    /**
     * @var string $qty
     */
    protected $qty = null;

    /**
     * @var string $is_in_stock
     */
    protected $is_in_stock = null;

    
    public function __construct()
    {
    
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
     * @return catalogInventoryStockItemEntity
     */
    public function setProduct_id($product_id)
    {
      $this->product_id = $product_id;
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
     * @return catalogInventoryStockItemEntity
     */
    public function setSku($sku)
    {
      $this->sku = $sku;
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
     * @return catalogInventoryStockItemEntity
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

    /**
     * @return string
     */
    public function getIs_in_stock()
    {
      return $this->is_in_stock;
    }

    /**
     * @param string $is_in_stock
     * @return catalogInventoryStockItemEntity
     */
    public function setIs_in_stock($is_in_stock)
    {
      $this->is_in_stock = $is_in_stock;
      return $this;
    }

}
