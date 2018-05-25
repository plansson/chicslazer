<?php

class catalogCategoryEntityNoChildren
{

    /**
     * @var int $category_id
     */
    protected $category_id = null;

    /**
     * @var int $parent_id
     */
    protected $parent_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $is_active
     */
    protected $is_active = null;

    /**
     * @var int $position
     */
    protected $position = null;

    /**
     * @var int $level
     */
    protected $level = null;

    /**
     * @param int $category_id
     * @param int $parent_id
     * @param string $name
     * @param int $is_active
     * @param int $position
     * @param int $level
     */
    public function __construct($category_id, $parent_id, $name, $is_active, $position, $level)
    {
      $this->category_id = $category_id;
      $this->parent_id = $parent_id;
      $this->name = $name;
      $this->is_active = $is_active;
      $this->position = $position;
      $this->level = $level;
    }

    /**
     * @return int
     */
    public function getCategory_id()
    {
      return $this->category_id;
    }

    /**
     * @param int $category_id
     * @return catalogCategoryEntityNoChildren
     */
    public function setCategory_id($category_id)
    {
      $this->category_id = $category_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getParent_id()
    {
      return $this->parent_id;
    }

    /**
     * @param int $parent_id
     * @return catalogCategoryEntityNoChildren
     */
    public function setParent_id($parent_id)
    {
      $this->parent_id = $parent_id;
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
     * @return catalogCategoryEntityNoChildren
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return catalogCategoryEntityNoChildren
     */
    public function setIs_active($is_active)
    {
      $this->is_active = $is_active;
      return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param int $position
     * @return catalogCategoryEntityNoChildren
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param int $level
     * @return catalogCategoryEntityNoChildren
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

}
