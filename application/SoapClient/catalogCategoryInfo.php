<?php

class catalogCategoryInfo
{

    /**
     * @var string $category_id
     */
    protected $category_id = null;

    /**
     * @var int $is_active
     */
    protected $is_active = null;

    /**
     * @var string $position
     */
    protected $position = null;

    /**
     * @var string $level
     */
    protected $level = null;

    /**
     * @var string $parent_id
     */
    protected $parent_id = null;

    /**
     * @var string $all_children
     */
    protected $all_children = null;

    /**
     * @var string $children
     */
    protected $children = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $updated_at
     */
    protected $updated_at = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $url_key
     */
    protected $url_key = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $meta_title
     */
    protected $meta_title = null;

    /**
     * @var string $meta_keywords
     */
    protected $meta_keywords = null;

    /**
     * @var string $meta_description
     */
    protected $meta_description = null;

    /**
     * @var string $path
     */
    protected $path = null;

    /**
     * @var string $url_path
     */
    protected $url_path = null;

    /**
     * @var int $children_count
     */
    protected $children_count = null;

    /**
     * @var string $display_mode
     */
    protected $display_mode = null;

    /**
     * @var int $is_anchor
     */
    protected $is_anchor = null;

    /**
     * @var ArrayOfString $available_sort_by
     */
    protected $available_sort_by = null;

    /**
     * @var string $custom_design
     */
    protected $custom_design = null;

    /**
     * @var string $custom_design_apply
     */
    protected $custom_design_apply = null;

    /**
     * @var string $custom_design_from
     */
    protected $custom_design_from = null;

    /**
     * @var string $custom_design_to
     */
    protected $custom_design_to = null;

    /**
     * @var string $page_layout
     */
    protected $page_layout = null;

    /**
     * @var string $custom_layout_update
     */
    protected $custom_layout_update = null;

    /**
     * @var string $default_sort_by
     */
    protected $default_sort_by = null;

    /**
     * @var int $landing_page
     */
    protected $landing_page = null;

    /**
     * @var int $include_in_menu
     */
    protected $include_in_menu = null;

    /**
     * @var int $custom_use_parent_settings
     */
    protected $custom_use_parent_settings = null;

    /**
     * @var int $custom_apply_to_products
     */
    protected $custom_apply_to_products = null;

    /**
     * @var string $filter_price_range
     */
    protected $filter_price_range = null;

    /**
     * @param string $category_id
     * @param int $is_active
     * @param string $position
     * @param string $level
     * @param string $parent_id
     * @param string $all_children
     * @param string $children
     */
    public function __construct($category_id, $is_active, $position, $level, $parent_id, $all_children, $children)
    {
      $this->category_id = $category_id;
      $this->is_active = $is_active;
      $this->position = $position;
      $this->level = $level;
      $this->parent_id = $parent_id;
      $this->all_children = $all_children;
      $this->children = $children;
    }

    /**
     * @return string
     */
    public function getCategory_id()
    {
      return $this->category_id;
    }

