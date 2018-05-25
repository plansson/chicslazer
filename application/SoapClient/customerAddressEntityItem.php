<?php

class customerAddressEntityItem
{

    /**
     * @var int $customer_address_id
     */
    protected $customer_address_id = null;

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
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $country_id
     */
    protected $country_id = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

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
     * @var string $postcode
     */
    protected $postcode = null;

    /**
     * @var string $prefix
     */
    protected $prefix = null;

    /**
     * @var string $region
     */
    protected $region = null;

    /**
     * @var int $region_id
     */
    protected $region_id = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $suffix
     */
    protected $suffix = null;

    /**
     * @var string $telephone
     */
    protected $telephone = null;

    /**
     * @var boolean $is_default_billing
     */
    protected $is_default_billing = null;

    /**
     * @var boolean $is_default_shipping
     */
    protected $is_default_shipping = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCustomer_address_id()
    {
      return $this->customer_address_id;
    }

    /**
     * @param int $customer_address_id
     * @return customerAddressEntityItem
     */
    public function setCustomer_address_id($customer_address_id)
    {
      $this->customer_address_id = $customer_address_id;
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
     * @return customerAddressEntityItem
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
     * @return customerAddressEntityItem
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
     * @return customerAddressEntityItem
     */
    public function setIncrement_id($increment_id)
    {
      $this->increment_id = $increment_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return customerAddressEntityItem
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param string $company
     * @return customerAddressEntityItem
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry_id()
    {
      return $this->country_id;
    }

    /**
     * @param string $country_id
     * @return customerAddressEntityItem
     */
    public function setCountry_id($country_id)
    {
      $this->country_id = $country_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return customerAddressEntityItem
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
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
     * @return customerAddressEntityItem
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
     * @return customerAddressEntityItem
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
     * @return customerAddressEntityItem
     */
    public function setMiddlename($middlename)
    {
      $this->middlename = $middlename;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return customerAddressEntityItem
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
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
     * @return customerAddressEntityItem
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
      return $this->region;
    }

    /**
     * @param string $region
     * @return customerAddressEntityItem
     */
    public function setRegion($region)
    {
      $this->region = $region;
      return $this;
    }

    /**
     * @return int
     */
    public function getRegion_id()
    {
      return $this->region_id;
    }

    /**
     * @param int $region_id
     * @return customerAddressEntityItem
     */
    public function setRegion_id($region_id)
    {
      $this->region_id = $region_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param string $street
     * @return customerAddressEntityItem
     */
    public function setStreet($street)
    {
      $this->street = $street;
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
     * @return customerAddressEntityItem
     */
    public function setSuffix($suffix)
    {
      $this->suffix = $suffix;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
      return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return customerAddressEntityItem
     */
    public function setTelephone($telephone)
    {
      $this->telephone = $telephone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIs_default_billing()
    {
      return $this->is_default_billing;
    }

    /**
     * @param boolean $is_default_billing
     * @return customerAddressEntityItem
     */
    public function setIs_default_billing($is_default_billing)
    {
      $this->is_default_billing = $is_default_billing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIs_default_shipping()
    {
      return $this->is_default_shipping;
    }

    /**
     * @param boolean $is_default_shipping
     * @return customerAddressEntityItem
     */
    public function setIs_default_shipping($is_default_shipping)
    {
      $this->is_default_shipping = $is_default_shipping;
      return $this;
    }

}
