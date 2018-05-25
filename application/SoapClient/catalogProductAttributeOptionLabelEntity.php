<?php

class catalogProductAttributeOptionLabelEntity
{

    /**
     * @var ArrayOfString $store_id
     */
    protected $store_id = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param ArrayOfString $store_id
     * @param string $value
     */
    public function __construct($store_id, $value)
    {
      $this->store_id = $store_id;
      $this->value = $value;
    }

    /**
     * @return ArrayOfString
     */
    public function getStore_id()
    {
      return $this->store_id;
    }

    /**
     * @param ArrayOfString $store_id
     * @return catalogProductAttributeOptionLabelEntity
     */
    public function setStore_id($store_id)
    {
      $this->store_id = $store_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return catalogProductAttributeOptionLabelEntity
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
