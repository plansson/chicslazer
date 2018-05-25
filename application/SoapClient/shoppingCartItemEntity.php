<?php

class shoppingCartItemEntity
{

    /**
     * @var string $item_id
     */
    protected $item_id = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $updated_at
     */
    protected $updated_at = null;

    /**
     * @var string $product_id
     */
    protected $product_id = null;

    /**
     * @var string $store_id
     */
    protected $store_id = null;

    /**
     * @var string $parent_item_id
     */
    protected $parent_item_id = null;

    /**
     * @var int $is_virtual
     */
    protected $is_virtual = null;

    /**
     * @var string $sku
     */
    protected $sku = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $applied_rule_ids
     */
    protected $applied_rule_ids = null;

    /**
     * @var string $additional_data
     */
    protected $additional_data = null;

    /**
     * @var string $free_shipping
     */
    protected $free_shipping = null;

    /**
     * @var string $is_qty_decimal
     */
    protected $is_qty_decimal = null;

    /**
     * @var string $no_discount
     */
    protected $no_discount = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var float $qty
     */
    protected $qty = null;

    /**
     * @var float $price
     */
    protected $price = null;

    /**
     * @var float $base_price
     */
    protected $base_price = null;

    /**
     * @var float $custom_price
     */
    protected $custom_price = null;

    /**
     * @var float $discount_percent
     */
    protected $discount_percent = null;

    /**
     * @var float $discount_amount
     */
    protected $discount_amount = null;

    /**
     * @var float $base_discount_amount
     */
    protected $base_discount_amount = null;

    /**
     * @var float $tax_percent
     */
    protected $tax_percent = null;

    /**
     * @var float $tax_amount
     */
    protected $tax_amount = null;

    /**
     * @var float $base_tax_amount
     */
    protected $base_tax_amount = null;

    /**
     * @var float $row_total
     */
    protected $row_total = null;

    /**
     * @var float $base_row_total
     */
    protected $base_row_total = null;

    /**
     * @var float $row_total_with_discount
     */
    protected $row_total_with_discount = null;

    /**
     * @var float $row_weight
     */
    protected $row_weight = null;

    /**
     * @var string $product_type
     */
    protected $product_type = null;

    /**
     * @var float $base_tax_before_discount
     */
    protected $base_tax_before_discount = null;

    /**
     * @var float $tax_before_discount
     */
    protected $tax_before_discount = null;

    /**
     * @var float $original_custom_price
     */
    protected $original_custom_price = null;

    /**
     * @var float $base_cost
     */
    protected $base_cost = null;

    /**
     * @var float $price_incl_tax
     */
    protected $price_incl_tax = null;

    /**
     * @var float $base_price_incl_tax
     */
    protected $base_price_incl_tax = null;

    /**
     * @var float $row_total_incl_tax
     */
    protected $row_total_incl_tax = null;

    /**
     * @var float $base_row_total_incl_tax
     */
    protected $base_row_total_incl_tax = null;

    /**
     * @var string $gift_message_id
     */
    protected $gift_message_id = null;

    /**
     * @var string $gift_message
     */
    protected $gift_message = null;

    /**
     * @var string $gift_message_available
     */
    protected $gift_message_available = null;

    /**
     * @var float $weee_tax_applied
     */
    protected $weee_tax_applied = null;

    /**
     * @var float $weee_tax_applied_amount
     */
    protected $weee_tax_applied_amount = null;

    /**
     * @var float $weee_tax_applied_row_amount
     */
    protected $weee_tax_applied_row_amount = null;

    /**
     * @var float $base_weee_tax_applied_amount
     */
    protected $base_weee_tax_applied_amount = null;

    /**
     * @var float $base_weee_tax_applied_row_amount
     */
    protected $base_weee_tax_applied_row_amount = null;

    /**
     * @var float $weee_tax_disposition
     */
    protected $weee_tax_disposition = null;

    /**
     * @var float $weee_tax_row_disposition
     */
    protected $weee_tax_row_disposition = null;

    /**
     * @var float $base_weee_tax_disposition
     */
    protected $base_weee_tax_disposition = null;

    /**
     * @var float $base_weee_tax_row_disposition
     */
    protected $base_weee_tax_row_disposition = null;

    /**
     * @var string $tax_class_id
     */
    protected $tax_class_id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getItem_id()
    {
      return $this->item_id;
    }

