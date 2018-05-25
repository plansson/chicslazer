<?php

class shoppingCartLicenseEntityArray
{

    /**
     * @var shoppingCartLicenseEntity[] $shoppingCartLicenseEntityArray
     */
    protected $shoppingCartLicenseEntityArray = null;

    /**
     * @param shoppingCartLicenseEntity[] $shoppingCartLicenseEntityArray
     */
    public function __construct(array $shoppingCartLicenseEntityArray)
    {
      $this->shoppingCartLicenseEntityArray = $shoppingCartLicenseEntityArray;
    }

    /**
     * @return shoppingCartLicenseEntity[]
     */
    public function getShoppingCartLicenseEntityArray()
    {
      return $this->shoppingCartLicenseEntityArray;
    }

    /**
     * @param shoppingCartLicenseEntity[] $shoppingCartLicenseEntityArray
     * @return shoppingCartLicenseEntityArray
     */
    public function setShoppingCartLicenseEntityArray(array $shoppingCartLicenseEntityArray)
    {
      $this->shoppingCartLicenseEntityArray = $shoppingCartLicenseEntityArray;
      return $this;
    }

}
