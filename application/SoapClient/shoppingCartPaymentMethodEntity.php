<?php

class shoppingCartPaymentMethodEntity
{

    /**
     * @var string $po_number
     */
    protected $po_number = null;

    /**
     * @var string $method
     */
    protected $method = null;

    /**
     * @var string $cc_cid
     */
    protected $cc_cid = null;

    /**
     * @var string $cc_owner
     */
    protected $cc_owner = null;

    /**
     * @var string $cc_number
     */
    protected $cc_number = null;

    /**
     * @var string $cc_type
     */
    protected $cc_type = null;

    /**
     * @var string $cc_exp_year
     */
    protected $cc_exp_year = null;

    /**
     * @var string $cc_exp_month
     */
    protected $cc_exp_month = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPo_number()
    {
      return $this->po_number;
    }

    /**
     * @param string $po_number
     * @return shoppingCartPaymentMethodEntity
     */
    public function setPo_number($po_number)
    {
      $this->po_number = $po_number;
      return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
      return $this->method;
    }

    /**
     * @param string $method
     * @return shoppingCartPaymentMethodEntity
     */
    public function setMethod($method)
    {
      $this->method = $method;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_cid()
    {
      return $this->cc_cid;
    }

    /**
     * @param string $cc_cid
     * @return shoppingCartPaymentMethodEntity
     */
    public function setCc_cid($cc_cid)
    {
      $this->cc_cid = $cc_cid;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_owner()
    {
      return $this->cc_owner;
    }

    /**
     * @param string $cc_owner
     * @return shoppingCartPaymentMethodEntity
     */
    public function setCc_owner($cc_owner)
    {
      $this->cc_owner = $cc_owner;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_number()
    {
      return $this->cc_number;
    }

    /**
     * @param string $cc_number
     * @return shoppingCartPaymentMethodEntity
     */
    public function setCc_number($cc_number)
    {
      $this->cc_number = $cc_number;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_type()
    {
      return $this->cc_type;
    }

    /**
     * @param string $cc_type
     * @return shoppingCartPaymentMethodEntity
     */
    public function setCc_type($cc_type)
    {
      $this->cc_type = $cc_type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_exp_year()
    {
      return $this->cc_exp_year;
    }

    /**
     * @param string $cc_exp_year
     * @return shoppingCartPaymentMethodEntity
     */
    public function setCc_exp_year($cc_exp_year)
    {
      $this->cc_exp_year = $cc_exp_year;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_exp_month()
    {
      return $this->cc_exp_month;
    }

    /**
     * @param string $cc_exp_month
     * @return shoppingCartPaymentMethodEntity
     */
    public function setCc_exp_month($cc_exp_month)
    {
      $this->cc_exp_month = $cc_exp_month;
      return $this;
    }

}
