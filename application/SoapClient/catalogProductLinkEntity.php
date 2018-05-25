<?php

class catalogProductLinkEntity
{

    /**
     * @var string $product_id
     */
    protected $product_id = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $set
     */
    protected $set = null;

    /**
     * @var string $sku
     */
    protected $sku = null;

    /**
     * @var string $position
     */
    protected $position = null;

    /**
     * @var string $qty
     */
    protected $qty = null;

    
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
     * @return catalogProductLinkEntity
     */
    public function setProduct_id($product_id)
    {
      $this->product_id = $product_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return catalogProductLinkEntity
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getSet()
    {
      return $this->set;
    }

    /**
     * @param string $set
     * @return catalogProductLinkEntity
     */
    public function setSet($set)
    {
      $this->set = $set;
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
     * @return catalogProductLinkEntity
     */
    public function setSku($sku)
    {
      $this->sku = $sku;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param string $position
     * @return catalogProductLinkEntity
     */
    public function setPosition($position)
    {
      $this->position = $position;
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
     * @return catalogProductLinkEntity
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

}
