<?php

class shoppingCartPaymentMethodResponseEntity
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var associativeArray $cc_types
     */
    protected $cc_types = null;

    /**
     * @param string $code
     * @param string $title
     * @param associativeArray $cc_types
     */
    public function __construct($code, $title, $cc_types)
    {
      $this->code = $code;
      $this->title = $title;
      $this->cc_types = $cc_types;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return shoppingCartPaymentMethodResponseEntity
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return shoppingCartPaymentMethodResponseEntity
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return associativeArray
     */
    public function getCc_types()
    {
      return $this->cc_types;
    }

    /**
     * @param associativeArray $cc_types
     * @return shoppingCartPaymentMethodResponseEntity
     */
    public function setCc_types($cc_types)
    {
      $this->cc_types = $cc_types;
      return $this;
    }

}
