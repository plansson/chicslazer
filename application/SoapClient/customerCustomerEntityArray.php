<?php

class customerCustomerEntityArray
{

    /**
     * @var customerCustomerEntity[] $customerCustomerEntityArray
     */
    protected $customerCustomerEntityArray = null;

    /**
     * @param customerCustomerEntity[] $customerCustomerEntityArray
     */
    public function __construct(array $customerCustomerEntityArray)
    {
      $this->customerCustomerEntityArray = $customerCustomerEntityArray;
    }

    /**
     * @return customerCustomerEntity[]
     */
    public function getCustomerCustomerEntityArray()
    {
      return $this->customerCustomerEntityArray;
    }

    /**
     * @param customerCustomerEntity[] $customerCustomerEntityArray
     * @return customerCustomerEntityArray
     */
    public function setCustomerCustomerEntityArray(array $customerCustomerEntityArray)
    {
      $this->customerCustomerEntityArray = $customerCustomerEntityArray;
      return $this;
    }

}
