<?php

class catalogAttributeEntity
{

    /**
     * @var int $attribute_id
     */
    protected $attribute_id = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $required
     */
    protected $required = null;

    /**
     * @var string $scope
     */
    protected $scope = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAttribute_id()
    {
      return $this->attribute_id;
    }

    /**
     * @param int $attribute_id
     * @return catalogAttributeEntity
     */
    public function setAttribute_id($attribute_id)
    {
      $this->attribute_id = $attribute_id;
      return $this;
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
     * @return catalogAttributeEntity
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return catalogAttributeEntity
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequired()
    {
      return $this->required;
    }

    /**
     * @param string $required
     * @return catalogAttributeEntity
     */
    public function setRequired($required)
    {
      $this->required = $required;
      return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
      return $this->scope;
    }

    /**
     * @param string $scope
     * @return catalogAttributeEntity
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
