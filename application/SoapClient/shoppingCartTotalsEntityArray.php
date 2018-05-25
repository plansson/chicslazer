<?php

class shoppingCartTotalsEntityArray
{

    /**
     * @var shoppingCartTotalsEntity[] $shoppingCartTotalsEntityArray
     */
    protected $shoppingCartTotalsEntityArray = null;

    /**
     * @param shoppingCartTotalsEntity[] $shoppingCartTotalsEntityArray
     */
    public function __construct(array $shoppingCartTotalsEntityArray)
    {
      $this->shoppingCartTotalsEntityArray = $shoppingCartTotalsEntityArray;
    }

    /**
     * @return shoppingCartTotalsEntity[]
     */
    public function getShoppingCartTotalsEntityArray()
    {
      return $this->shoppingCartTotalsEntityArray;
    }

    /**
     * @param shoppingCartTotalsEntity[] $shoppingCartTotalsEntityArray
     * @return shoppingCartTotalsEntityArray
     */
    public function setShoppingCartTotalsEntityArray(array $shoppingCartTotalsEntityArray)
    {
      $this->shoppingCartTotalsEntityArray = $shoppingCartTotalsEntityArray;
      return $this;
    }

}
