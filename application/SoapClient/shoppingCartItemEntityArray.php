<?php

class shoppingCartItemEntityArray
{

    /**
     * @var shoppingCartItemEntity[] $shoppingCartItemEntityArray
     */
    protected $shoppingCartItemEntityArray = null;

    /**
     * @param shoppingCartItemEntity[] $shoppingCartItemEntityArray
     */
    public function __construct(array $shoppingCartItemEntityArray)
    {
      $this->shoppingCartItemEntityArray = $shoppingCartItemEntityArray;
    }

    /**
     * @return shoppingCartItemEntity[]
     */
    public function getShoppingCartItemEntityArray()
    {
      return $this->shoppingCartItemEntityArray;
    }

    /**
     * @param shoppingCartItemEntity[] $shoppingCartItemEntityArray
     * @return shoppingCartItemEntityArray
     */
    public function setShoppingCartItemEntityArray(array $shoppingCartItemEntityArray)
    {
      $this->shoppingCartItemEntityArray = $shoppingCartItemEntityArray;
      return $this;
    }

}
