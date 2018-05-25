<?php

class catalogProductAttributeSetEntity
{

    /**
     * @var int $set_id
     */
    protected $set_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getSet_id()
    {
      return $this->set_id;
    }

    /**
     * @param int $set_id
     * @return catalogProductAttributeSetEntity
     */
    public function setSet_id($set_id)
    {
      $this->set_id = $set_id;
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
     * @return catalogProductAttributeSetEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
