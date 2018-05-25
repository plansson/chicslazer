<?php

class shoppingCartPaymentMethodResponseEntityArray
{

    /**
     * @var shoppingCartPaymentMethodResponseEntity[] $shoppingCartPaymentMethodResponseEntityArray
     */
    protected $shoppingCartPaymentMethodResponseEntityArray = null;

    /**
     * @param shoppingCartPaymentMethodResponseEntity[] $shoppingCartPaymentMethodResponseEntityArray
     */
    public function __construct(array $shoppingCartPaymentMethodResponseEntityArray)
    {
      $this->shoppingCartPaymentMethodResponseEntityArray = $shoppingCartPaymentMethodResponseEntityArray;
    }

    /**
     * @return shoppingCartPaymentMethodResponseEntity[]
     */
    public function getShoppingCartPaymentMethodResponseEntityArray()
    {
      return $this->shoppingCartPaymentMethodResponseEntityArray;
    }

    /**
     * @param shoppingCartPaymentMethodResponseEntity[] $shoppingCartPaymentMethodResponseEntityArray
     * @return shoppingCartPaymentMethodResponseEntityArray
     */
    public function setShoppingCartPaymentMethodResponseEntityArray(array $shoppingCartPaymentMethodResponseEntityArray)
    {
      $this->shoppingCartPaymentMethodResponseEntityArray = $shoppingCartPaymentMethodResponseEntityArray;
      return $this;
    }

}
