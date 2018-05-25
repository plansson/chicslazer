<?php

class catalogProductAttributeFrontendLabelEntity
{

    /**
     * @var string $store_id
     */
    protected $store_id = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @param string $store_id
     * @param string $label
     */
    public function __construct($store_id, $label)
    {
      $this->store_id = $store_id;
      $this->label = $label;
    }

    /**
     * @return string
     */
    public function getStore_id()
    {
      return $this->store_id;
    }

    /**
     * @param string $store_id
     * @return catalogProductAttributeFrontendLabelEntity
     */
    public function setStore_id($store_id)
    {
      $this->store_id = $store_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return catalogProductAttributeFrontendLabelEntity
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
