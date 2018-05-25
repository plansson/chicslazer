<?php

class shoppingCartAddressEntity
{

    /**
     * @var string $address_id
     */
    protected $address_id = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $updated_at
     */
    protected $updated_at = null;

    /**
     * @var string $customer_id
     */
    protected $customer_id = null;

    /**
     * @var int $save_in_address_book
     */
    protected $save_in_address_book = null;

    /**
     * @var string $customer_address_id
     */
    protected $customer_address_id = null;

    /**
     * @var string $address_type
     */
    protected $address_type = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $prefix
     */
    protected $prefix = null;

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
     * @var string $suffix
     */
    protected $suffix = null;

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
     * @var int $same_as_billing
     */
    protected $same_as_billing = null;

    /**
     * @var int $free_shipping
     */
    protected $free_shipping = null;

    /**
     * @var string $shipping_method
     */
    protected $shipping_method = null;

    /**
     * @var string $shipping_description
     */
    protected $shipping_description = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    
    public function __construct()
    {
    
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
     * @return shoppingCartAddressEntity
     */
    public function setAddress_id($address_id)
    {
      $this->address_id = $address_id;
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_id()
    {
      return $this->customer_id;
    }

    /**
     * @param string $customer_id
     * @return shoppingCartAddressEntity
     */
    public function setCustomer_id($customer_id)
    {
      $this->customer_id = $customer_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getSave_in_address_book()
    {
      return $this->save_in_address_book;
    }

    /**
     * @param int $save_in_address_book
     * @return shoppingCartAddressEntity
     */
    public function setSave_in_address_book($save_in_address_book)
    {
      $this->save_in_address_book = $save_in_address_book;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_address_id()
    {
      return $this->customer_address_id;
    }

    /**
     * @param string $customer_address_id
     * @return shoppingCartAddressEntity
     */
    public function setCustomer_address_id($customer_address_id)
    {
      $this->customer_address_id = $customer_address_id;
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
     * @return shoppingCartAddressEntity
     */
    public function setAddress_type($address_type)
    {
      $this->address_type = $address_type;
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
     * @return shoppingCartAddressEntity
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return shoppingCartAddressEntity
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
     */
    public function setLastname($lastname)
    {
      $this->lastname = $lastname;
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
     * @return shoppingCartAddressEntity
     */
    public function setSuffix($suffix)
    {
      $this->suffix = $suffix;
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
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
     * @return shoppingCartAddressEntity
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return int
     */
    public function getSame_as_billing()
    {
      return $this->same_as_billing;
    }

    /**
     * @param int $same_as_billing
     * @return shoppingCartAddressEntity
     */
    public function setSame_as_billing($same_as_billing)
    {
      $this->same_as_billing = $same_as_billing;
      return $this;
    }

    /**
     * @return int
     */
    public function getFree_shipping()
    {
      return $this->free_shipping;
    }

    /**
     * @param int $free_shipping
     * @return shoppingCartAddressEntity
     */
    public function setFree_shipping($free_shipping)
    {
      $this->free_shipping = $free_shipping;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_method()
    {
      return $this->shipping_method;
    }

    /**
     * @param string $shipping_method
     * @return shoppingCartAddressEntity
     */
    public function setShipping_method($shipping_method)
    {
      $this->shipping_method = $shipping_method;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_description()
    {
      return $this->shipping_description;
    }

    /**
     * @param string $shipping_description
     * @return shoppingCartAddressEntity
     */
    public function setShipping_description($shipping_description)
    {
      $this->shipping_description = $shipping_description;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return shoppingCartAddressEntity
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

}
