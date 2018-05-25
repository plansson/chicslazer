<?php

class customerGroupEntityArray
{

    /**
     * @var customerGroupEntity[] $customerGroupEntityArray
     */
    protected $customerGroupEntityArray = null;

    /**
     * @param customerGroupEntity[] $customerGroupEntityArray
     */
    public function __construct(array $customerGroupEntityArray)
    {
      $this->customerGroupEntityArray = $customerGroupEntityArray;
    }

    /**
     * @return customerGroupEntity[]
     */
    public function getCustomerGroupEntityArray()
    {
      return $this->customerGroupEntityArray;
    }

    /**
     * @param customerGroupEntity[] $customerGroupEntityArray
     * @return customerGroupEntityArray
     */
    public function setCustomerGroupEntityArray(array $customerGroupEntityArray)
    {
      $this->customerGroupEntityArray = $customerGroupEntityArray;
      return $this;
    }

}
