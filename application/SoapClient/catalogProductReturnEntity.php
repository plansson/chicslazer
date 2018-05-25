<?php

class catalogProductReturnEntity
{

    /**
     * @var string $product_id
     */
    protected $product_id = null;

    /**
     * @var string $sku
     */
    protected $sku = null;

    /**
     * @var string $set
     */
    protected $set = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var ArrayOfString $categories
     */
    protected $categories = null;

    /**
     * @var ArrayOfString $websites
     */
    protected $websites = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $updated_at
     */
    protected $updated_at = null;

    /**
     * @var string $type_id
     */
    protected $type_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $short_description
     */
    protected $short_description = null;

    /**
     * @var string $weight
     */
    protected $weight = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $url_key
     */
    protected $url_key = null;

    /**
     * @var string $url_path
     */
    protected $url_path = null;

    /**
     * @var string $visibility
     */
    protected $visibility = null;

    /**
     * @var ArrayOfString $category_ids
     */
    protected $category_ids = null;

    /**
     * @var ArrayOfString $website_ids
     */
    protected $website_ids = null;

    /**
     * @var string $has_options
     */
    protected $has_options = null;

    /**
     * @var string $gift_message_available
     */
    protected $gift_message_available = null;

    /**
     * @var string $price
     */
    protected $price = null;

    /**
     * @var string $special_price
     */
    protected $special_price = null;

    /**
     * @var string $special_from_date
     */
    protected $special_from_date = null;

    /**
     * @var string $special_to_date
     */
    protected $special_to_date = null;

    /**
     * @var string $tax_class_id
     */
    protected $tax_class_id = null;

    /**
     * @var catalogProductTierPriceEntityArray $tier_price
     */
    protected $tier_price = null;

    /**
     * @var string $meta_title
     */
    protected $meta_title = null;

    /**
     * @var string $meta_keyword
     */
    protected $meta_keyword = null;

    /**
     * @var string $meta_description
     */
    protected $meta_description = null;

    /**
     * @var string $custom_design
     */
    protected $custom_design = null;

    /**
     * @var string $custom_layout_update
     */
    protected $custom_layout_update = null;

    /**
     * @var string $options_container
     */
    protected $options_container = null;

