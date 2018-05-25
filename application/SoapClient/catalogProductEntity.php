<?php

class catalogProductEntity
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
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $set
     */
    protected $set = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var ArrayOfString $category_ids
     */
    protected $category_ids = null;

    /**
     * @var ArrayOfString $website_ids
     */
    protected $website_ids = null;

    /**
     * @param string $product_id
     * @param string $sku
     * @param string $name
     * @param string $set
     * @param string $type
     * @param ArrayOfString $category_ids
     * @param ArrayOfString $website_ids
     */
    public function __construct($product_id, $sku, $name, $set, $type, $category_ids, $website_ids)
    {
      $this->product_id = $product_id;
      $this->sku = $sku;
      $this->name = $name;
      $this->set = $set;
      $this->type = $type;
      $this->category_ids = $category_ids;
      $this->website_ids = $website_ids;
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
     * @return catalogProductEntity
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
     * @return catalogProductEntity
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
     * @return catalogProductEntity
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return catalogProductEntity
     */
    public function setSet($set)
    {
      $this->set = $set;
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
     * @return catalogProductEntity
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getCategory_ids()
    {
      return $this->category_ids;
    }

    /**
     * @param ArrayOfString $category_ids
     * @return catalogProductEntity
     */
    public function setCategory_ids($category_ids)
    {
      $this->category_ids = $category_ids;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getWebsite_ids()
    {
      return $this->website_ids;
    }

    /**
     * @param ArrayOfString $website_ids
     * @return catalogProductEntity
     */
    public function setWebsite_ids($website_ids)
    {
      $this->website_ids = $website_ids;
      return $this;
    }

}
