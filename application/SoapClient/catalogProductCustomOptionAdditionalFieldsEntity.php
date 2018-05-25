<?php

class catalogProductCustomOptionAdditionalFieldsEntity
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $price
     */
    protected $price = null;

    /**
     * @var string $price_type
     */
    protected $price_type = null;

    /**
     * @var string $sku
     */
    protected $sku = null;

    /**
     * @var string $max_characters
     */
    protected $max_characters = null;

    /**
     * @var string $sort_order
     */
    protected $sort_order = null;

    /**
     * @var string $file_extension
     */
    protected $file_extension = null;

    /**
     * @var string $image_size_x
     */
    protected $image_size_x = null;

    /**
     * @var string $image_size_y
     */
    protected $image_size_y = null;

    /**
     * @var string $value_id
     */
    protected $value_id = null;

    
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
     * @return catalogProductCustomOptionAdditionalFieldsEntity
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param string $price
     * @return catalogProductCustomOptionAdditionalFieldsEntity
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrice_type()
    {
      return $this->price_type;
    }

    /**
     * @param string $price_type
     * @return catalogProductCustomOptionAdditionalFieldsEntity
     */
    public function setPrice_type($price_type)
    {
      $this->price_type = $price_type;
      return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
      return $this->sku;
    }

    /**
     * @param string $sku
     * @return catalogProductCustomOptionAdditionalFieldsEntity
     */
    public function setSku($sku)
    {
      $this->sku = $sku;
      return $this;
    }

    /**
     * @return string
     */
    public function getMax_characters()
    {
      return $this->max_characters;
    }

    /**
     * @param string $max_characters
     * @return catalogProductCustomOptionAdditionalFieldsEntity
     */
    public function setMax_characters($max_characters)
    {
      $this->max_characters = $max_characters;
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
     * @return catalogProductCustomOptionAdditionalFieldsEntity
     */
    public function setSort_order($sort_order)
    {
      $this->sort_order = $sort_order;
      return $this;
    }

    /**
     * @return string
     */
    public function getFile_extension()
    {
      return $this->file_extension;
    }

    /**
     * @param string $file_extension
     * @return catalogProductCustomOptionAdditionalFieldsEntity
     */
    public function setFile_extension($file_extension)
    {
      $this->file_extension = $file_extension;
      return $this;
    }

    /**
     * @return string
     */
    public function getImage_size_x()
    {
      return $this->image_size_x;
    }

    /**
     * @param string $image_size_x
     * @return catalogProductCustomOptionAdditionalFieldsEntity
     */
    public function setImage_size_x($image_size_x)
    {
      $this->image_size_x = $image_size_x;
      return $this;
    }

    /**
     * @return string
     */
    public function getImage_size_y()
    {
      return $this->image_size_y;
    }

    /**
     * @param string $image_size_y
     * @return catalogProductCustomOptionAdditionalFieldsEntity
     */
    public function setImage_size_y($image_size_y)
    {
      $this->image_size_y = $image_size_y;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue_id()
    {
      return $this->value_id;
    }

    /**
     * @param string $value_id
     * @return catalogProductCustomOptionAdditionalFieldsEntity
     */
    public function setValue_id($value_id)
    {
      $this->value_id = $value_id;
      return $this;
    }

}
