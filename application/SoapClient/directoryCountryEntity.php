<?php

class directoryCountryEntity
{

    /**
     * @var string $country_id
     */
    protected $country_id = null;

    /**
     * @var string $iso2_code
     */
    protected $iso2_code = null;

    /**
     * @var string $iso3_code
     */
    protected $iso3_code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $country_id
     * @param string $iso2_code
     * @param string $iso3_code
     * @param string $name
     */
    public function __construct($country_id, $iso2_code, $iso3_code, $name)
    {
      $this->country_id = $country_id;
      $this->iso2_code = $iso2_code;
      $this->iso3_code = $iso3_code;
      $this->name = $name;
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
     * @return directoryCountryEntity
     */
    public function setCountry_id($country_id)
    {
      $this->country_id = $country_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getIso2_code()
    {
      return $this->iso2_code;
    }

    /**
     * @param string $iso2_code
     * @return directoryCountryEntity
     */
    public function setIso2_code($iso2_code)
    {
      $this->iso2_code = $iso2_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getIso3_code()
    {
      return $this->iso3_code;
    }

    /**
     * @param string $iso3_code
     * @return directoryCountryEntity
     */
    public function setIso3_code($iso3_code)
    {
      $this->iso3_code = $iso3_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return directoryCountryEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
