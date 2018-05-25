<?php

class shoppingCartPaymentEntity
{

    /**
     * @var string $payment_id
     */
    protected $payment_id = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $updated_at
     */
    protected $updated_at = null;

    /**
     * @var string $method
     */
    protected $method = null;

    /**
     * @var string $cc_type
     */
    protected $cc_type = null;

    /**
     * @var string $cc_number_enc
     */
    protected $cc_number_enc = null;

    /**
     * @var string $cc_last4
     */
    protected $cc_last4 = null;

    /**
     * @var string $cc_cid_enc
     */
    protected $cc_cid_enc = null;

    /**
     * @var string $cc_owner
     */
    protected $cc_owner = null;

    /**
     * @var string $cc_exp_month
     */
    protected $cc_exp_month = null;

    /**
     * @var string $cc_exp_year
     */
    protected $cc_exp_year = null;

    /**
     * @var string $cc_ss_owner
     */
    protected $cc_ss_owner = null;

    /**
     * @var string $cc_ss_start_month
     */
    protected $cc_ss_start_month = null;

    /**
     * @var string $cc_ss_start_year
     */
    protected $cc_ss_start_year = null;

    /**
     * @var string $cc_ss_issue
     */
    protected $cc_ss_issue = null;

    /**
     * @var string $po_number
     */
    protected $po_number = null;

    /**
     * @var string $additional_data
     */
    protected $additional_data = null;

    /**
     * @var string $additional_information
     */
    protected $additional_information = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPayment_id()
    {
      return $this->payment_id;
    }

    /**
     * @param string $payment_id
     * @return shoppingCartPaymentEntity
     */
    public function setPayment_id($payment_id)
    {
      $this->payment_id = $payment_id;
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
     * @return shoppingCartPaymentEntity
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
     * @return shoppingCartPaymentEntity
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
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
     * @return shoppingCartPaymentEntity
     */
    public function setMethod($method)
    {
      $this->method = $method;
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
     * @return shoppingCartPaymentEntity
     */
    public function setCc_type($cc_type)
    {
      $this->cc_type = $cc_type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_number_enc()
    {
      return $this->cc_number_enc;
    }

    /**
     * @param string $cc_number_enc
     * @return shoppingCartPaymentEntity
     */
    public function setCc_number_enc($cc_number_enc)
    {
      $this->cc_number_enc = $cc_number_enc;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_last4()
    {
      return $this->cc_last4;
    }

    /**
     * @param string $cc_last4
     * @return shoppingCartPaymentEntity
     */
    public function setCc_last4($cc_last4)
    {
      $this->cc_last4 = $cc_last4;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_cid_enc()
    {
      return $this->cc_cid_enc;
    }

    /**
     * @param string $cc_cid_enc
     * @return shoppingCartPaymentEntity
     */
    public function setCc_cid_enc($cc_cid_enc)
    {
      $this->cc_cid_enc = $cc_cid_enc;
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
     * @return shoppingCartPaymentEntity
     */
    public function setCc_owner($cc_owner)
    {
      $this->cc_owner = $cc_owner;
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
     * @return shoppingCartPaymentEntity
     */
    public function setCc_exp_month($cc_exp_month)
    {
      $this->cc_exp_month = $cc_exp_month;
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
     * @return shoppingCartPaymentEntity
     */
    public function setCc_exp_year($cc_exp_year)
    {
      $this->cc_exp_year = $cc_exp_year;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_ss_owner()
    {
      return $this->cc_ss_owner;
    }

    /**
     * @param string $cc_ss_owner
     * @return shoppingCartPaymentEntity
     */
    public function setCc_ss_owner($cc_ss_owner)
    {
      $this->cc_ss_owner = $cc_ss_owner;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_ss_start_month()
    {
      return $this->cc_ss_start_month;
    }

    /**
     * @param string $cc_ss_start_month
     * @return shoppingCartPaymentEntity
     */
    public function setCc_ss_start_month($cc_ss_start_month)
    {
      $this->cc_ss_start_month = $cc_ss_start_month;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_ss_start_year()
    {
      return $this->cc_ss_start_year;
    }

    /**
     * @param string $cc_ss_start_year
     * @return shoppingCartPaymentEntity
     */
    public function setCc_ss_start_year($cc_ss_start_year)
    {
      $this->cc_ss_start_year = $cc_ss_start_year;
      return $this;
    }

    /**
     * @return string
     */
    public function getCc_ss_issue()
    {
      return $this->cc_ss_issue;
    }

    /**
     * @param string $cc_ss_issue
     * @return shoppingCartPaymentEntity
     */
    public function setCc_ss_issue($cc_ss_issue)
    {
      $this->cc_ss_issue = $cc_ss_issue;
      return $this;
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
     * @return shoppingCartPaymentEntity
     */
    public function setPo_number($po_number)
    {
      $this->po_number = $po_number;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditional_data()
    {
      return $this->additional_data;
    }

    /**
     * @param string $additional_data
     * @return shoppingCartPaymentEntity
     */
    public function setAdditional_data($additional_data)
    {
      $this->additional_data = $additional_data;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditional_information()
    {
      return $this->additional_information;
    }

    /**
     * @param string $additional_information
     * @return shoppingCartPaymentEntity
     */
    public function setAdditional_information($additional_information)
    {
      $this->additional_information = $additional_information;
      return $this;
    }

}
