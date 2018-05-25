<?php

class shoppingCartLicenseEntity
{

    /**
     * @var string $agreement_id
     */
    protected $agreement_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var int $is_active
     */
    protected $is_active = null;

    /**
     * @var int $is_html
     */
    protected $is_html = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAgreement_id()
    {
      return $this->agreement_id;
    }

    /**
     * @param string $agreement_id
     * @return shoppingCartLicenseEntity
     */
    public function setAgreement_id($agreement_id)
    {
      $this->agreement_id = $agreement_id;
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
     * @return shoppingCartLicenseEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return shoppingCartLicenseEntity
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_active()
    {
      return $this->is_active;
    }

    /**
     * @param int $is_active
     * @return shoppingCartLicenseEntity
     */
    public function setIs_active($is_active)
    {
      $this->is_active = $is_active;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_html()
    {
      return $this->is_html;
    }

    /**
     * @param int $is_html
     * @return shoppingCartLicenseEntity
     */
    public function setIs_html($is_html)
    {
      $this->is_html = $is_html;
      return $this;
    }

}
