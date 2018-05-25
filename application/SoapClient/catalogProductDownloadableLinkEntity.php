<?php

class catalogProductDownloadableLinkEntity
{

    /**
     * @var string $link_id
     */
    protected $link_id = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $price
     */
    protected $price = null;

    /**
     * @var int $number_of_downloads
     */
    protected $number_of_downloads = null;

    /**
     * @var int $is_unlimited
     */
    protected $is_unlimited = null;

    /**
     * @var int $is_shareable
     */
    protected $is_shareable = null;

    /**
     * @var string $link_url
     */
    protected $link_url = null;

    /**
     * @var string $link_type
     */
    protected $link_type = null;

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
     * @var int $sort_order
     */
    protected $sort_order = null;

    /**
     * @var catalogProductDownloadableLinkFileInfoEntityArray $file_save
     */
    protected $file_save = null;

    /**
     * @var catalogProductDownloadableLinkFileInfoEntityArray $sample_file_save
     */
    protected $sample_file_save = null;

    /**
     * @param string $link_id
     * @param string $title
     * @param string $price
     * @param int $is_shareable
     * @param string $link_url
     * @param string $link_type
     * @param string $sample_type
     * @param int $sort_order
     */
    public function __construct($link_id, $title, $price, $is_shareable, $link_url, $link_type, $sample_type, $sort_order)
    {
      $this->link_id = $link_id;
      $this->title = $title;
      $this->price = $price;
      $this->is_shareable = $is_shareable;
      $this->link_url = $link_url;
      $this->link_type = $link_type;
      $this->sample_type = $sample_type;
      $this->sort_order = $sort_order;
    }

    /**
     * @return string
     */
    public function getLink_id()
    {
      return $this->link_id;
    }

    /**
     * @param string $link_id
     * @return catalogProductDownloadableLinkEntity
     */
    public function setLink_id($link_id)
    {
      $this->link_id = $link_id;
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
     * @return catalogProductDownloadableLinkEntity
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
     * @return catalogProductDownloadableLinkEntity
     */
    public function setPrice($price)
    {
      $this->price = $price;
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
     * @return catalogProductDownloadableLinkEntity
     */
    public function setNumber_of_downloads($number_of_downloads)
    {
      $this->number_of_downloads = $number_of_downloads;
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
     * @return catalogProductDownloadableLinkEntity
     */
    public function setIs_unlimited($is_unlimited)
    {
      $this->is_unlimited = $is_unlimited;
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
     * @return catalogProductDownloadableLinkEntity
     */
    public function setIs_shareable($is_shareable)
    {
      $this->is_shareable = $is_shareable;
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
     * @return catalogProductDownloadableLinkEntity
     */
    public function setLink_url($link_url)
    {
      $this->link_url = $link_url;
      return $this;
    }

    /**
     * @return string
     */
    public function getLink_type()
    {
      return $this->link_type;
    }

    /**
     * @param string $link_type
     * @return catalogProductDownloadableLinkEntity
     */
    public function setLink_type($link_type)
    {
      $this->link_type = $link_type;
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
     * @return catalogProductDownloadableLinkEntity
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
     * @return catalogProductDownloadableLinkEntity
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
     * @return catalogProductDownloadableLinkEntity
     */
    public function setSample_type($sample_type)
    {
      $this->sample_type = $sample_type;
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
     * @return catalogProductDownloadableLinkEntity
     */
    public function setSort_order($sort_order)
    {
      $this->sort_order = $sort_order;
      return $this;
    }

    /**
     * @return catalogProductDownloadableLinkFileInfoEntityArray
     */
    public function getFile_save()
    {
      return $this->file_save;
    }

    /**
     * @param catalogProductDownloadableLinkFileInfoEntityArray $file_save
     * @return catalogProductDownloadableLinkEntity
     */
    public function setFile_save($file_save)
    {
      $this->file_save = $file_save;
      return $this;
    }

    /**
     * @return catalogProductDownloadableLinkFileInfoEntityArray
     */
    public function getSample_file_save()
    {
      return $this->sample_file_save;
    }

    /**
     * @param catalogProductDownloadableLinkFileInfoEntityArray $sample_file_save
     * @return catalogProductDownloadableLinkEntity
     */
    public function setSample_file_save($sample_file_save)
    {
      $this->sample_file_save = $sample_file_save;
      return $this;
    }

}
