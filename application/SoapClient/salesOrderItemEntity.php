<?php

class salesOrderItemEntity
{

    /**
     * @var string $item_id
     */
    protected $item_id = null;

    /**
     * @var string $order_id
     */
    protected $order_id = null;

    /**
     * @var string $quote_item_id
     */
    protected $quote_item_id = null;

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
     * @var string $product_type
     */
    protected $product_type = null;

    /**
     * @var string $product_options
     */
    protected $product_options = null;

    /**
     * @var string $weight
     */
    protected $weight = null;

    /**
     * @var string $is_virtual
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
     * @var string $applied_rule_ids
     */
    protected $applied_rule_ids = null;

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
     * @var string $qty_canceled
     */
    protected $qty_canceled = null;

    /**
     * @var string $qty_invoiced
     */
    protected $qty_invoiced = null;

    /**
     * @var string $qty_ordered
     */
    protected $qty_ordered = null;

    /**
     * @var string $qty_refunded
     */
    protected $qty_refunded = null;

    /**
     * @var string $qty_shipped
     */
    protected $qty_shipped = null;

    /**
     * @var string $cost
     */
    protected $cost = null;

    /**
     * @var string $price
     */
    protected $price = null;

    /**
     * @var string $base_price
     */
    protected $base_price = null;

    /**
     * @var string $original_price
     */
    protected $original_price = null;

    /**
     * @var string $base_original_price
     */
    protected $base_original_price = null;

    /**
     * @var string $tax_percent
     */
    protected $tax_percent = null;

    /**
     * @var string $tax_amount
     */
    protected $tax_amount = null;

    /**
     * @var string $base_tax_amount
     */
    protected $base_tax_amount = null;

    /**
     * @var string $tax_invoiced
     */
    protected $tax_invoiced = null;

    /**
     * @var string $base_tax_invoiced
     */
    protected $base_tax_invoiced = null;

    /**
     * @var string $discount_percent
     */
    protected $discount_percent = null;

    /**
     * @var string $discount_amount
     */
    protected $discount_amount = null;

    /**
     * @var string $base_discount_amount
     */
    protected $base_discount_amount = null;

    /**
     * @var string $discount_invoiced
     */
    protected $discount_invoiced = null;

    /**
     * @var string $base_discount_invoiced
     */
    protected $base_discount_invoiced = null;

    /**
     * @var string $amount_refunded
     */
    protected $amount_refunded = null;

    /**
     * @var string $base_amount_refunded
     */
    protected $base_amount_refunded = null;

    /**
     * @var string $row_total
     */
    protected $row_total = null;

    /**
     * @var string $base_row_total
     */
    protected $base_row_total = null;

    /**
     * @var string $row_invoiced
     */
    protected $row_invoiced = null;

    /**
     * @var string $base_row_invoiced
     */
    protected $base_row_invoiced = null;

    /**
     * @var string $row_weight
     */
    protected $row_weight = null;

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
     * @var string $base_tax_before_discount
     */
    protected $base_tax_before_discount = null;

    /**
     * @var string $tax_before_discount
     */
    protected $tax_before_discount = null;

    /**
     * @var string $weee_tax_applied
     */
    protected $weee_tax_applied = null;

    /**
     * @var string $weee_tax_applied_amount
     */
    protected $weee_tax_applied_amount = null;

    /**
     * @var string $weee_tax_applied_row_amount
     */
    protected $weee_tax_applied_row_amount = null;

    /**
     * @var string $base_weee_tax_applied_amount
     */
    protected $base_weee_tax_applied_amount = null;

    /**
     * @var string $base_weee_tax_applied_row_amount
     */
    protected $base_weee_tax_applied_row_amount = null;

    /**
     * @var string $weee_tax_disposition
     */
    protected $weee_tax_disposition = null;

    /**
     * @var string $weee_tax_row_disposition
     */
    protected $weee_tax_row_disposition = null;

    /**
     * @var string $base_weee_tax_disposition
     */
    protected $base_weee_tax_disposition = null;

