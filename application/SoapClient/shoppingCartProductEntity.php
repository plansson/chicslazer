<?php

class shoppingCartProductEntity
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
     * @var float $qty
     */
    protected $qty = null;

    /**
     * @var associativeArray $options
     */
    protected $options = null;

    /**
     * @var associativeArray $bundle_option
     */
    protected $bundle_option = null;

    /**
     * @var associativeArray $bundle_option_qty
     */
    protected $bundle_option_qty = null;

    /**
     * @var ArrayOfString $links
     */
    protected $links = null;

    
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
     * @return shoppingCartProductEntity
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
     * @return shoppingCartProductEntity
     */
    public function setSku($sku)
    {
      $this->sku = $sku;
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
     * @return shoppingCartProductEntity
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

    /**
     * @return associativeArray
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param associativeArray $options
     * @return shoppingCartProductEntity
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return associativeArray
     */
    public function getBundle_option()
    {
      return $this->bundle_option;
    }

    /**
     * @param associativeArray $bundle_option
     * @return shoppingCartProductEntity
     */
    public function setBundle_option($bundle_option)
    {
      $this->bundle_option = $bundle_option;
      return $this;
    }

    /**
     * @return associativeArray
     */
    public function getBundle_option_qty()
    {
      return $this->bundle_option_qty;
    }

    /**
     * @param associativeArray $bundle_option_qty
     * @return shoppingCartProductEntity
     */
    public function setBundle_option_qty($bundle_option_qty)
    {
      $this->bundle_option_qty = $bundle_option_qty;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getLinks()
    {
      return $this->links;
    }

    /**
     * @param ArrayOfString $links
     * @return shoppingCartProductEntity
     */
    public function setLinks($links)
    {
      $this->links = $links;
      return $this;
    }

}
