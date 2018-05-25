<?php

class shoppingCartCustomerAddressEntity
{

    /**
     * @var string $mode
     */
    protected $mode = null;

    /**
     * @var string $address_id
     */
    protected $address_id = null;

    /**
     * @var string $firstname
     */
    protected $firstname = null;

    /**
     * @var string $lastname
     */
    protected $lastname = null;

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $region
     */
    protected $region = null;

    /**
     * @var string $region_id
     */
    protected $region_id = null;

    /**
     * @var string $postcode
     */
    protected $postcode = null;

    /**
     * @var string $country_id
     */
    protected $country_id = null;

    /**
     * @var string $telephone
     */
    protected $telephone = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var int $is_default_billing
     */
    protected $is_default_billing = null;

    /**
     * @var int $is_default_shipping
     */
    protected $is_default_shipping = null;

    
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
     * @return shoppingCartCustomerAddressEntity
     */
    public function setMode($mode)
    {
      $this->mode = $mode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress_id()
    {
      return $this->address_id;
    }

    /**
     * @param string $address_id
     * @return shoppingCartCustomerAddressEntity
     */
    public function setAddress_id($address_id)
    {
      $this->address_id = $address_id;
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
     * @return shoppingCartCustomerAddressEntity
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
     * @return shoppingCartCustomerAddressEntity
     */
    public function setLastname($lastname)
    {
      $this->lastname = $lastname;
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
     * @return shoppingCartCustomerAddressEntity
     */
    public function setCompany($company)
    {
      $this->company = $company;
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
     * @return shoppingCartCustomerAddressEntity
     */
    public function setStreet($street)
    {
      $this->street = $street;
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
     * @return shoppingCartCustomerAddressEntity
     */
    public function setCity($city)
    {
      $this->city = $city;
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
     * @return shoppingCartCustomerAddressEntity
     */
    public function setRegion($region)
    {
      $this->region = $region;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegion_id()
    {
      return $this->region_id;
    }

    /**
     * @param string $region_id
     * @return shoppingCartCustomerAddressEntity
     */
    public function setRegion_id($region_id)
    {
      $this->region_id = $region_id;
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
     * @return shoppingCartCustomerAddressEntity
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
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
     * @return shoppingCartCustomerAddressEntity
     */
    public function setCountry_id($country_id)
    {
      $this->country_id = $country_id;
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
     * @return shoppingCartCustomerAddressEntity
     */
    public function setTelephone($telephone)
    {
      $this->telephone = $telephone;
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
     * @return shoppingCartCustomerAddressEntity
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_default_billing()
    {
      return $this->is_default_billing;
    }

    /**
     * @param int $is_default_billing
     * @return shoppingCartCustomerAddressEntity
     */
    public function setIs_default_billing($is_default_billing)
    {
      $this->is_default_billing = $is_default_billing;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_default_shipping()
    {
      return $this->is_default_shipping;
    }

    /**
     * @param int $is_default_shipping
     * @return shoppingCartCustomerAddressEntity
     */
    public function setIs_default_shipping($is_default_shipping)
    {
      $this->is_default_shipping = $is_default_shipping;
      return $this;
    }

}
