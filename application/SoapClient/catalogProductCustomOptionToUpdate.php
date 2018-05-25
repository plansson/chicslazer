<?php

class catalogProductCustomOptionToUpdate
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $sort_order
     */
    protected $sort_order = null;

    /**
     * @var int $is_require
     */
    protected $is_require = null;

    /**
     * @var catalogProductCustomOptionAdditionalFieldsArray $additional_fields
     */
    protected $additional_fields = null;

    
    public function __construct()
    {
    
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
     * @return catalogProductCustomOptionToUpdate
     */
    public function setTitle($title)
    {
      $this->title = $title;
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
     * @return catalogProductCustomOptionToUpdate
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getSort_order()
    {
      return $this->sort_order;
    }

    /**
     * @param string $sort_order
     * @return catalogProductCustomOptionToUpdate
     */
    public function setSort_order($sort_order)
    {
      $this->sort_order = $sort_order;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_require()
    {
      return $this->is_require;
    }

    /**
     * @param int $is_require
     * @return catalogProductCustomOptionToUpdate
     */
    public function setIs_require($is_require)
    {
      $this->is_require = $is_require;
      return $this;
    }

    /**
     * @return catalogProductCustomOptionAdditionalFieldsArray
     */
    public function getAdditional_fields()
    {
      return $this->additional_fields;
    }

    /**
     * @param catalogProductCustomOptionAdditionalFieldsArray $additional_fields
     * @return catalogProductCustomOptionToUpdate
     */
    public function setAdditional_fields($additional_fields)
    {
      $this->additional_fields = $additional_fields;
      return $this;
    }

}
