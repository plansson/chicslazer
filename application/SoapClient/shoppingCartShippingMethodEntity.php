<?php

class shoppingCartShippingMethodEntity
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $carrier
     */
    protected $carrier = null;

    /**
     * @var string $carrier_title
     */
    protected $carrier_title = null;

    /**
     * @var string $method
     */
    protected $method = null;

    /**
     * @var string $method_title
     */
    protected $method_title = null;

    /**
     * @var string $method_description
     */
    protected $method_description = null;

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
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return shoppingCartShippingMethodEntity
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->carrier;
    }

    /**
     * @param string $carrier
     * @return shoppingCartShippingMethodEntity
     */
    public function setCarrier($carrier)
    {
      $this->carrier = $carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier_title()
    {
      return $this->carrier_title;
    }

    /**
     * @param string $carrier_title
     * @return shoppingCartShippingMethodEntity
     */
    public function setCarrier_title($carrier_title)
    {
      $this->carrier_title = $carrier_title;
      return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
      return $this->method;
    }

    /**
     * @param string $method
     * @return shoppingCartShippingMethodEntity
     */
    public function setMethod($method)
    {
      $this->method = $method;
      return $this;
    }

    /**
     * @return string
     */
    public function getMethod_title()
    {
      return $this->method_title;
    }

    /**
     * @param string $method_title
     * @return shoppingCartShippingMethodEntity
     */
    public function setMethod_title($method_title)
    {
      $this->method_title = $method_title;
      return $this;
    }

    /**
     * @return string
     */
    public function getMethod_description()
    {
      return $this->method_description;
    }

    /**
     * @param string $method_description
     * @return shoppingCartShippingMethodEntity
     */
    public function setMethod_description($method_description)
    {
      $this->method_description = $method_description;
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
     * @return shoppingCartShippingMethodEntity
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

}
