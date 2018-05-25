<?php

class customerAddressEntityCreate
{

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
     * @var int $region_id
     */
    protected $region_id = null;

    /**
     * @var string $region
     */
    protected $region = null;

    /**
     * @var ArrayOfString $street
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
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
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
     * @return customerAddressEntityCreate
     */
    public function setRegion_id($region_id)
    {
      $this->region_id = $region_id;
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
     * @return customerAddressEntityCreate
     */
    public function setRegion($region)
    {
      $this->region = $region;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param ArrayOfString $street
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
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
     * @return customerAddressEntityCreate
     */
    public function setIs_default_shipping($is_default_shipping)
    {
      $this->is_default_shipping = $is_default_shipping;
      return $this;
    }

}
