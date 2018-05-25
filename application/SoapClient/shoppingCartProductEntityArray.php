<?php

class shoppingCartProductEntityArray
{

    /**
     * @var shoppingCartProductEntity[] $shoppingCartProductEntityArray
     */
    protected $shoppingCartProductEntityArray = null;

    /**
     * @param shoppingCartProductEntity[] $shoppingCartProductEntityArray
     */
    public function __construct(array $shoppingCartProductEntityArray)
    {
      $this->shoppingCartProductEntityArray = $shoppingCartProductEntityArray;
    }

    /**
     * @return shoppingCartProductEntity[]
     */
    public function getShoppingCartProductEntityArray()
    {
      return $this->shoppingCartProductEntityArray;
    }

    /**
     * @param shoppingCartProductEntity[] $shoppingCartProductEntityArray
     * @return shoppingCartProductEntityArray
     */
    public function setShoppingCartProductEntityArray(array $shoppingCartProductEntityArray)
    {
      $this->shoppingCartProductEntityArray = $shoppingCartProductEntityArray;
      return $this;
    }

}
