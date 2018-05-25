<?php

class catalogProductTierPriceEntity
{

    /**
     * @var string $customer_group_id
     */
    protected $customer_group_id = null;

    /**
     * @var string $website
     */
    protected $website = null;

    /**
     * @var int $qty
     */
    protected $qty = null;

    /**
     * @var float $price
     */
    protected $price = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCustomer_group_id()
    {
      return $this->customer_group_id;
    }

    /**
     * @param string $customer_group_id
     * @return catalogProductTierPriceEntity
     */
    public function setCustomer_group_id($customer_group_id)
    {
      $this->customer_group_id = $customer_group_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
      return $this->website;
    }

    /**
     * @param string $website
     * @return catalogProductTierPriceEntity
     */
    public function setWebsite($website)
    {
      $this->website = $website;
      return $this;
    }

    /**
     * @return int
     */
    public function getQty()
    {
      return $this->qty;
    }

    /**
     * @param int $qty
     * @return catalogProductTierPriceEntity
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return catalogProductTierPriceEntity
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

}
