<?php

class catalogProductAttributeEntity
{

    /**
     * @var string $attribute_id
     */
    protected $attribute_id = null;

    /**
     * @var string $attribute_code
     */
    protected $attribute_code = null;

    /**
     * @var string $frontend_input
     */
    protected $frontend_input = null;

    /**
     * @var string $scope
     */
    protected $scope = null;

    /**
     * @var string $default_value
     */
    protected $default_value = null;

    /**
     * @var int $is_unique
     */
    protected $is_unique = null;

    /**
     * @var int $is_required
     */
    protected $is_required = null;

    /**
     * @var ArrayOfString $apply_to
     */
    protected $apply_to = null;

    /**
     * @var int $is_configurable
     */
    protected $is_configurable = null;

    /**
     * @var int $is_searchable
     */
    protected $is_searchable = null;

    /**
     * @var int $is_visible_in_advanced_search
     */
    protected $is_visible_in_advanced_search = null;

    /**
     * @var int $is_comparable
     */
    protected $is_comparable = null;

    /**
     * @var int $is_used_for_promo_rules
     */
    protected $is_used_for_promo_rules = null;

    /**
     * @var int $is_visible_on_front
     */
    protected $is_visible_on_front = null;

    /**
     * @var int $used_in_product_listing
     */
    protected $used_in_product_listing = null;

    /**
     * @var associativeArray $additional_fields
     */
    protected $additional_fields = null;

    /**
     * @var catalogAttributeOptionEntityArray $options
     */
    protected $options = null;

    /**
     * @var catalogProductAttributeFrontendLabelArray $frontend_label
     */
    protected $frontend_label = null;

    /**
     * @param string $attribute_id
     * @param string $attribute_code
     * @param string $frontend_input
     * @param catalogProductAttributeFrontendLabelArray $frontend_label
     */
    public function __construct($attribute_id, $attribute_code, $frontend_input, $frontend_label)
    {
      $this->attribute_id = $attribute_id;
      $this->attribute_code = $attribute_code;
      $this->frontend_input = $frontend_input;
      $this->frontend_label = $frontend_label;
    }

    /**
     * @return string
     */
    public function getAttribute_id()
    {
      return $this->attribute_id;
    }

    /**
     * @param string $attribute_id
     * @return catalogProductAttributeEntity
     */
    public function setAttribute_id($attribute_id)
    {
      $this->attribute_id = $attribute_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttribute_code()
    {
      return $this->attribute_code;
    }

    /**
     * @param string $attribute_code
     * @return catalogProductAttributeEntity
     */
    public function setAttribute_code($attribute_code)
    {
      $this->attribute_code = $attribute_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrontend_input()
    {
      return $this->frontend_input;
    }

    /**
     * @param string $frontend_input
     * @return catalogProductAttributeEntity
     */
    public function setFrontend_input($frontend_input)
    {
      $this->frontend_input = $frontend_input;
      return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
      return $this->scope;
    }

    /**
     * @param string $scope
     * @return catalogProductAttributeEntity
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefault_value()
    {
      return $this->default_value;
    }

    /**
     * @param string $default_value
     * @return catalogProductAttributeEntity
     */
    public function setDefault_value($default_value)
    {
      $this->default_value = $default_value;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_unique()
    {
      return $this->is_unique;
    }

    /**
     * @param int $is_unique
     * @return catalogProductAttributeEntity
     */
    public function setIs_unique($is_unique)
    {
      $this->is_unique = $is_unique;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_required()
    {
      return $this->is_required;
    }

    /**
     * @param int $is_required
     * @return catalogProductAttributeEntity
     */
    public function setIs_required($is_required)
    {
      $this->is_required = $is_required;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getApply_to()
    {
      return $this->apply_to;
    }

    /**
     * @param ArrayOfString $apply_to
     * @return catalogProductAttributeEntity
     */
    public function setApply_to($apply_to)
    {
      $this->apply_to = $apply_to;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_configurable()
    {
      return $this->is_configurable;
    }

    /**
     * @param int $is_configurable
     * @return catalogProductAttributeEntity
     */
    public function setIs_configurable($is_configurable)
    {
      $this->is_configurable = $is_configurable;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_searchable()
    {
      return $this->is_searchable;
    }

    /**
     * @param int $is_searchable
     * @return catalogProductAttributeEntity
     */
    public function setIs_searchable($is_searchable)
    {
      $this->is_searchable = $is_searchable;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_visible_in_advanced_search()
    {
      return $this->is_visible_in_advanced_search;
    }

    /**
     * @param int $is_visible_in_advanced_search
     * @return catalogProductAttributeEntity
     */
    public function setIs_visible_in_advanced_search($is_visible_in_advanced_search)
    {
      $this->is_visible_in_advanced_search = $is_visible_in_advanced_search;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_comparable()
    {
      return $this->is_comparable;
    }

    /**
     * @param int $is_comparable
     * @return catalogProductAttributeEntity
     */
    public function setIs_comparable($is_comparable)
    {
      $this->is_comparable = $is_comparable;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_used_for_promo_rules()
    {
      return $this->is_used_for_promo_rules;
    }

    /**
     * @param int $is_used_for_promo_rules
     * @return catalogProductAttributeEntity
     */
    public function setIs_used_for_promo_rules($is_used_for_promo_rules)
    {
      $this->is_used_for_promo_rules = $is_used_for_promo_rules;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_visible_on_front()
    {
      return $this->is_visible_on_front;
    }

    /**
     * @param int $is_visible_on_front
     * @return catalogProductAttributeEntity
     */
    public function setIs_visible_on_front($is_visible_on_front)
    {
      $this->is_visible_on_front = $is_visible_on_front;
      return $this;
    }

    /**
     * @return int
     */
    public function getUsed_in_product_listing()
    {
      return $this->used_in_product_listing;
    }

    /**
     * @param int $used_in_product_listing
     * @return catalogProductAttributeEntity
     */
    public function setUsed_in_product_listing($used_in_product_listing)
    {
      $this->used_in_product_listing = $used_in_product_listing;
      return $this;
    }

    /**
     * @return associativeArray
     */
    public function getAdditional_fields()
    {
      return $this->additional_fields;
    }

    /**
     * @param associativeArray $additional_fields
     * @return catalogProductAttributeEntity
     */
    public function setAdditional_fields($additional_fields)
    {
      $this->additional_fields = $additional_fields;
      return $this;
    }

    /**
     * @return catalogAttributeOptionEntityArray
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param catalogAttributeOptionEntityArray $options
     * @return catalogProductAttributeEntity
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return catalogProductAttributeFrontendLabelArray
     */
    public function getFrontend_label()
    {
      return $this->frontend_label;
    }

    /**
     * @param catalogProductAttributeFrontendLabelArray $frontend_label
     * @return catalogProductAttributeEntity
     */
    public function setFrontend_label($frontend_label)
    {
      $this->frontend_label = $frontend_label;
      return $this;
    }

}
