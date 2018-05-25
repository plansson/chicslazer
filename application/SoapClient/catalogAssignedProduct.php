<?php

class catalogAssignedProduct
{

    /**
     * @var int $product_id
     */
    protected $product_id = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $set
     */
    protected $set = null;

    /**
     * @var string $sku
     */
    protected $sku = null;

    /**
     * @var int $position
     */
    protected $position = null;

    /**
     * @param int $product_id
     * @param string $type
     * @param int $set
     * @param string $sku
     * @param int $position
     */
    public function __construct($product_id, $type, $set, $sku, $position)
    {
      $this->product_id = $product_id;
      $this->type = $type;
      $this->set = $set;
      $this->sku = $sku;
      $this->position = $position;
    }

    /**
     * @return int
     */
    public function getProduct_id()
    {
      return $this->product_id;
    }

    /**
     * @param int $product_id
     * @return catalogAssignedProduct
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
     * @return catalogAssignedProduct
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getSet()
    {
      return $this->set;
    }

    /**
     * @param int $set
     * @return catalogAssignedProduct
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
     * @return catalogAssignedProduct
     */
    public function setSku($sku)
    {
      $this->sku = $sku;
      return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param int $position
     * @return catalogAssignedProduct
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

}
