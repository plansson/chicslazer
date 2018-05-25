<?php

class catalogProductTagAddEntity
{

    /**
     * @var string $tag
     */
    protected $tag = null;

    /**
     * @var string $product_id
     */
    protected $product_id = null;

    /**
     * @var string $customer_id
     */
    protected $customer_id = null;

    /**
     * @var string $store
     */
    protected $store = null;

    /**
     * @param string $tag
     * @param string $product_id
     * @param string $customer_id
     * @param string $store
     */
    public function __construct($tag, $product_id, $customer_id, $store)
    {
      $this->tag = $tag;
      $this->product_id = $product_id;
      $this->customer_id = $customer_id;
      $this->store = $store;
    }

    /**
     * @return string
     */
    public function getTag()
    {
      return $this->tag;
    }

    /**
     * @param string $tag
     * @return catalogProductTagAddEntity
     */
    public function setTag($tag)
    {
      $this->tag = $tag;
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
     * @return catalogProductTagAddEntity
     */
    public function setProduct_id($product_id)
    {
      $this->product_id = $product_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_id()
    {
      return $this->customer_id;
    }

    /**
     * @param string $customer_id
     * @return catalogProductTagAddEntity
     */
    public function setCustomer_id($customer_id)
    {
      $this->customer_id = $customer_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getStore()
    {
      return $this->store;
    }

    /**
     * @param string $store
     * @return catalogProductTagAddEntity
     */
    public function setStore($store)
    {
      $this->store = $store;
      return $this;
    }

}
