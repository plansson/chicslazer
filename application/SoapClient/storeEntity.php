<?php

class storeEntity
{

    /**
     * @var int $store_id
     */
    protected $store_id = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var int $website_id
     */
    protected $website_id = null;

    /**
     * @var int $group_id
     */
    protected $group_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $sort_order
     */
    protected $sort_order = null;

    /**
     * @var int $is_active
     */
    protected $is_active = null;

    /**
     * @param int $store_id
     * @param string $code
     * @param int $website_id
     * @param int $group_id
     * @param string $name
     * @param int $sort_order
     * @param int $is_active
     */
    public function __construct($store_id, $code, $website_id, $group_id, $name, $sort_order, $is_active)
    {
      $this->store_id = $store_id;
      $this->code = $code;
      $this->website_id = $website_id;
      $this->group_id = $group_id;
      $this->name = $name;
      $this->sort_order = $sort_order;
      $this->is_active = $is_active;
    }

    /**
     * @return int
     */
    public function getStore_id()
    {
      return $this->store_id;
    }

    /**
     * @param int $store_id
     * @return storeEntity
     */
    public function setStore_id($store_id)
    {
      $this->store_id = $store_id;
      return $this;
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
     * @return storeEntity
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebsite_id()
    {
      return $this->website_id;
    }

    /**
     * @param int $website_id
     * @return storeEntity
     */
    public function setWebsite_id($website_id)
    {
      $this->website_id = $website_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroup_id()
    {
      return $this->group_id;
    }

    /**
     * @param int $group_id
     * @return storeEntity
     */
    public function setGroup_id($group_id)
    {
      $this->group_id = $group_id;
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
     * @return storeEntity
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return storeEntity
     */
    public function setSort_order($sort_order)
    {
      $this->sort_order = $sort_order;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_active()
    {
      return $this->is_active;
    }

    /**
     * @param int $is_active
     * @return storeEntity
     */
    public function setIs_active($is_active)
    {
      $this->is_active = $is_active;
      return $this;
    }

}
