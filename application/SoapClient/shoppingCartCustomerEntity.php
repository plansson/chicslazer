<?php

class shoppingCartCustomerEntity
{

    /**
     * @var string $mode
     */
    protected $mode = null;

    /**
     * @var int $customer_id
     */
    protected $customer_id = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $firstname
     */
    protected $firstname = null;

    /**
     * @var string $lastname
     */
    protected $lastname = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $confirmation
     */
    protected $confirmation = null;

    /**
     * @var int $website_id
     */
    protected $website_id = null;

    /**
     * @var int $store_id
     */
    protected $store_id = null;

    /**
     * @var int $group_id
     */
    protected $group_id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMode()
    {
      return $this->mode;
    }

    /**
     * @param string $mode
     * @return shoppingCartCustomerEntity
     */
    public function setMode($mode)
    {
      $this->mode = $mode;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomer_id()
    {
      return $this->customer_id;
    }

    /**
     * @param int $customer_id
     * @return shoppingCartCustomerEntity
     */
    public function setCustomer_id($customer_id)
    {
      $this->customer_id = $customer_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return shoppingCartCustomerEntity
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
      return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return shoppingCartCustomerEntity
     */
    public function setFirstname($firstname)
    {
      $this->firstname = $firstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
      return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return shoppingCartCustomerEntity
     */
    public function setLastname($lastname)
    {
      $this->lastname = $lastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return shoppingCartCustomerEntity
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmation()
    {
      return $this->confirmation;
    }

    /**
     * @param string $confirmation
     * @return shoppingCartCustomerEntity
     */
    public function setConfirmation($confirmation)
    {
      $this->confirmation = $confirmation;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebsite_id()
    {
      return $this->website_id;
    }

    /**
     * @param int $website_id
     * @return shoppingCartCustomerEntity
     */
    public function setWebsite_id($website_id)
    {
      $this->website_id = $website_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getStore_id()
    {
      return $this->store_id;
    }

    /**
     * @param int $store_id
     * @return shoppingCartCustomerEntity
     */
    public function setStore_id($store_id)
    {
      $this->store_id = $store_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroup_id()
    {
      return $this->group_id;
    }

    /**
     * @param int $group_id
     * @return shoppingCartCustomerEntity
     */
    public function setGroup_id($group_id)
    {
      $this->group_id = $group_id;
      return $this;
    }

}
