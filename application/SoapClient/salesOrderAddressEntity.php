<?php

class salesOrderAddressEntity
{

    /**
     * @var string $increment_id
     */
    protected $increment_id = null;

    /**
     * @var string $parent_id
     */
    protected $parent_id = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $updated_at
     */
    protected $updated_at = null;

    /**
     * @var string $is_active
     */
    protected $is_active = null;

    /**
     * @var string $address_type
     */
    protected $address_type = null;

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
     * @var string $region_id
     */
    protected $region_id = null;

    /**
     * @var string $address_id
     */
    protected $address_id = null;

    
    public function __construct()
    {
    
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
     * @return salesOrderAddressEntity
     */
    public function setIncrement_id($increment_id)
    {
      $this->increment_id = $increment_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getParent_id()
    {
      return $this->parent_id;
    }

    /**
     * @param string $parent_id
     * @return salesOrderAddressEntity
     */
    public function setParent_id($parent_id)
    {
      $this->parent_id = $parent_id;
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
     * @return salesOrderAddressEntity
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
     * @return salesOrderAddressEntity
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getIs_active()
    {
      return $this->is_active;
    }

    /**
     * @param string $is_active
     * @return salesOrderAddressEntity
     */
    public function setIs_active($is_active)
    {
      $this->is_active = $is_active;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress_type()
    {
      return $this->address_type;
    }

    /**
     * @param string $address_type
     * @return salesOrderAddressEntity
     */
    public function setAddress_type($address_type)
    {
      $this->address_type = $address_type;
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
     * @return salesOrderAddressEntity
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
     * @return salesOrderAddressEntity
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
     * @return salesOrderAddressEntity
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
     * @return salesOrderAddressEntity
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
     * @return salesOrderAddressEntity
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
     * @return salesOrderAddressEntity
     */
    public function setRegion($region)
    {
      $this->region = $region;
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
     * @return salesOrderAddressEntity
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
     * @return salesOrderAddressEntity
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
     * @return salesOrderAddressEntity
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
     * @return salesOrderAddressEntity
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
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
     * @return salesOrderAddressEntity
     */
    public function setRegion_id($region_id)
    {
      $this->region_id = $region_id;
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
     * @return salesOrderAddressEntity
     */
    public function setAddress_id($address_id)
    {
      $this->address_id = $address_id;
      return $this;
    }

}
