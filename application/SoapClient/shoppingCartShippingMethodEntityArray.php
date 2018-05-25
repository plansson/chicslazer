<?php

class shoppingCartShippingMethodEntityArray
{

    /**
     * @var shoppingCartShippingMethodEntity[] $shoppingCartShippingMethodEntityArray
     */
    protected $shoppingCartShippingMethodEntityArray = null;

    /**
     * @param shoppingCartShippingMethodEntity[] $shoppingCartShippingMethodEntityArray
     */
    public function __construct(array $shoppingCartShippingMethodEntityArray)
    {
      $this->shoppingCartShippingMethodEntityArray = $shoppingCartShippingMethodEntityArray;
    }

    /**
     * @return shoppingCartShippingMethodEntity[]
     */
    public function getShoppingCartShippingMethodEntityArray()
    {
      return $this->shoppingCartShippingMethodEntityArray;
    }

    /**
     * @param shoppingCartShippingMethodEntity[] $shoppingCartShippingMethodEntityArray
     * @return shoppingCartShippingMethodEntityArray
     */
    public function setShoppingCartShippingMethodEntityArray(array $shoppingCartShippingMethodEntityArray)
    {
      $this->shoppingCartShippingMethodEntityArray = $shoppingCartShippingMethodEntityArray;
      return $this;
    }

}