    /**
     * @param string $category_id
     * @return catalogCategoryInfo
     */
    public function setCategory_id($category_id)
    {
      $this->category_id = $category_id;
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
     * @return catalogCategoryInfo
     */
    public function setIs_active($is_active)
    {
      $this->is_active = $is_active;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param string $position
     * @return catalogCategoryInfo
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param string $level
     * @return catalogCategoryInfo
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return string
     */
    public function getParent_id()
    {
      return $this->parent_id;
    }

    /**
     * @param string $parent_id
     * @return catalogCategoryInfo
     */
    public function setParent_id($parent_id)
    {
      $this->parent_id = $parent_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getAll_children()
    {
      return $this->all_children;
    }

    /**
     * @param string $all_children
     * @return catalogCategoryInfo
     */
    public function setAll_children($all_children)
    {
      $this->all_children = $all_children;
      return $this;
    }

    /**
     * @return string
     */
    public function getChildren()
    {
      return $this->children;
    }

    /**
     * @param string $children
     * @return catalogCategoryInfo
     */
    public function setChildren($children)
    {
      $this->children = $children;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreated_at()
    {
      return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return catalogCategoryInfo
     */
    public function setCreated_at($created_at)
    {
      $this->created_at = $created_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpdated_at()
    {
      return $this->updated_at;
    }

    /**
     * @param string $updated_at
     * @return catalogCategoryInfo
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
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
     * @return catalogCategoryInfo
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl_key()
    {
      return $this->url_key;
    }

    /**
     * @param string $url_key
     * @return catalogCategoryInfo
     */
    public function setUrl_key($url_key)
    {
      $this->url_key = $url_key;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return catalogCategoryInfo
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getMeta_title()
    {
      return $this->meta_title;
    }

    /**
     * @param string $meta_title
     * @return catalogCategoryInfo
     */
    public function setMeta_title($meta_title)
    {
      $this->meta_title = $meta_title;
      return $this;
    }

    /**
     * @return string
     */
    public function getMeta_keywords()
    {
      return $this->meta_keywords;
    }

    /**
     * @param string $meta_keywords
     * @return catalogCategoryInfo
     */
    public function setMeta_keywords($meta_keywords)
    {
      $this->meta_keywords = $meta_keywords;
      return $this;
    }

    /**
     * @return string
     */
    public function getMeta_description()
    {
      return $this->meta_description;
    }

    /**
     * @param string $meta_description
     * @return catalogCategoryInfo
     */
    public function setMeta_description($meta_description)
    {
      $this->meta_description = $meta_description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
      return $this->path;
    }

    /**
     * @param string $path
     * @return catalogCategoryInfo
     */
    public function setPath($path)
    {
      $this->path = $path;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl_path()
    {
      return $this->url_path;
    }

    /**
     * @param string $url_path
     * @return catalogCategoryInfo
     */
    public function setUrl_path($url_path)
    {
      $this->url_path = $url_path;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildren_count()
    {
      return $this->children_count;
    }

    /**
     * @param int $children_count
     * @return catalogCategoryInfo
     */
    public function setChildren_count($children_count)
    {
      $this->children_count = $children_count;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplay_mode()
    {
      return $this->display_mode;
    }

    /**
     * @param string $display_mode
     * @return catalogCategoryInfo
     */
    public function setDisplay_mode($display_mode)
    {
      $this->display_mode = $display_mode;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_anchor()
    {
      return $this->is_anchor;
    }

    /**
     * @param int $is_anchor
     * @return catalogCategoryInfo
     */
    public function setIs_anchor($is_anchor)
    {
      $this->is_anchor = $is_anchor;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getAvailable_sort_by()
    {
      return $this->available_sort_by;
    }

    /**
     * @param ArrayOfString $available_sort_by
     * @return catalogCategoryInfo
     */
    public function setAvailable_sort_by($available_sort_by)
    {
      $this->available_sort_by = $available_sort_by;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom_design()
    {
      return $this->custom_design;
    }

    /**
     * @param string $custom_design
     * @return catalogCategoryInfo
     */
    public function setCustom_design($custom_design)
    {
      $this->custom_design = $custom_design;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom_design_apply()
    {
      return $this->custom_design_apply;
    }

    /**
     * @param string $custom_design_apply
     * @return catalogCategoryInfo
     */
    public function setCustom_design_apply($custom_design_apply)
    {
      $this->custom_design_apply = $custom_design_apply;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom_design_from()
    {
      return $this->custom_design_from;
    }

    /**
     * @param string $custom_design_from
     * @return catalogCategoryInfo
     */
    public function setCustom_design_from($custom_design_from)
    {
      $this->custom_design_from = $custom_design_from;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom_design_to()
    {
      return $this->custom_design_to;
    }

    /**
     * @param string $custom_design_to
     * @return catalogCategoryInfo
     */
    public function setCustom_design_to($custom_design_to)
    {
      $this->custom_design_to = $custom_design_to;
      return $this;
    }

    /**
     * @return string
     */
    public function getPage_layout()
    {
      return $this->page_layout;
    }

    /**
     * @param string $page_layout
     * @return catalogCategoryInfo
     */
    public function setPage_layout($page_layout)
    {
      $this->page_layout = $page_layout;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom_layout_update()
    {
      return $this->custom_layout_update;
    }

    /**
     * @param string $custom_layout_update
     * @return catalogCategoryInfo
     */
    public function setCustom_layout_update($custom_layout_update)
    {
      $this->custom_layout_update = $custom_layout_update;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefault_sort_by()
    {
      return $this->default_sort_by;
    }

    /**
     * @param string $default_sort_by
     * @return catalogCategoryInfo
     */
    public function setDefault_sort_by($default_sort_by)
    {
      $this->default_sort_by = $default_sort_by;
      return $this;
    }

    /**
     * @return int
     */
    public function getLanding_page()
    {
      return $this->landing_page;
    }

    /**
     * @param int $landing_page
     * @return catalogCategoryInfo
     */
    public function setLanding_page($landing_page)
    {
      $this->landing_page = $landing_page;
      return $this;
    }

    /**
     * @return int
     */
    public function getInclude_in_menu()
    {
      return $this->include_in_menu;
    }

    /**
     * @param int $include_in_menu
     * @return catalogCategoryInfo
     */
    public function setInclude_in_menu($include_in_menu)
    {
      $this->include_in_menu = $include_in_menu;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustom_use_parent_settings()
    {
      return $this->custom_use_parent_settings;
    }

    /**
     * @param int $custom_use_parent_settings
     * @return catalogCategoryInfo
     */
    public function setCustom_use_parent_settings($custom_use_parent_settings)
    {
      $this->custom_use_parent_settings = $custom_use_parent_settings;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustom_apply_to_products()
    {
      return $this->custom_apply_to_products;
    }

    /**
     * @param int $custom_apply_to_products
     * @return catalogCategoryInfo
     */
    public function setCustom_apply_to_products($custom_apply_to_products)
    {
      $this->custom_apply_to_products = $custom_apply_to_products;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilter_price_range()
    {
      return $this->filter_price_range;
    }

    /**
     * @param string $filter_price_range
     * @return catalogCategoryInfo
     */
    public function setFilter_price_range($filter_price_range)
    {
      $this->filter_price_range = $filter_price_range;
      return $this;
    }

}
