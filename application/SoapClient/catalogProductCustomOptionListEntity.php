<?php

class catalogProductCustomOptionListEntity
{

    /**
     * @var string $option_id
     */
    protected $option_id = null;

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
     * @param string $option_id
     * @param string $title
     * @param string $type
     * @param string $sort_order
     * @param int $is_require
     */
    public function __construct($option_id, $title, $type, $sort_order, $is_require)
    {
      $this->option_id = $option_id;
      $this->title = $title;
      $this->type = $type;
      $this->sort_order = $sort_order;
      $this->is_require = $is_require;
    }

    /**
     * @return string
     */
    public function getOption_id()
    {
      return $this->option_id;
    }

    /**
     * @param string $option_id
     * @return catalogProductCustomOptionListEntity
     */
    public function setOption_id($option_id)
    {
      $this->option_id = $option_id;
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
     * @return catalogProductCustomOptionListEntity
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
     * @return catalogProductCustomOptionListEntity
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
     * @return catalogProductCustomOptionListEntity
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
     * @return catalogProductCustomOptionListEntity
     */
    public function setIs_require($is_require)
    {
      $this->is_require = $is_require;
      return $this;
    }

}
