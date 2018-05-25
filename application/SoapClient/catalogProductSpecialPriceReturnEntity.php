<?php

class catalogProductSpecialPriceReturnEntity
{

    /**
     * @var string $special_price
     */
    protected $special_price = null;

    /**
     * @var string $special_from_date
     */
    protected $special_from_date = null;

    /**
     * @var string $special_to_date
     */
    protected $special_to_date = null;

    /**
     * @param string $special_price
     * @param string $special_from_date
     * @param string $special_to_date
     */
    public function __construct($special_price, $special_from_date, $special_to_date)
    {
      $this->special_price = $special_price;
      $this->special_from_date = $special_from_date;
      $this->special_to_date = $special_to_date;
    }

    /**
     * @return string
     */
    public function getSpecial_price()
    {
      return $this->special_price;
    }

    /**
     * @param string $special_price
     * @return catalogProductSpecialPriceReturnEntity
     */
    public function setSpecial_price($special_price)
    {
      $this->special_price = $special_price;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecial_from_date()
    {
      return $this->special_from_date;
    }

    /**
     * @param string $special_from_date
     * @return catalogProductSpecialPriceReturnEntity
     */
    public function setSpecial_from_date($special_from_date)
    {
      $this->special_from_date = $special_from_date;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecial_to_date()
    {
      return $this->special_to_date;
    }

    /**
     * @param string $special_to_date
     * @return catalogProductSpecialPriceReturnEntity
     */
    public function setSpecial_to_date($special_to_date)
    {
      $this->special_to_date = $special_to_date;
      return $this;
    }

}