    /**
     * @param string $item_id
     * @return shoppingCartItemEntity
     */
    public function setItem_id($item_id)
    {
      $this->item_id = $item_id;
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
     * @return shoppingCartItemEntity
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
     * @return shoppingCartItemEntity
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
      return $this;
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
     * @return shoppingCartItemEntity
     */
    public function setProduct_id($product_id)
    {
      $this->product_id = $product_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getStore_id()
    {
      return $this->store_id;
    }

    /**
     * @param string $store_id
     * @return shoppingCartItemEntity
     */
    public function setStore_id($store_id)
    {
      $this->store_id = $store_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getParent_item_id()
    {
      return $this->parent_item_id;
    }

    /**
     * @param string $parent_item_id
     * @return shoppingCartItemEntity
     */
    public function setParent_item_id($parent_item_id)
    {
      $this->parent_item_id = $parent_item_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_virtual()
    {
      return $this->is_virtual;
    }

    /**
     * @param int $is_virtual
     * @return shoppingCartItemEntity
     */
    public function setIs_virtual($is_virtual)
    {
      $this->is_virtual = $is_virtual;
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
     * @return shoppingCartItemEntity
     */
    public function setSku($sku)
    {
      $this->sku = $sku;
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
     * @return shoppingCartItemEntity
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
     * @return shoppingCartItemEntity
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplied_rule_ids()
    {
      return $this->applied_rule_ids;
    }

    /**
     * @param string $applied_rule_ids
     * @return shoppingCartItemEntity
     */
    public function setApplied_rule_ids($applied_rule_ids)
    {
      $this->applied_rule_ids = $applied_rule_ids;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditional_data()
    {
      return $this->additional_data;
    }

    /**
     * @param string $additional_data
     * @return shoppingCartItemEntity
     */
    public function setAdditional_data($additional_data)
    {
      $this->additional_data = $additional_data;
      return $this;
    }

    /**
     * @return string
     */
    public function getFree_shipping()
    {
      return $this->free_shipping;
    }

    /**
     * @param string $free_shipping
     * @return shoppingCartItemEntity
     */
    public function setFree_shipping($free_shipping)
    {
      $this->free_shipping = $free_shipping;
      return $this;
    }

    /**
     * @return string
     */
    public function getIs_qty_decimal()
    {
      return $this->is_qty_decimal;
    }

    /**
     * @param string $is_qty_decimal
     * @return shoppingCartItemEntity
     */
    public function setIs_qty_decimal($is_qty_decimal)
    {
      $this->is_qty_decimal = $is_qty_decimal;
      return $this;
    }

    /**
     * @return string
     */
    public function getNo_discount()
    {
      return $this->no_discount;
    }

    /**
     * @param string $no_discount
     * @return shoppingCartItemEntity
     */
    public function setNo_discount($no_discount)
    {
      $this->no_discount = $no_discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return shoppingCartItemEntity
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getQty()
    {
      return $this->qty;
    }

    /**
     * @param float $qty
     * @return shoppingCartItemEntity
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return shoppingCartItemEntity
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_price()
    {
      return $this->base_price;
    }

    /**
     * @param float $base_price
     * @return shoppingCartItemEntity
     */
    public function setBase_price($base_price)
    {
      $this->base_price = $base_price;
      return $this;
    }

    /**
     * @return float
     */
    public function getCustom_price()
    {
      return $this->custom_price;
    }

    /**
     * @param float $custom_price
     * @return shoppingCartItemEntity
     */
    public function setCustom_price($custom_price)
    {
      $this->custom_price = $custom_price;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount_percent()
    {
      return $this->discount_percent;
    }

    /**
     * @param float $discount_percent
     * @return shoppingCartItemEntity
     */
    public function setDiscount_percent($discount_percent)
    {
      $this->discount_percent = $discount_percent;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount_amount()
    {
      return $this->discount_amount;
    }

    /**
     * @param float $discount_amount
     * @return shoppingCartItemEntity
     */
    public function setDiscount_amount($discount_amount)
    {
      $this->discount_amount = $discount_amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_discount_amount()
    {
      return $this->base_discount_amount;
    }

    /**
     * @param float $base_discount_amount
     * @return shoppingCartItemEntity
     */
    public function setBase_discount_amount($base_discount_amount)
    {
      $this->base_discount_amount = $base_discount_amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax_percent()
    {
      return $this->tax_percent;
    }

    /**
     * @param float $tax_percent
     * @return shoppingCartItemEntity
     */
    public function setTax_percent($tax_percent)
    {
      $this->tax_percent = $tax_percent;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax_amount()
    {
      return $this->tax_amount;
    }

    /**
     * @param float $tax_amount
     * @return shoppingCartItemEntity
     */
    public function setTax_amount($tax_amount)
    {
      $this->tax_amount = $tax_amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_tax_amount()
    {
      return $this->base_tax_amount;
    }

    /**
     * @param float $base_tax_amount
     * @return shoppingCartItemEntity
     */
    public function setBase_tax_amount($base_tax_amount)
    {
      $this->base_tax_amount = $base_tax_amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getRow_total()
    {
      return $this->row_total;
    }

    /**
     * @param float $row_total
     * @return shoppingCartItemEntity
     */
    public function setRow_total($row_total)
    {
      $this->row_total = $row_total;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_row_total()
    {
      return $this->base_row_total;
    }

    /**
     * @param float $base_row_total
     * @return shoppingCartItemEntity
     */
    public function setBase_row_total($base_row_total)
    {
      $this->base_row_total = $base_row_total;
      return $this;
    }

    /**
     * @return float
     */
    public function getRow_total_with_discount()
    {
      return $this->row_total_with_discount;
    }

    /**
     * @param float $row_total_with_discount
     * @return shoppingCartItemEntity
     */
    public function setRow_total_with_discount($row_total_with_discount)
    {
      $this->row_total_with_discount = $row_total_with_discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getRow_weight()
    {
      return $this->row_weight;
    }

    /**
     * @param float $row_weight
     * @return shoppingCartItemEntity
     */
    public function setRow_weight($row_weight)
    {
      $this->row_weight = $row_weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getProduct_type()
    {
      return $this->product_type;
    }

    /**
     * @param string $product_type
     * @return shoppingCartItemEntity
     */
    public function setProduct_type($product_type)
    {
      $this->product_type = $product_type;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_tax_before_discount()
    {
      return $this->base_tax_before_discount;
    }

    /**
     * @param float $base_tax_before_discount
     * @return shoppingCartItemEntity
     */
    public function setBase_tax_before_discount($base_tax_before_discount)
    {
      $this->base_tax_before_discount = $base_tax_before_discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax_before_discount()
    {
      return $this->tax_before_discount;
    }

    /**
     * @param float $tax_before_discount
     * @return shoppingCartItemEntity
     */
    public function setTax_before_discount($tax_before_discount)
    {
      $this->tax_before_discount = $tax_before_discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getOriginal_custom_price()
    {
      return $this->original_custom_price;
    }

    /**
     * @param float $original_custom_price
     * @return shoppingCartItemEntity
     */
    public function setOriginal_custom_price($original_custom_price)
    {
      $this->original_custom_price = $original_custom_price;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_cost()
    {
      return $this->base_cost;
    }

    /**
     * @param float $base_cost
     * @return shoppingCartItemEntity
     */
    public function setBase_cost($base_cost)
    {
      $this->base_cost = $base_cost;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice_incl_tax()
    {
      return $this->price_incl_tax;
    }

    /**
     * @param float $price_incl_tax
     * @return shoppingCartItemEntity
     */
    public function setPrice_incl_tax($price_incl_tax)
    {
      $this->price_incl_tax = $price_incl_tax;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_price_incl_tax()
    {
      return $this->base_price_incl_tax;
    }

    /**
     * @param float $base_price_incl_tax
     * @return shoppingCartItemEntity
     */
    public function setBase_price_incl_tax($base_price_incl_tax)
    {
      $this->base_price_incl_tax = $base_price_incl_tax;
      return $this;
    }

    /**
     * @return float
     */
    public function getRow_total_incl_tax()
    {
      return $this->row_total_incl_tax;
    }

    /**
     * @param float $row_total_incl_tax
     * @return shoppingCartItemEntity
     */
    public function setRow_total_incl_tax($row_total_incl_tax)
    {
      $this->row_total_incl_tax = $row_total_incl_tax;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_row_total_incl_tax()
    {
      return $this->base_row_total_incl_tax;
    }

    /**
     * @param float $base_row_total_incl_tax
     * @return shoppingCartItemEntity
     */
    public function setBase_row_total_incl_tax($base_row_total_incl_tax)
    {
      $this->base_row_total_incl_tax = $base_row_total_incl_tax;
      return $this;
    }

    /**
     * @return string
     */
    public function getGift_message_id()
    {
      return $this->gift_message_id;
    }

    /**
     * @param string $gift_message_id
     * @return shoppingCartItemEntity
     */
    public function setGift_message_id($gift_message_id)
    {
      $this->gift_message_id = $gift_message_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getGift_message()
    {
      return $this->gift_message;
    }

    /**
     * @param string $gift_message
     * @return shoppingCartItemEntity
     */
    public function setGift_message($gift_message)
    {
      $this->gift_message = $gift_message;
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
     * @return shoppingCartItemEntity
     */
    public function setGift_message_available($gift_message_available)
    {
      $this->gift_message_available = $gift_message_available;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeee_tax_applied()
    {
      return $this->weee_tax_applied;
    }

    /**
     * @param float $weee_tax_applied
     * @return shoppingCartItemEntity
     */
    public function setWeee_tax_applied($weee_tax_applied)
    {
      $this->weee_tax_applied = $weee_tax_applied;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeee_tax_applied_amount()
    {
      return $this->weee_tax_applied_amount;
    }

    /**
     * @param float $weee_tax_applied_amount
     * @return shoppingCartItemEntity
     */
    public function setWeee_tax_applied_amount($weee_tax_applied_amount)
    {
      $this->weee_tax_applied_amount = $weee_tax_applied_amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeee_tax_applied_row_amount()
    {
      return $this->weee_tax_applied_row_amount;
    }

    /**
     * @param float $weee_tax_applied_row_amount
     * @return shoppingCartItemEntity
     */
    public function setWeee_tax_applied_row_amount($weee_tax_applied_row_amount)
    {
      $this->weee_tax_applied_row_amount = $weee_tax_applied_row_amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_weee_tax_applied_amount()
    {
      return $this->base_weee_tax_applied_amount;
    }

    /**
     * @param float $base_weee_tax_applied_amount
     * @return shoppingCartItemEntity
     */
    public function setBase_weee_tax_applied_amount($base_weee_tax_applied_amount)
    {
      $this->base_weee_tax_applied_amount = $base_weee_tax_applied_amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_weee_tax_applied_row_amount()
    {
      return $this->base_weee_tax_applied_row_amount;
    }

    /**
     * @param float $base_weee_tax_applied_row_amount
     * @return shoppingCartItemEntity
     */
    public function setBase_weee_tax_applied_row_amount($base_weee_tax_applied_row_amount)
    {
      $this->base_weee_tax_applied_row_amount = $base_weee_tax_applied_row_amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeee_tax_disposition()
    {
      return $this->weee_tax_disposition;
    }

    /**
     * @param float $weee_tax_disposition
     * @return shoppingCartItemEntity
     */
    public function setWeee_tax_disposition($weee_tax_disposition)
    {
      $this->weee_tax_disposition = $weee_tax_disposition;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeee_tax_row_disposition()
    {
      return $this->weee_tax_row_disposition;
    }

    /**
     * @param float $weee_tax_row_disposition
     * @return shoppingCartItemEntity
     */
    public function setWeee_tax_row_disposition($weee_tax_row_disposition)
    {
      $this->weee_tax_row_disposition = $weee_tax_row_disposition;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_weee_tax_disposition()
    {
      return $this->base_weee_tax_disposition;
    }

    /**
     * @param float $base_weee_tax_disposition
     * @return shoppingCartItemEntity
     */
    public function setBase_weee_tax_disposition($base_weee_tax_disposition)
    {
      $this->base_weee_tax_disposition = $base_weee_tax_disposition;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_weee_tax_row_disposition()
    {
      return $this->base_weee_tax_row_disposition;
    }

    /**
     * @param float $base_weee_tax_row_disposition
     * @return shoppingCartItemEntity
     */
    public function setBase_weee_tax_row_disposition($base_weee_tax_row_disposition)
    {
      $this->base_weee_tax_row_disposition = $base_weee_tax_row_disposition;
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
     * @return shoppingCartItemEntity
     */
    public function setTax_class_id($tax_class_id)
    {
      $this->tax_class_id = $tax_class_id;
      return $this;
    }

}
