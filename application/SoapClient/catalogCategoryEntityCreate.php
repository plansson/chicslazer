<?php

class catalogCategoryEntityCreate
{

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
     * @var ArrayOfString $available_sort_by
     */
    protected $available_sort_by = null;

    /**
     * @var string $custom_design
     */
    protected $custom_design = null;

    /**
     * @var int $custom_design_apply
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
     * @var string $custom_layout_update
     */
    protected $custom_layout_update = null;

    /**
     * @var string $default_sort_by
     */
    protected $default_sort_by = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $display_mode
     */
    protected $display_mode = null;

    /**
     * @var int $is_anchor
     */
    protected $is_anchor = null;

    /**
     * @var int $landing_page
     */
    protected $landing_page = null;

    /**
     * @var string $meta_description
     */
    protected $meta_description = null;

    /**
     * @var string $meta_keywords
     */
    protected $meta_keywords = null;

    /**
     * @var string $meta_title
     */
    protected $meta_title = null;

    /**
     * @var string $page_layout
     */
    protected $page_layout = null;

    /**
     * @var string $url_key
     */
    protected $url_key = null;

    /**
     * @var int $include_in_menu
     */
    protected $include_in_menu = null;

    
    public function __construct()
    {
    
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
     * @return catalogCategoryEntityCreate
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
     * @return catalogCategoryEntityCreate
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
     * @return catalogCategoryEntityCreate
     */
    public function setPosition($position)
    {
      $this->position = $position;
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
     * @return catalogCategoryEntityCreate
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
     * @return catalogCategoryEntityCreate
     */
    public function setCustom_design($custom_design)
    {
      $this->custom_design = $custom_design;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustom_design_apply()
    {
      return $this->custom_design_apply;
    }

    /**
     * @param int $custom_design_apply
     * @return catalogCategoryEntityCreate
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
     * @return catalogCategoryEntityCreate
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
     * @return catalogCategoryEntityCreate
     */
    public function setCustom_design_to($custom_design_to)
    {
      $this->custom_design_to = $custom_design_to;
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
     * @return catalogCategoryEntityCreate
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
     * @return catalogCategoryEntityCreate
     */
    public function setDefault_sort_by($default_sort_by)
    {
      $this->default_sort_by = $default_sort_by;
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
     * @return catalogCategoryEntityCreate
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return catalogCategoryEntityCreate
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
     * @return catalogCategoryEntityCreate
     */
    public function setIs_anchor($is_anchor)
    {
      $this->is_anchor = $is_anchor;
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
     * @return catalogCategoryEntityCreate
     */
    public function setLanding_page($landing_page)
    {
      $this->landing_page = $landing_page;
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
     * @return catalogCategoryEntityCreate
     */
    public function setMeta_description($meta_description)
    {
      $this->meta_description = $meta_description;
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
     * @return catalogCategoryEntityCreate
     */
    public function setMeta_keywords($meta_keywords)
    {
      $this->meta_keywords = $meta_keywords;
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
     * @return catalogCategoryEntityCreate
     */
    public function setMeta_title($meta_title)
    {
      $this->meta_title = $meta_title;
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
     * @return catalogCategoryEntityCreate
     */
    public function setPage_layout($page_layout)
    {
      $this->page_layout = $page_layout;
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
     * @return catalogCategoryEntityCreate
     */
    public function setUrl_key($url_key)
    {
      $this->url_key = $url_key;
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
     * @return catalogCategoryEntityCreate
     */
    public function setInclude_in_menu($include_in_menu)
    {
      $this->include_in_menu = $include_in_menu;
      return $this;
    }

}
