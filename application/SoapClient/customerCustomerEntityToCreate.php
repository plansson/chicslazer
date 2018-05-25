<?php

class customerCustomerEntityToCreate
{

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
     * @var string $middlename
     */
    protected $middlename = null;

    /**
     * @var string $password
     */
    protected $password = null;

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

    /**
     * @var string $prefix
     */
    protected $prefix = null;

    /**
     * @var string $suffix
     */
    protected $suffix = null;

    /**
     * @var string $dob
     */
    protected $dob = null;

    /**
     * @var string $taxvat
     */
    protected $taxvat = null;

    /**
     * @var int $gender
     */
    protected $gender = null;

    
    public function __construct()
    {
    
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
     * @return customerCustomerEntityToCreate
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
     * @return customerCustomerEntityToCreate
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
     * @return customerCustomerEntityToCreate
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
     * @return customerCustomerEntityToCreate
     */
    public function setLastname($lastname)
    {
      $this->lastname = $lastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddlename()
    {
      return $this->middlename;
    }

    /**
     * @param string $middlename
     * @return customerCustomerEntityToCreate
     */
    public function setMiddlename($middlename)
    {
      $this->middlename = $middlename;
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
     * @return customerCustomerEntityToCreate
     */
    public function setPassword($password)
    {
      $this->password = $password;
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
     * @return customerCustomerEntityToCreate
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
     * @return customerCustomerEntityToCreate
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
     * @return customerCustomerEntityToCreate
     */
    public function setGroup_id($group_id)
    {
      $this->group_id = $group_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
      return $this->prefix;
    }

    /**
     * @param string $prefix
     * @return customerCustomerEntityToCreate
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
      return $this->suffix;
    }

    /**
     * @param string $suffix
     * @return customerCustomerEntityToCreate
     */
    public function setSuffix($suffix)
    {
      $this->suffix = $suffix;
      return $this;
    }

    /**
     * @return string
     */
    public function getDob()
    {
      return $this->dob;
    }

    /**
     * @param string $dob
     * @return customerCustomerEntityToCreate
     */
    public function setDob($dob)
    {
      $this->dob = $dob;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxvat()
    {
      return $this->taxvat;
    }

    /**
     * @param string $taxvat
     * @return customerCustomerEntityToCreate
     */
    public function setTaxvat($taxvat)
    {
      $this->taxvat = $taxvat;
      return $this;
    }

    /**
     * @return int
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param int $gender
     * @return customerCustomerEntityToCreate
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
      return $this;
    }

}
