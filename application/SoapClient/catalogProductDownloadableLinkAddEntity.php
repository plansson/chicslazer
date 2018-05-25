<?php

class catalogProductDownloadableLinkAddEntity
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
     * @var int $is_unlimited
     */
    protected $is_unlimited = null;

    /**
     * @var int $number_of_downloads
     */
    protected $number_of_downloads = null;

    /**
     * @var int $is_shareable
     */
    protected $is_shareable = null;

    /**
     * @var catalogProductDownloadableLinkAddSampleEntity $sample
     */
    protected $sample = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var catalogProductDownloadableLinkFileEntity $file
     */
    protected $file = null;

    /**
     * @var string $link_url
     */
    protected $link_url = null;

    /**
     * @var string $sample_url
     */
    protected $sample_url = null;

    /**
     * @var int $sort_order
     */
    protected $sort_order = null;

    /**
     * @param string $title
     */
    public function __construct($title)
    {
      $this->title = $title;
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
     * @return catalogProductDownloadableLinkAddEntity
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
     * @return catalogProductDownloadableLinkAddEntity
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_unlimited()
    {
      return $this->is_unlimited;
    }

    /**
     * @param int $is_unlimited
     * @return catalogProductDownloadableLinkAddEntity
     */
    public function setIs_unlimited($is_unlimited)
    {
      $this->is_unlimited = $is_unlimited;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber_of_downloads()
    {
      return $this->number_of_downloads;
    }

    /**
     * @param int $number_of_downloads
     * @return catalogProductDownloadableLinkAddEntity
     */
    public function setNumber_of_downloads($number_of_downloads)
    {
      $this->number_of_downloads = $number_of_downloads;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_shareable()
    {
      return $this->is_shareable;
    }

    /**
     * @param int $is_shareable
     * @return catalogProductDownloadableLinkAddEntity
     */
    public function setIs_shareable($is_shareable)
    {
      $this->is_shareable = $is_shareable;
      return $this;
    }

    /**
     * @return catalogProductDownloadableLinkAddSampleEntity
     */
    public function getSample()
    {
      return $this->sample;
    }

    /**
     * @param catalogProductDownloadableLinkAddSampleEntity $sample
     * @return catalogProductDownloadableLinkAddEntity
     */
    public function setSample($sample)
    {
      $this->sample = $sample;
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
     * @return catalogProductDownloadableLinkAddEntity
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return catalogProductDownloadableLinkFileEntity
     */
    public function getFile()
    {
      return $this->file;
    }

    /**
     * @param catalogProductDownloadableLinkFileEntity $file
     * @return catalogProductDownloadableLinkAddEntity
     */
    public function setFile($file)
    {
      $this->file = $file;
      return $this;
    }

    /**
     * @return string
     */
    public function getLink_url()
    {
      return $this->link_url;
    }

    /**
     * @param string $link_url
     * @return catalogProductDownloadableLinkAddEntity
     */
    public function setLink_url($link_url)
    {
      $this->link_url = $link_url;
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
     * @return catalogProductDownloadableLinkAddEntity
     */
    public function setSample_url($sample_url)
    {
      $this->sample_url = $sample_url;
      return $this;
    }

    /**
     * @return int
     */
    public function getSort_order()
    {
      return $this->sort_order;
    }

    /**
     * @param int $sort_order
     * @return catalogProductDownloadableLinkAddEntity
     */
    public function setSort_order($sort_order)
    {
      $this->sort_order = $sort_order;
      return $this;
    }

}
