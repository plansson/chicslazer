<?php

class shoppingCartCustomerAddressEntityArray
{

    /**
     * @var shoppingCartCustomerAddressEntity[] $shoppingCartCustomerAddressEntityArray
     */
    protected $shoppingCartCustomerAddressEntityArray = null;

    /**
     * @param shoppingCartCustomerAddressEntity[] $shoppingCartCustomerAddressEntityArray
     */
    public function __construct(array $shoppingCartCustomerAddressEntityArray)
    {
      $this->shoppingCartCustomerAddressEntityArray = $shoppingCartCustomerAddressEntityArray;
    }

    /**
     * @return shoppingCartCustomerAddressEntity[]
     */
    public function getShoppingCartCustomerAddressEntityArray()
    {
      return $this->shoppingCartCustomerAddressEntityArray;
    }

    /**
     * @param shoppingCartCustomerAddressEntity[] $shoppingCartCustomerAddressEntityArray
     * @return shoppingCartCustomerAddressEntityArray
     */
    public function setShoppingCartCustomerAddressEntityArray(array $shoppingCartCustomerAddressEntityArray)
    {
      $this->shoppingCartCustomerAddressEntityArray = $shoppingCartCustomerAddressEntityArray;
      return $this;
    }

}
