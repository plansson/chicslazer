<?php

class catalogProductCustomOptionValueAddEntity
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $price
     */
    protected $price = null;

    /**
     * @var string $price_type
     */
    protected $price_type = null;

    /**
     * @var string $sku
     */
    protected $sku = null;

    /**
     * @var string $sort_order
     */
    protected $sort_order = null;

    /**
     * @param string $title
     * @param string $price
     * @param string $price_type
     * @param string $sku
     */
    public function __construct($title, $price, $price_type, $sku)
    {
      $this->title = $title;
      $this->price = $price;
      $this->price_type = $price_type;
      $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return catalogProductCustomOptionValueAddEntity
     */
    public function setTitle($title)
    {
      $this->title = $title;
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
     * @return catalogProductCustomOptionValueAddEntity
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrice_type()
    {
      return $this->price_type;
    }

    /**
     * @param string $price_type
     * @return catalogProductCustomOptionValueAddEntity
     */
    public function setPrice_type($price_type)
    {
      $this->price_type = $price_type;
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
     * @return catalogProductCustomOptionValueAddEntity
     */
    public function setSku($sku)
    {
      $this->sku = $sku;
      return $this;
    }

    /**
     * @return string
     */
    public function getSort_order()
    {
      return $this->sort_order;
    }

    /**
     * @param string $sort_order
     * @return catalogProductCustomOptionValueAddEntity
     */
    public function setSort_order($sort_order)
    {
      $this->sort_order = $sort_order;
      return $this;
    }

}
