<?php

class customerCustomerEntity
{

    /**
     * @var int $customer_id
     */
    protected $customer_id = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $updated_at
     */
    protected $updated_at = null;

    /**
     * @var string $increment_id
     */
    protected $increment_id = null;

    /**
     * @var int $store_id
     */
    protected $store_id = null;

    /**
     * @var int $website_id
     */
    protected $website_id = null;

    /**
     * @var string $created_in
     */
    protected $created_in = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $firstname
     */
    protected $firstname = null;

    /**
     * @var string $middlename
     */
    protected $middlename = null;

    /**
     * @var string $lastname
     */
    protected $lastname = null;

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
     * @var boolean $confirmation
     */
    protected $confirmation = null;

    /**
     * @var string $password_hash
     */
    protected $password_hash = null;

    
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
     * @return customerCustomerEntity
     */
    public function setCustomer_id($customer_id)
    {
      $this->customer_id = $customer_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreated_at()
    {
      return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return customerCustomerEntity
     */
    public function setCreated_at($created_at)
    {
      $this->created_at = $created_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpdated_at()
    {
      return $this->updated_at;
    }

    /**
     * @param string $updated_at
     * @return customerCustomerEntity
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getIncrement_id()
    {
      return $this->increment_id;
    }

    /**
     * @param string $increment_id
     * @return customerCustomerEntity
     */
    public function setIncrement_id($increment_id)
    {
      $this->increment_id = $increment_id;
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
     * @return customerCustomerEntity
     */
    public function setStore_id($store_id)
    {
      $this->store_id = $store_id;
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
     * @return customerCustomerEntity
     */
    public function setWebsite_id($website_id)
    {
      $this->website_id = $website_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreated_in()
    {
      return $this->created_in;
    }

    /**
     * @param string $created_in
     * @return customerCustomerEntity
     */
    public function setCreated_in($created_in)
    {
      $this->created_in = $created_in;
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
     * @return customerCustomerEntity
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
     * @return customerCustomerEntity
     */
    public function setFirstname($firstname)
    {
      $this->firstname = $firstname;
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
     * @return customerCustomerEntity
     */
    public function setMiddlename($middlename)
    {
      $this->middlename = $middlename;
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
     * @return customerCustomerEntity
     */
    public function setLastname($lastname)
    {
      $this->lastname = $lastname;
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
     * @return customerCustomerEntity
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
     * @return customerCustomerEntity
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
     * @return customerCustomerEntity
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
     * @return customerCustomerEntity
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
     * @return customerCustomerEntity
     */
    public function setTaxvat($taxvat)
    {
      $this->taxvat = $taxvat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConfirmation()
    {
      return $this->confirmation;
    }

    /**
     * @param boolean $confirmation
     * @return customerCustomerEntity
     */
    public function setConfirmation($confirmation)
    {
      $this->confirmation = $confirmation;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword_hash()
    {
      return $this->password_hash;
    }

    /**
     * @param string $password_hash
     * @return customerCustomerEntity
     */
    public function setPassword_hash($password_hash)
    {
      $this->password_hash = $password_hash;
      return $this;
    }

}