    /**
     * @var string $base_weee_tax_row_disposition
     */
    protected $base_weee_tax_row_disposition = null;

    
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
     * @return salesOrderItemEntity
     */
    public function setItem_id($item_id)
    {
      $this->item_id = $item_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder_id()
    {
      return $this->order_id;
    }

    /**
     * @param string $order_id
     * @return salesOrderItemEntity
     */
    public function setOrder_id($order_id)
    {
      $this->order_id = $order_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuote_item_id()
    {
      return $this->quote_item_id;
    }

    /**
     * @param string $quote_item_id
     * @return salesOrderItemEntity
     */
    public function setQuote_item_id($quote_item_id)
    {
      $this->quote_item_id = $quote_item_id;
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
     * @return salesOrderItemEntity
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
     * @return salesOrderItemEntity
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
     * @return salesOrderItemEntity
     */
    public function setProduct_id($product_id)
    {
      $this->product_id = $product_id;
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
     * @return salesOrderItemEntity
     */
    public function setProduct_type($product_type)
    {
      $this->product_type = $product_type;
      return $this;
    }

    /**
     * @return string
     */
    public function getProduct_options()
    {
      return $this->product_options;
    }

    /**
     * @param string $product_options
     * @return salesOrderItemEntity
     */
    public function setProduct_options($product_options)
    {
      $this->product_options = $product_options;
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
     * @return salesOrderItemEntity
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getIs_virtual()
    {
      return $this->is_virtual;
    }

    /**
     * @param string $is_virtual
     * @return salesOrderItemEntity
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
     * @return salesOrderItemEntity
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
     * @return salesOrderItemEntity
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return salesOrderItemEntity
     */
    public function setApplied_rule_ids($applied_rule_ids)
    {
      $this->applied_rule_ids = $applied_rule_ids;
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
     * @return salesOrderItemEntity
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
     * @return salesOrderItemEntity
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
     * @return salesOrderItemEntity
     */
    public function setNo_discount($no_discount)
    {
      $this->no_discount = $no_discount;
      return $this;
    }

    /**
     * @return string
     */
    public function getQty_canceled()
    {
      return $this->qty_canceled;
    }

    /**
     * @param string $qty_canceled
     * @return salesOrderItemEntity
     */
    public function setQty_canceled($qty_canceled)
    {
      $this->qty_canceled = $qty_canceled;
      return $this;
    }

    /**
     * @return string
     */
    public function getQty_invoiced()
    {
      return $this->qty_invoiced;
    }

    /**
     * @param string $qty_invoiced
     * @return salesOrderItemEntity
     */
    public function setQty_invoiced($qty_invoiced)
    {
      $this->qty_invoiced = $qty_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getQty_ordered()
    {
      return $this->qty_ordered;
    }

    /**
     * @param string $qty_ordered
     * @return salesOrderItemEntity
     */
    public function setQty_ordered($qty_ordered)
    {
      $this->qty_ordered = $qty_ordered;
      return $this;
    }

    /**
     * @return string
     */
    public function getQty_refunded()
    {
      return $this->qty_refunded;
    }

    /**
     * @param string $qty_refunded
     * @return salesOrderItemEntity
     */
    public function setQty_refunded($qty_refunded)
    {
      $this->qty_refunded = $qty_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getQty_shipped()
    {
      return $this->qty_shipped;
    }

    /**
     * @param string $qty_shipped
     * @return salesOrderItemEntity
     */
    public function setQty_shipped($qty_shipped)
    {
      $this->qty_shipped = $qty_shipped;
      return $this;
    }

    /**
     * @return string
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param string $cost
     * @return salesOrderItemEntity
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
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
     * @return salesOrderItemEntity
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_price()
    {
      return $this->base_price;
    }

    /**
     * @param string $base_price
     * @return salesOrderItemEntity
     */
    public function setBase_price($base_price)
    {
      $this->base_price = $base_price;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginal_price()
    {
      return $this->original_price;
    }

    /**
     * @param string $original_price
     * @return salesOrderItemEntity
     */
    public function setOriginal_price($original_price)
    {
      $this->original_price = $original_price;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_original_price()
    {
      return $this->base_original_price;
    }

    /**
     * @param string $base_original_price
     * @return salesOrderItemEntity
     */
    public function setBase_original_price($base_original_price)
    {
      $this->base_original_price = $base_original_price;
      return $this;
    }

    /**
     * @return string
     */
    public function getTax_percent()
    {
      return $this->tax_percent;
    }

    /**
     * @param string $tax_percent
     * @return salesOrderItemEntity
     */
    public function setTax_percent($tax_percent)
    {
      $this->tax_percent = $tax_percent;
      return $this;
    }

    /**
     * @return string
     */
    public function getTax_amount()
    {
      return $this->tax_amount;
    }

    /**
     * @param string $tax_amount
     * @return salesOrderItemEntity
     */
    public function setTax_amount($tax_amount)
    {
      $this->tax_amount = $tax_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_tax_amount()
    {
      return $this->base_tax_amount;
    }

    /**
     * @param string $base_tax_amount
     * @return salesOrderItemEntity
     */
    public function setBase_tax_amount($base_tax_amount)
    {
      $this->base_tax_amount = $base_tax_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTax_invoiced()
    {
      return $this->tax_invoiced;
    }

    /**
     * @param string $tax_invoiced
     * @return salesOrderItemEntity
     */
    public function setTax_invoiced($tax_invoiced)
    {
      $this->tax_invoiced = $tax_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_tax_invoiced()
    {
      return $this->base_tax_invoiced;
    }

    /**
     * @param string $base_tax_invoiced
     * @return salesOrderItemEntity
     */
    public function setBase_tax_invoiced($base_tax_invoiced)
    {
      $this->base_tax_invoiced = $base_tax_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_percent()
    {
      return $this->discount_percent;
    }

    /**
     * @param string $discount_percent
     * @return salesOrderItemEntity
     */
    public function setDiscount_percent($discount_percent)
    {
      $this->discount_percent = $discount_percent;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_amount()
    {
      return $this->discount_amount;
    }

    /**
     * @param string $discount_amount
     * @return salesOrderItemEntity
     */
    public function setDiscount_amount($discount_amount)
    {
      $this->discount_amount = $discount_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_discount_amount()
    {
      return $this->base_discount_amount;
    }

    /**
     * @param string $base_discount_amount
     * @return salesOrderItemEntity
     */
    public function setBase_discount_amount($base_discount_amount)
    {
      $this->base_discount_amount = $base_discount_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_invoiced()
    {
      return $this->discount_invoiced;
    }

    /**
     * @param string $discount_invoiced
     * @return salesOrderItemEntity
     */
    public function setDiscount_invoiced($discount_invoiced)
    {
      $this->discount_invoiced = $discount_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_discount_invoiced()
    {
      return $this->base_discount_invoiced;
    }

    /**
     * @param string $base_discount_invoiced
     * @return salesOrderItemEntity
     */
    public function setBase_discount_invoiced($base_discount_invoiced)
    {
      $this->base_discount_invoiced = $base_discount_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount_refunded()
    {
      return $this->amount_refunded;
    }

    /**
     * @param string $amount_refunded
     * @return salesOrderItemEntity
     */
    public function setAmount_refunded($amount_refunded)
    {
      $this->amount_refunded = $amount_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_amount_refunded()
    {
      return $this->base_amount_refunded;
    }

    /**
     * @param string $base_amount_refunded
     * @return salesOrderItemEntity
     */
    public function setBase_amount_refunded($base_amount_refunded)
    {
      $this->base_amount_refunded = $base_amount_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getRow_total()
    {
      return $this->row_total;
    }

    /**
     * @param string $row_total
     * @return salesOrderItemEntity
     */
    public function setRow_total($row_total)
    {
      $this->row_total = $row_total;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_row_total()
    {
      return $this->base_row_total;
    }

    /**
     * @param string $base_row_total
     * @return salesOrderItemEntity
     */
    public function setBase_row_total($base_row_total)
    {
      $this->base_row_total = $base_row_total;
      return $this;
    }

    /**
     * @return string
     */
    public function getRow_invoiced()
    {
      return $this->row_invoiced;
    }

    /**
     * @param string $row_invoiced
     * @return salesOrderItemEntity
     */
    public function setRow_invoiced($row_invoiced)
    {
      $this->row_invoiced = $row_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_row_invoiced()
    {
      return $this->base_row_invoiced;
    }

    /**
     * @param string $base_row_invoiced
     * @return salesOrderItemEntity
     */
    public function setBase_row_invoiced($base_row_invoiced)
    {
      $this->base_row_invoiced = $base_row_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getRow_weight()
    {
      return $this->row_weight;
    }

    /**
     * @param string $row_weight
     * @return salesOrderItemEntity
     */
    public function setRow_weight($row_weight)
    {
      $this->row_weight = $row_weight;
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
     * @return salesOrderItemEntity
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
     * @return salesOrderItemEntity
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
     * @return salesOrderItemEntity
     */
    public function setGift_message_available($gift_message_available)
    {
      $this->gift_message_available = $gift_message_available;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_tax_before_discount()
    {
      return $this->base_tax_before_discount;
    }

    /**
     * @param string $base_tax_before_discount
     * @return salesOrderItemEntity
     */
    public function setBase_tax_before_discount($base_tax_before_discount)
    {
      $this->base_tax_before_discount = $base_tax_before_discount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTax_before_discount()
    {
      return $this->tax_before_discount;
    }

    /**
     * @param string $tax_before_discount
     * @return salesOrderItemEntity
     */
    public function setTax_before_discount($tax_before_discount)
    {
      $this->tax_before_discount = $tax_before_discount;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeee_tax_applied()
    {
      return $this->weee_tax_applied;
    }

    /**
     * @param string $weee_tax_applied
     * @return salesOrderItemEntity
     */
    public function setWeee_tax_applied($weee_tax_applied)
    {
      $this->weee_tax_applied = $weee_tax_applied;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeee_tax_applied_amount()
    {
      return $this->weee_tax_applied_amount;
    }

    /**
     * @param string $weee_tax_applied_amount
     * @return salesOrderItemEntity
     */
    public function setWeee_tax_applied_amount($weee_tax_applied_amount)
    {
      $this->weee_tax_applied_amount = $weee_tax_applied_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeee_tax_applied_row_amount()
    {
      return $this->weee_tax_applied_row_amount;
    }

    /**
     * @param string $weee_tax_applied_row_amount
     * @return salesOrderItemEntity
     */
    public function setWeee_tax_applied_row_amount($weee_tax_applied_row_amount)
    {
      $this->weee_tax_applied_row_amount = $weee_tax_applied_row_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_weee_tax_applied_amount()
    {
      return $this->base_weee_tax_applied_amount;
    }

    /**
     * @param string $base_weee_tax_applied_amount
     * @return salesOrderItemEntity
     */
    public function setBase_weee_tax_applied_amount($base_weee_tax_applied_amount)
    {
      $this->base_weee_tax_applied_amount = $base_weee_tax_applied_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_weee_tax_applied_row_amount()
    {
      return $this->base_weee_tax_applied_row_amount;
    }

    /**
     * @param string $base_weee_tax_applied_row_amount
     * @return salesOrderItemEntity
     */
    public function setBase_weee_tax_applied_row_amount($base_weee_tax_applied_row_amount)
    {
      $this->base_weee_tax_applied_row_amount = $base_weee_tax_applied_row_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeee_tax_disposition()
    {
      return $this->weee_tax_disposition;
    }

    /**
     * @param string $weee_tax_disposition
     * @return salesOrderItemEntity
     */
    public function setWeee_tax_disposition($weee_tax_disposition)
    {
      $this->weee_tax_disposition = $weee_tax_disposition;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeee_tax_row_disposition()
    {
      return $this->weee_tax_row_disposition;
    }

    /**
     * @param string $weee_tax_row_disposition
     * @return salesOrderItemEntity
     */
    public function setWeee_tax_row_disposition($weee_tax_row_disposition)
    {
      $this->weee_tax_row_disposition = $weee_tax_row_disposition;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_weee_tax_disposition()
    {
      return $this->base_weee_tax_disposition;
    }

    /**
     * @param string $base_weee_tax_disposition
     * @return salesOrderItemEntity
     */
    public function setBase_weee_tax_disposition($base_weee_tax_disposition)
    {
      $this->base_weee_tax_disposition = $base_weee_tax_disposition;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_weee_tax_row_disposition()
    {
      return $this->base_weee_tax_row_disposition;
    }

    /**
     * @param string $base_weee_tax_row_disposition
     * @return salesOrderItemEntity
     */
    public function setBase_weee_tax_row_disposition($base_weee_tax_row_disposition)
    {
      $this->base_weee_tax_row_disposition = $base_weee_tax_row_disposition;
      return $this;
    }

}