    /**
     * @var associativeArray $additional_attributes
     */
    protected $additional_attributes = null;

    
    public function __construct()
    {
    
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
     * @return catalogProductReturnEntity
     */
    public function setProduct_id($product_id)
    {
      $this->product_id = $product_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
      return $this->sku;
    }

    /**
     * @param string $sku
     * @return catalogProductReturnEntity
     */
    public function setSku($sku)
    {
      $this->sku = $sku;
      return $this;
    }

    /**
     * @return string
     */
    public function getSet()
    {
      return $this->set;
    }

    /**
     * @param string $set
     * @return catalogProductReturnEntity
     */
    public function setSet($set)
    {
      $this->set = $set;
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
     * @return catalogProductReturnEntity
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getCategories()
    {
      return $this->categories;
    }

    /**
     * @param ArrayOfString $categories
     * @return catalogProductReturnEntity
     */
    public function setCategories($categories)
    {
      $this->categories = $categories;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getWebsites()
    {
      return $this->websites;
    }

    /**
     * @param ArrayOfString $websites
     * @return catalogProductReturnEntity
     */
    public function setWebsites($websites)
    {
      $this->websites = $websites;
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
     * @return catalogProductReturnEntity
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
     * @return catalogProductReturnEntity
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getType_id()
    {
      return $this->type_id;
    }

    /**
     * @param string $type_id
     * @return catalogProductReturnEntity
     */
    public function setType_id($type_id)
    {
      $this->type_id = $type_id;
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
     * @return catalogProductReturnEntity
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return catalogProductReturnEntity
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getShort_description()
    {
      return $this->short_description;
    }

    /**
     * @param string $short_description
     * @return catalogProductReturnEntity
     */
    public function setShort_description($short_description)
    {
      $this->short_description = $short_description;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param string $weight
     * @return catalogProductReturnEntity
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return catalogProductReturnEntity
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return catalogProductReturnEntity
     */
    public function setUrl_key($url_key)
    {
      $this->url_key = $url_key;
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
     * @return catalogProductReturnEntity
     */
    public function setUrl_path($url_path)
    {
      $this->url_path = $url_path;
      return $this;
    }

    /**
     * @return string
     */
    public function getVisibility()
    {
      return $this->visibility;
    }

    /**
     * @param string $visibility
     * @return catalogProductReturnEntity
     */
    public function setVisibility($visibility)
    {
      $this->visibility = $visibility;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getCategory_ids()
    {
      return $this->category_ids;
    }

    /**
     * @param ArrayOfString $category_ids
     * @return catalogProductReturnEntity
     */
    public function setCategory_ids($category_ids)
    {
      $this->category_ids = $category_ids;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getWebsite_ids()
    {
      return $this->website_ids;
    }

    /**
     * @param ArrayOfString $website_ids
     * @return catalogProductReturnEntity
     */
    public function setWebsite_ids($website_ids)
    {
      $this->website_ids = $website_ids;
      return $this;
    }

    /**
     * @return string
     */
    public function getHas_options()
    {
      return $this->has_options;
    }

    /**
     * @param string $has_options
     * @return catalogProductReturnEntity
     */
    public function setHas_options($has_options)
    {
      $this->has_options = $has_options;
      return $this;
    }

    /**
     * @return string
     */
    public function getGift_message_available()
    {
      return $this->gift_message_available;
    }

    /**
     * @param string $gift_message_available
     * @return catalogProductReturnEntity
     */
    public function setGift_message_available($gift_message_available)
    {
      $this->gift_message_available = $gift_message_available;
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
     * @return catalogProductReturnEntity
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecial_price()
    {
      return $this->special_price;
    }

    /**
     * @param string $special_price
     * @return catalogProductReturnEntity
     */
    public function setSpecial_price($special_price)
    {
      $this->special_price = $special_price;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecial_from_date()
    {
      return $this->special_from_date;
    }

    /**
     * @param string $special_from_date
     * @return catalogProductReturnEntity
     */
    public function setSpecial_from_date($special_from_date)
    {
      $this->special_from_date = $special_from_date;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecial_to_date()
    {
      return $this->special_to_date;
    }

    /**
     * @param string $special_to_date
     * @return catalogProductReturnEntity
     */
    public function setSpecial_to_date($special_to_date)
    {
      $this->special_to_date = $special_to_date;
      return $this;
    }

    /**
     * @return string
     */
    public function getTax_class_id()
    {
      return $this->tax_class_id;
    }

    /**
     * @param string $tax_class_id
     * @return catalogProductReturnEntity
     */
    public function setTax_class_id($tax_class_id)
    {
      $this->tax_class_id = $tax_class_id;
      return $this;
    }

    /**
     * @return catalogProductTierPriceEntityArray
     */
    public function getTier_price()
    {
      return $this->tier_price;
    }

    /**
     * @param catalogProductTierPriceEntityArray $tier_price
     * @return catalogProductReturnEntity
     */
    public function setTier_price($tier_price)
    {
      $this->tier_price = $tier_price;
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
     * @return catalogProductReturnEntity
     */
    public function setMeta_title($meta_title)
    {
      $this->meta_title = $meta_title;
      return $this;
    }

    /**
     * @return string
     */
    public function getMeta_keyword()
    {
      return $this->meta_keyword;
    }

    /**
     * @param string $meta_keyword
     * @return catalogProductReturnEntity
     */
    public function setMeta_keyword($meta_keyword)
    {
      $this->meta_keyword = $meta_keyword;
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
     * @return catalogProductReturnEntity
     */
    public function setMeta_description($meta_description)
    {
      $this->meta_description = $meta_description;
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
     * @return catalogProductReturnEntity
     */
    public function setCustom_design($custom_design)
    {
      $this->custom_design = $custom_design;
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
     * @return catalogProductReturnEntity
     */
    public function setCustom_layout_update($custom_layout_update)
    {
      $this->custom_layout_update = $custom_layout_update;
      return $this;
    }

    /**
     * @return string
     */
    public function getOptions_container()
    {
      return $this->options_container;
    }

    /**
     * @param string $options_container
     * @return catalogProductReturnEntity
     */
    public function setOptions_container($options_container)
    {
      $this->options_container = $options_container;
      return $this;
    }

    /**
     * @return associativeArray
     */
    public function getAdditional_attributes()
    {
      return $this->additional_attributes;
    }

    /**
     * @param associativeArray $additional_attributes
     * @return catalogProductReturnEntity
     */
    public function setAdditional_attributes($additional_attributes)
    {
      $this->additional_attributes = $additional_attributes;
      return $this;
    }

}
