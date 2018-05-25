<?php

class shoppingCartProductResponseEntityArray
{

    /**
     * @var catalogProductEntity[] $shoppingCartProductResponseEntityArray
     */
    protected $shoppingCartProductResponseEntityArray = null;

    /**
     * @param catalogProductEntity[] $shoppingCartProductResponseEntityArray
     */
    public function __construct(array $shoppingCartProductResponseEntityArray)
    {
      $this->shoppingCartProductResponseEntityArray = $shoppingCartProductResponseEntityArray;
    }

    /**
     * @return catalogProductEntity[]
     */
    public function getShoppingCartProductResponseEntityArray()
    {
      return $this->shoppingCartProductResponseEntityArray;
    }

    /**
     * @param catalogProductEntity[] $shoppingCartProductResponseEntityArray
     * @return shoppingCartProductResponseEntityArray
     */
    public function setShoppingCartProductResponseEntityArray(array $shoppingCartProductResponseEntityArray)
    {
      $this->shoppingCartProductResponseEntityArray = $shoppingCartProductResponseEntityArray;
      return $this;
    }

}
