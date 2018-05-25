<?php

class catalogProductTagInfoEntity
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $base_popularity
     */
    protected $base_popularity = null;

    /**
     * @var associativeArray $products
     */
    protected $products = null;

    /**
     * @param string $name
     * @param string $status
     * @param string $base_popularity
     * @param associativeArray $products
     */
    public function __construct($name, $status, $base_popularity, $products)
    {
      $this->name = $name;
      $this->status = $status;
      $this->base_popularity = $base_popularity;
      $this->products = $products;
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
     * @return catalogProductTagInfoEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return catalogProductTagInfoEntity
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_popularity()
    {
      return $this->base_popularity;
    }

    /**
     * @param string $base_popularity
     * @return catalogProductTagInfoEntity
     */
    public function setBase_popularity($base_popularity)
    {
      $this->base_popularity = $base_popularity;
      return $this;
    }

    /**
     * @return associativeArray
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param associativeArray $products
     * @return catalogProductTagInfoEntity
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
