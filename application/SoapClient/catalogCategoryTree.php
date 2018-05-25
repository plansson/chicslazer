<?php

class catalogCategoryTree
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
     * @var int $position
     */
    protected $position = null;

    /**
     * @var int $level
     */
    protected $level = null;

    /**
     * @var ArrayOfCatalogCategoryEntities $children
     */
    protected $children = null;

    /**
     * @param int $category_id
     * @param int $parent_id
     * @param string $name
     * @param int $position
     * @param int $level
     * @param ArrayOfCatalogCategoryEntities $children
     */
    public function __construct($category_id, $parent_id, $name, $position, $level, $children)
    {
      $this->category_id = $category_id;
      $this->parent_id = $parent_id;
      $this->name = $name;
      $this->position = $position;
      $this->level = $level;
      $this->children = $children;
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
     * @return catalogCategoryTree
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
     * @return catalogCategoryTree
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
     * @return catalogCategoryTree
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return catalogCategoryTree
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
     * @return catalogCategoryTree
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return ArrayOfCatalogCategoryEntities
     */
    public function getChildren()
    {
      return $this->children;
    }

    /**
     * @param ArrayOfCatalogCategoryEntities $children
     * @return catalogCategoryTree
     */
    public function setChildren($children)
    {
      $this->children = $children;
      return $this;
    }

}
