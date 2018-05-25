<?php

class customerGroupEntity
{

    /**
     * @var int $customer_group_id
     */
    protected $customer_group_id = null;

    /**
     * @var string $customer_group_code
     */
    protected $customer_group_code = null;

    /**
     * @param int $customer_group_id
     * @param string $customer_group_code
     */
    public function __construct($customer_group_id, $customer_group_code)
    {
      $this->customer_group_id = $customer_group_id;
      $this->customer_group_code = $customer_group_code;
    }

    /**
     * @return int
     */
    public function getCustomer_group_id()
    {
      return $this->customer_group_id;
    }

    /**
     * @param int $customer_group_id
     * @return customerGroupEntity
     */
    public function setCustomer_group_id($customer_group_id)
    {
      $this->customer_group_id = $customer_group_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_group_code()
    {
      return $this->customer_group_code;
    }

    /**
     * @param string $customer_group_code
     * @return customerGroupEntity
     */
    public function setCustomer_group_code($customer_group_code)
    {
      $this->customer_group_code = $customer_group_code;
      return $this;
    }

}
