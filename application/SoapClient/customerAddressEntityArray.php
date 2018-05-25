<?php

class customerAddressEntityArray
{

    /**
     * @var customerAddressEntityItem[] $customerAddressEntityArray
     */
    protected $customerAddressEntityArray = null;

    /**
     * @param customerAddressEntityItem[] $customerAddressEntityArray
     */
    public function __construct(array $customerAddressEntityArray)
    {
      $this->customerAddressEntityArray = $customerAddressEntityArray;
    }

    /**
     * @return customerAddressEntityItem[]
     */
    public function getCustomerAddressEntityArray()
    {
      return $this->customerAddressEntityArray;
    }

    /**
     * @param customerAddressEntityItem[] $customerAddressEntityArray
     * @return customerAddressEntityArray
     */
    public function setCustomerAddressEntityArray(array $customerAddressEntityArray)
    {
      $this->customerAddressEntityArray = $customerAddressEntityArray;
      return $this;
    }

}
