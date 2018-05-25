<?php

class catalogProductDownloadableLinkSampleEntity
{

    /**
     * @var string $sample_id
     */
    protected $sample_id = null;

    /**
     * @var string $product_id
     */
    protected $product_id = null;

    /**
     * @var string $sample_file
     */
    protected $sample_file = null;

    /**
     * @var string $sample_url
     */
    protected $sample_url = null;

    /**
     * @var string $sample_type
     */
    protected $sample_type = null;

    /**
     * @var string $sort_order
     */
    protected $sort_order = null;

    /**
     * @var string $default_title
     */
    protected $default_title = null;

    /**
     * @var string $store_title
     */
    protected $store_title = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @param string $sample_id
     * @param string $product_id
     * @param string $sample_type
     * @param string $sort_order
     * @param string $default_title
     * @param string $store_title
     * @param string $title
     */
    public function __construct($sample_id, $product_id, $sample_type, $sort_order, $default_title, $store_title, $title)
    {
      $this->sample_id = $sample_id;
      $this->product_id = $product_id;
      $this->sample_type = $sample_type;
      $this->sort_order = $sort_order;
      $this->default_title = $default_title;
      $this->store_title = $store_title;
      $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSample_id()
    {
      return $this->sample_id;
    }

    /**
     * @param string $sample_id
     * @return catalogProductDownloadableLinkSampleEntity
     */
    public function setSample_id($sample_id)
    {
      $this->sample_id = $sample_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getProduct_id()
    {
      return $this->product_id;
    }

    /**
     * @param string $product_id
     * @return catalogProductDownloadableLinkSampleEntity
     */
    public function setProduct_id($product_id)
    {
      $this->product_id = $product_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getSample_file()
    {
      return $this->sample_file;
    }

    /**
     * @param string $sample_file
     * @return catalogProductDownloadableLinkSampleEntity
     */
    public function setSample_file($sample_file)
    {
      $this->sample_file = $sample_file;
      return $this;
    }

    /**
     * @return string
     */
    public function getSample_url()
    {
      return $this->sample_url;
    }

    /**
     * @param string $sample_url
     * @return catalogProductDownloadableLinkSampleEntity
     */
    public function setSample_url($sample_url)
    {
      $this->sample_url = $sample_url;
      return $this;
    }

    /**
     * @return string
     */
    public function getSample_type()
    {
      return $this->sample_type;
    }

    /**
     * @param string $sample_type
     * @return catalogProductDownloadableLinkSampleEntity
     */
    public function setSample_type($sample_type)
    {
      $this->sample_type = $sample_type;
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
     * @return catalogProductDownloadableLinkSampleEntity
     */
    public function setSort_order($sort_order)
    {
      $this->sort_order = $sort_order;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefault_title()
    {
      return $this->default_title;
    }

    /**
     * @param string $default_title
     * @return catalogProductDownloadableLinkSampleEntity
     */
    public function setDefault_title($default_title)
    {
      $this->default_title = $default_title;
      return $this;
    }

    /**
     * @return string
     */
    public function getStore_title()
    {
      return $this->store_title;
    }

    /**
     * @param string $store_title
     * @return catalogProductDownloadableLinkSampleEntity
     */
    public function setStore_title($store_title)
    {
      $this->store_title = $store_title;
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
     * @return catalogProductDownloadableLinkSampleEntity
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

}
