<?php

class catalogProductAttributeMediaTypeEntity
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $scope
     */
    protected $scope = null;

    /**
     * @param string $code
     * @param string $scope
     */
    public function __construct($code, $scope)
    {
      $this->code = $code;
      $this->scope = $scope;
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
     * @return catalogProductAttributeMediaTypeEntity
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return catalogProductAttributeMediaTypeEntity
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

}
