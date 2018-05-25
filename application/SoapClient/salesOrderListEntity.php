<?php

class salesOrderListEntity
{

    /**
     * @var string $increment_id
     */
    protected $increment_id = null;

    /**
     * @var string $store_id
     */
    protected $store_id = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $updated_at
     */
    protected $updated_at = null;

    /**
     * @var string $customer_id
     */
    protected $customer_id = null;

    /**
     * @var string $tax_amount
     */
    protected $tax_amount = null;

    /**
     * @var string $shipping_amount
     */
    protected $shipping_amount = null;

    /**
     * @var string $discount_amount
     */
    protected $discount_amount = null;

    /**
     * @var string $subtotal
     */
    protected $subtotal = null;

    /**
     * @var string $grand_total
     */
    protected $grand_total = null;

    /**
     * @var string $total_paid
     */
    protected $total_paid = null;

    /**
     * @var string $total_refunded
     */
    protected $total_refunded = null;

    /**
     * @var string $total_qty_ordered
     */
    protected $total_qty_ordered = null;

    /**
     * @var string $total_canceled
     */
    protected $total_canceled = null;

    /**
     * @var string $total_invoiced
     */
    protected $total_invoiced = null;

    /**
     * @var string $total_online_refunded
     */
    protected $total_online_refunded = null;

    /**
     * @var string $total_offline_refunded
     */
    protected $total_offline_refunded = null;

    /**
     * @var string $base_tax_amount
     */
    protected $base_tax_amount = null;

    /**
     * @var string $base_shipping_amount
     */
    protected $base_shipping_amount = null;

    /**
     * @var string $base_discount_amount
     */
    protected $base_discount_amount = null;

    /**
     * @var string $base_subtotal
     */
    protected $base_subtotal = null;

    /**
     * @var string $base_grand_total
     */
    protected $base_grand_total = null;

    /**
     * @var string $base_total_paid
     */
    protected $base_total_paid = null;

    /**
     * @var string $base_total_refunded
     */
    protected $base_total_refunded = null;

    /**
     * @var string $base_total_qty_ordered
     */
    protected $base_total_qty_ordered = null;

    /**
     * @var string $base_total_canceled
     */
    protected $base_total_canceled = null;

    /**
     * @var string $base_total_invoiced
     */
    protected $base_total_invoiced = null;

    /**
     * @var string $base_total_online_refunded
     */
    protected $base_total_online_refunded = null;

    /**
     * @var string $base_total_offline_refunded
     */
    protected $base_total_offline_refunded = null;

    /**
     * @var string $billing_address_id
     */
    protected $billing_address_id = null;

    /**
     * @var string $billing_firstname
     */
    protected $billing_firstname = null;

    /**
     * @var string $billing_lastname
     */
    protected $billing_lastname = null;

    /**
     * @var string $shipping_address_id
     */
    protected $shipping_address_id = null;

    /**
     * @var string $shipping_firstname
     */
    protected $shipping_firstname = null;

    /**
     * @var string $shipping_lastname
     */
    protected $shipping_lastname = null;

    /**
     * @var string $billing_name
     */
    protected $billing_name = null;

    /**
     * @var string $shipping_name
     */
    protected $shipping_name = null;

    /**
     * @var string $store_to_base_rate
     */
    protected $store_to_base_rate = null;

    /**
     * @var string $store_to_order_rate
     */
    protected $store_to_order_rate = null;

    /**
     * @var string $base_to_global_rate
     */
    protected $base_to_global_rate = null;

    /**
     * @var string $base_to_order_rate
     */
    protected $base_to_order_rate = null;

    /**
     * @var string $weight
     */
    protected $weight = null;

    /**
     * @var string $store_name
     */
    protected $store_name = null;

    /**
     * @var string $remote_ip
     */
    protected $remote_ip = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $applied_rule_ids
     */
    protected $applied_rule_ids = null;

    /**
     * @var string $global_currency_code
     */
    protected $global_currency_code = null;

    /**
     * @var string $base_currency_code
     */
    protected $base_currency_code = null;

    /**
     * @var string $store_currency_code
     */
    protected $store_currency_code = null;

    /**
     * @var string $order_currency_code
     */
    protected $order_currency_code = null;

    /**
     * @var string $shipping_method
     */
    protected $shipping_method = null;

    /**
     * @var string $shipping_description
     */
    protected $shipping_description = null;

    /**
     * @var string $customer_email
     */
    protected $customer_email = null;

    /**
     * @var string $customer_firstname
     */
    protected $customer_firstname = null;

    /**
     * @var string $customer_lastname
     */
    protected $customer_lastname = null;

    /**
     * @var string $quote_id
     */
    protected $quote_id = null;

    /**
     * @var string $is_virtual
     */
    protected $is_virtual = null;

    /**
     * @var string $customer_group_id
     */
    protected $customer_group_id = null;

    /**
     * @var string $customer_note_notify
     */
    protected $customer_note_notify = null;

    /**
     * @var string $customer_is_guest
     */
    protected $customer_is_guest = null;

    /**
     * @var string $email_sent
     */
    protected $email_sent = null;

    /**
     * @var string $order_id
     */
    protected $order_id = null;

    /**
     * @var string $gift_message_id
     */
    protected $gift_message_id = null;

    /**
     * @var string $coupon_code
     */
    protected $coupon_code = null;

    /**
     * @var string $protect_code
     */
    protected $protect_code = null;

    /**
     * @var string $base_discount_canceled
     */
    protected $base_discount_canceled = null;

    /**
     * @var string $base_discount_invoiced
     */
    protected $base_discount_invoiced = null;

    /**
     * @var string $base_discount_refunded
     */
    protected $base_discount_refunded = null;

    /**
     * @var string $base_shipping_canceled
     */
    protected $base_shipping_canceled = null;

    /**
     * @var string $base_shipping_invoiced
     */
    protected $base_shipping_invoiced = null;

    /**
     * @var string $base_shipping_refunded
     */
    protected $base_shipping_refunded = null;

    /**
     * @var string $base_shipping_tax_amount
     */
    protected $base_shipping_tax_amount = null;

    /**
     * @var string $base_shipping_tax_refunded
     */
    protected $base_shipping_tax_refunded = null;

    /**
     * @var string $base_subtotal_canceled
     */
    protected $base_subtotal_canceled = null;

    /**
     * @var string $base_subtotal_invoiced
     */
    protected $base_subtotal_invoiced = null;

    /**
     * @var string $base_subtotal_refunded
     */
    protected $base_subtotal_refunded = null;

    /**
     * @var string $base_tax_canceled
     */
    protected $base_tax_canceled = null;

    /**
     * @var string $base_tax_invoiced
     */
    protected $base_tax_invoiced = null;

    /**
     * @var string $base_tax_refunded
     */
    protected $base_tax_refunded = null;

    /**
     * @var string $base_total_invoiced_cost
     */
    protected $base_total_invoiced_cost = null;

    /**
     * @var string $discount_canceled
     */
    protected $discount_canceled = null;

    /**
     * @var string $discount_invoiced
     */
    protected $discount_invoiced = null;

    /**
     * @var string $discount_refunded
     */
    protected $discount_refunded = null;

    /**
     * @var string $shipping_canceled
     */
    protected $shipping_canceled = null;

    /**
     * @var string $shipping_invoiced
     */
    protected $shipping_invoiced = null;

    /**
     * @var string $shipping_refunded
     */
    protected $shipping_refunded = null;

    /**
     * @var string $shipping_tax_amount
     */
    protected $shipping_tax_amount = null;

    /**
     * @var string $shipping_tax_refunded
     */
    protected $shipping_tax_refunded = null;

    /**
     * @var string $subtotal_canceled
     */
    protected $subtotal_canceled = null;

    /**
     * @var string $subtotal_invoiced
     */
    protected $subtotal_invoiced = null;

    /**
     * @var string $subtotal_refunded
     */
    protected $subtotal_refunded = null;

    /**
     * @var string $tax_canceled
     */
    protected $tax_canceled = null;

    /**
     * @var string $tax_invoiced
     */
    protected $tax_invoiced = null;

    /**
     * @var string $tax_refunded
     */
    protected $tax_refunded = null;

    /**
     * @var string $can_ship_partially
     */
    protected $can_ship_partially = null;

    /**
     * @var string $can_ship_partially_item
     */
    protected $can_ship_partially_item = null;

    /**
     * @var string $edit_increment
     */
    protected $edit_increment = null;

    /**
     * @var string $forced_do_shipment_with_invoice
     */
    protected $forced_do_shipment_with_invoice = null;

    /**
     * @var string $payment_authorization_expiration
     */
    protected $payment_authorization_expiration = null;

    /**
     * @var string $paypal_ipn_customer_notified
     */
    protected $paypal_ipn_customer_notified = null;

    /**
     * @var string $quote_address_id
     */
    protected $quote_address_id = null;

    /**
     * @var string $adjustment_negative
     */
    protected $adjustment_negative = null;

    /**
     * @var string $adjustment_positive
     */
    protected $adjustment_positive = null;

    /**
     * @var string $base_adjustment_negative
     */
    protected $base_adjustment_negative = null;

    /**
     * @var string $base_adjustment_positive
     */
    protected $base_adjustment_positive = null;

    /**
     * @var string $base_shipping_discount_amount
     */
    protected $base_shipping_discount_amount = null;

    /**
     * @var string $base_subtotal_incl_tax
     */
    protected $base_subtotal_incl_tax = null;

    /**
     * @var string $base_total_due
     */
    protected $base_total_due = null;

    /**
     * @var string $payment_authorization_amount
     */
    protected $payment_authorization_amount = null;

    /**
     * @var string $shipping_discount_amount
     */
    protected $shipping_discount_amount = null;

    /**
     * @var string $subtotal_incl_tax
     */
    protected $subtotal_incl_tax = null;

    /**
     * @var string $total_due
     */
    protected $total_due = null;

    /**
     * @var string $customer_dob
     */
    protected $customer_dob = null;

    /**
     * @var string $customer_middlename
     */
    protected $customer_middlename = null;

    /**
     * @var string $customer_prefix
     */
    protected $customer_prefix = null;

    /**
     * @var string $customer_suffix
     */
    protected $customer_suffix = null;

    /**
     * @var string $customer_taxvat
     */
    protected $customer_taxvat = null;

    /**
     * @var string $discount_description
     */
    protected $discount_description = null;

    /**
     * @var string $ext_customer_id
     */
    protected $ext_customer_id = null;

    /**
     * @var string $ext_order_id
     */
    protected $ext_order_id = null;

    /**
     * @var string $hold_before_state
     */
    protected $hold_before_state = null;

    /**
     * @var string $hold_before_status
     */
    protected $hold_before_status = null;

    /**
     * @var string $original_increment_id
     */
    protected $original_increment_id = null;

    /**
     * @var string $relation_child_id
     */
    protected $relation_child_id = null;

    /**
     * @var string $relation_child_real_id
     */
    protected $relation_child_real_id = null;

    /**
     * @var string $relation_parent_id
     */
    protected $relation_parent_id = null;

    /**
     * @var string $relation_parent_real_id
     */
    protected $relation_parent_real_id = null;

    /**
     * @var string $x_forwarded_for
     */
    protected $x_forwarded_for = null;

    /**
     * @var string $customer_note
     */
    protected $customer_note = null;

    /**
     * @var string $total_item_count
     */
    protected $total_item_count = null;

    /**
     * @var string $customer_gender
     */
    protected $customer_gender = null;

    /**
     * @var string $hidden_tax_amount
     */
    protected $hidden_tax_amount = null;

    /**
     * @var string $base_hidden_tax_amount
     */
    protected $base_hidden_tax_amount = null;

    /**
     * @var string $shipping_hidden_tax_amount
     */
    protected $shipping_hidden_tax_amount = null;

    /**
     * @var string $base_shipping_hidden_tax_amount
     */
    protected $base_shipping_hidden_tax_amount = null;

    /**
     * @var string $hidden_tax_invoiced
     */
    protected $hidden_tax_invoiced = null;

    /**
     * @var string $base_hidden_tax_invoiced
     */
    protected $base_hidden_tax_invoiced = null;

    /**
     * @var string $hidden_tax_refunded
     */
    protected $hidden_tax_refunded = null;

    /**
     * @var string $base_hidden_tax_refunded
     */
    protected $base_hidden_tax_refunded = null;

    /**
     * @var string $shipping_incl_tax
     */
    protected $shipping_incl_tax = null;

    /**
     * @var string $base_shipping_incl_tax
     */
    protected $base_shipping_incl_tax = null;

    /**
     * @var string $base_customer_balance_amount
     */
    protected $base_customer_balance_amount = null;

    /**
     * @var string $customer_balance_amount
     */
    protected $customer_balance_amount = null;

    /**
     * @var string $base_customer_balance_invoiced
     */
    protected $base_customer_balance_invoiced = null;

    /**
     * @var string $customer_balance_invoiced
     */
    protected $customer_balance_invoiced = null;

    /**
     * @var string $base_customer_balance_refunded
     */
    protected $base_customer_balance_refunded = null;

    /**
     * @var string $customer_balance_refunded
     */
    protected $customer_balance_refunded = null;

    /**
     * @var string $base_customer_balance_total_refunded
     */
    protected $base_customer_balance_total_refunded = null;

    /**
     * @var string $customer_balance_total_refunded
     */
    protected $customer_balance_total_refunded = null;

    /**
     * @var string $gift_cards
     */
    protected $gift_cards = null;

    /**
     * @var string $base_gift_cards_amount
     */
    protected $base_gift_cards_amount = null;

    /**
     * @var string $gift_cards_amount
     */
    protected $gift_cards_amount = null;

    /**
     * @var string $base_gift_cards_invoiced
     */
    protected $base_gift_cards_invoiced = null;

    /**
     * @var string $gift_cards_invoiced
     */
    protected $gift_cards_invoiced = null;

    /**
     * @var string $base_gift_cards_refunded
     */
    protected $base_gift_cards_refunded = null;

    /**
     * @var string $gift_cards_refunded
     */
    protected $gift_cards_refunded = null;

    /**
     * @var string $reward_points_balance
     */
    protected $reward_points_balance = null;

    /**
     * @var string $base_reward_currency_amount
     */
    protected $base_reward_currency_amount = null;

    /**
     * @var string $reward_currency_amount
     */
    protected $reward_currency_amount = null;

    /**
     * @var string $base_reward_currency_amount_invoiced
     */
    protected $base_reward_currency_amount_invoiced = null;

    /**
     * @var string $reward_currency_amount_invoiced
     */
    protected $reward_currency_amount_invoiced = null;

    /**
     * @var string $base_reward_currency_amount_refunded
     */
    protected $base_reward_currency_amount_refunded = null;

    /**
     * @var string $reward_currency_amount_refunded
     */
    protected $reward_currency_amount_refunded = null;

    /**
     * @var string $reward_points_balance_refunded
     */
    protected $reward_points_balance_refunded = null;

    /**
     * @var string $reward_points_balance_to_refund
     */
    protected $reward_points_balance_to_refund = null;

    /**
     * @var string $reward_salesrule_points
     */
    protected $reward_salesrule_points = null;

    /**
     * @var string $firstname
     */
    protected $firstname = null;

    /**
     * @var string $lastname
     */
    protected $lastname = null;

    /**
     * @var string $telephone
     */
    protected $telephone = null;

    /**
     * @var string $postcode
     */
    protected $postcode = null;

    /**
     * @var string $skyhub_code
     */
    protected $skyhub_code = null;

    /**
     * @var string $skyhub_marketplace
     */
    protected $skyhub_marketplace = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getIncrement_id()
    {
      return $this->increment_id;
    }

    /**
     * @param string $increment_id
     * @return salesOrderListEntity
     */
    public function setIncrement_id($increment_id)
    {
      $this->increment_id = $increment_id;
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
     * @return salesOrderListEntity
     */
    public function setStore_id($store_id)
    {
      $this->store_id = $store_id;
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
     * @return salesOrderListEntity
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
     * @return salesOrderListEntity
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_id()
    {
      return $this->customer_id;
    }

    /**
     * @param string $customer_id
     * @return salesOrderListEntity
     */
    public function setCustomer_id($customer_id)
    {
      $this->customer_id = $customer_id;
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
     * @return salesOrderListEntity
     */
    public function setTax_amount($tax_amount)
    {
      $this->tax_amount = $tax_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_amount()
    {
      return $this->shipping_amount;
    }

    /**
     * @param string $shipping_amount
     * @return salesOrderListEntity
     */
    public function setShipping_amount($shipping_amount)
    {
      $this->shipping_amount = $shipping_amount;
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
     * @return salesOrderListEntity
     */
    public function setDiscount_amount($discount_amount)
    {
      $this->discount_amount = $discount_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal()
    {
      return $this->subtotal;
    }

    /**
     * @param string $subtotal
     * @return salesOrderListEntity
     */
    public function setSubtotal($subtotal)
    {
      $this->subtotal = $subtotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getGrand_total()
    {
      return $this->grand_total;
    }

    /**
     * @param string $grand_total
     * @return salesOrderListEntity
     */
    public function setGrand_total($grand_total)
    {
      $this->grand_total = $grand_total;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal_paid()
    {
      return $this->total_paid;
    }

    /**
     * @param string $total_paid
     * @return salesOrderListEntity
     */
    public function setTotal_paid($total_paid)
    {
      $this->total_paid = $total_paid;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal_refunded()
    {
      return $this->total_refunded;
    }

    /**
     * @param string $total_refunded
     * @return salesOrderListEntity
     */
    public function setTotal_refunded($total_refunded)
    {
      $this->total_refunded = $total_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal_qty_ordered()
    {
      return $this->total_qty_ordered;
    }

    /**
     * @param string $total_qty_ordered
     * @return salesOrderListEntity
     */
    public function setTotal_qty_ordered($total_qty_ordered)
    {
      $this->total_qty_ordered = $total_qty_ordered;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal_canceled()
    {
      return $this->total_canceled;
    }

    /**
     * @param string $total_canceled
     * @return salesOrderListEntity
     */
    public function setTotal_canceled($total_canceled)
    {
      $this->total_canceled = $total_canceled;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal_invoiced()
    {
      return $this->total_invoiced;
    }

    /**
     * @param string $total_invoiced
     * @return salesOrderListEntity
     */
    public function setTotal_invoiced($total_invoiced)
    {
      $this->total_invoiced = $total_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal_online_refunded()
    {
      return $this->total_online_refunded;
    }

    /**
     * @param string $total_online_refunded
     * @return salesOrderListEntity
     */
    public function setTotal_online_refunded($total_online_refunded)
    {
      $this->total_online_refunded = $total_online_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal_offline_refunded()
    {
      return $this->total_offline_refunded;
    }

    /**
     * @param string $total_offline_refunded
     * @return salesOrderListEntity
     */
    public function setTotal_offline_refunded($total_offline_refunded)
    {
      $this->total_offline_refunded = $total_offline_refunded;
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
     * @return salesOrderListEntity
     */
    public function setBase_tax_amount($base_tax_amount)
    {
      $this->base_tax_amount = $base_tax_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_amount()
    {
      return $this->base_shipping_amount;
    }

    /**
     * @param string $base_shipping_amount
     * @return salesOrderListEntity
     */
    public function setBase_shipping_amount($base_shipping_amount)
    {
      $this->base_shipping_amount = $base_shipping_amount;
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
     * @return salesOrderListEntity
     */
    public function setBase_discount_amount($base_discount_amount)
    {
      $this->base_discount_amount = $base_discount_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_subtotal()
    {
      return $this->base_subtotal;
    }

    /**
     * @param string $base_subtotal
     * @return salesOrderListEntity
     */
    public function setBase_subtotal($base_subtotal)
    {
      $this->base_subtotal = $base_subtotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_grand_total()
    {
      return $this->base_grand_total;
    }

    /**
     * @param string $base_grand_total
     * @return salesOrderListEntity
     */
    public function setBase_grand_total($base_grand_total)
    {
      $this->base_grand_total = $base_grand_total;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_paid()
    {
      return $this->base_total_paid;
    }

    /**
     * @param string $base_total_paid
     * @return salesOrderListEntity
     */
    public function setBase_total_paid($base_total_paid)
    {
      $this->base_total_paid = $base_total_paid;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_refunded()
    {
      return $this->base_total_refunded;
    }

    /**
     * @param string $base_total_refunded
     * @return salesOrderListEntity
     */
    public function setBase_total_refunded($base_total_refunded)
    {
      $this->base_total_refunded = $base_total_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_qty_ordered()
    {
      return $this->base_total_qty_ordered;
    }

    /**
     * @param string $base_total_qty_ordered
     * @return salesOrderListEntity
     */
    public function setBase_total_qty_ordered($base_total_qty_ordered)
    {
      $this->base_total_qty_ordered = $base_total_qty_ordered;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_canceled()
    {
      return $this->base_total_canceled;
    }

    /**
     * @param string $base_total_canceled
     * @return salesOrderListEntity
     */
    public function setBase_total_canceled($base_total_canceled)
    {
      $this->base_total_canceled = $base_total_canceled;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_invoiced()
    {
      return $this->base_total_invoiced;
    }

    /**
     * @param string $base_total_invoiced
     * @return salesOrderListEntity
     */
    public function setBase_total_invoiced($base_total_invoiced)
    {
      $this->base_total_invoiced = $base_total_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_online_refunded()
    {
      return $this->base_total_online_refunded;
    }

    /**
     * @param string $base_total_online_refunded
     * @return salesOrderListEntity
     */
    public function setBase_total_online_refunded($base_total_online_refunded)
    {
      $this->base_total_online_refunded = $base_total_online_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_offline_refunded()
    {
      return $this->base_total_offline_refunded;
    }

    /**
     * @param string $base_total_offline_refunded
     * @return salesOrderListEntity
     */
    public function setBase_total_offline_refunded($base_total_offline_refunded)
    {
      $this->base_total_offline_refunded = $base_total_offline_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBilling_address_id()
    {
      return $this->billing_address_id;
    }

    /**
     * @param string $billing_address_id
     * @return salesOrderListEntity
     */
    public function setBilling_address_id($billing_address_id)
    {
      $this->billing_address_id = $billing_address_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getBilling_firstname()
    {
      return $this->billing_firstname;
    }

    /**
     * @param string $billing_firstname
     * @return salesOrderListEntity
     */
    public function setBilling_firstname($billing_firstname)
    {
      $this->billing_firstname = $billing_firstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getBilling_lastname()
    {
      return $this->billing_lastname;
    }

    /**
     * @param string $billing_lastname
     * @return salesOrderListEntity
     */
    public function setBilling_lastname($billing_lastname)
    {
      $this->billing_lastname = $billing_lastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_address_id()
    {
      return $this->shipping_address_id;
    }

    /**
     * @param string $shipping_address_id
     * @return salesOrderListEntity
     */
    public function setShipping_address_id($shipping_address_id)
    {
      $this->shipping_address_id = $shipping_address_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_firstname()
    {
      return $this->shipping_firstname;
    }

    /**
     * @param string $shipping_firstname
     * @return salesOrderListEntity
     */
    public function setShipping_firstname($shipping_firstname)
    {
      $this->shipping_firstname = $shipping_firstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_lastname()
    {
      return $this->shipping_lastname;
    }

    /**
     * @param string $shipping_lastname
     * @return salesOrderListEntity
     */
    public function setShipping_lastname($shipping_lastname)
    {
      $this->shipping_lastname = $shipping_lastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getBilling_name()
    {
      return $this->billing_name;
    }

    /**
     * @param string $billing_name
     * @return salesOrderListEntity
     */
    public function setBilling_name($billing_name)
    {
      $this->billing_name = $billing_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_name()
    {
      return $this->shipping_name;
    }

    /**
     * @param string $shipping_name
     * @return salesOrderListEntity
     */
    public function setShipping_name($shipping_name)
    {
      $this->shipping_name = $shipping_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStore_to_base_rate()
    {
      return $this->store_to_base_rate;
    }

    /**
     * @param string $store_to_base_rate
     * @return salesOrderListEntity
     */
    public function setStore_to_base_rate($store_to_base_rate)
    {
      $this->store_to_base_rate = $store_to_base_rate;
      return $this;
    }

    /**
     * @return string
     */
    public function getStore_to_order_rate()
    {
      return $this->store_to_order_rate;
    }

    /**
     * @param string $store_to_order_rate
     * @return salesOrderListEntity
     */
    public function setStore_to_order_rate($store_to_order_rate)
    {
      $this->store_to_order_rate = $store_to_order_rate;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_to_global_rate()
    {
      return $this->base_to_global_rate;
    }

    /**
     * @param string $base_to_global_rate
     * @return salesOrderListEntity
     */
    public function setBase_to_global_rate($base_to_global_rate)
    {
      $this->base_to_global_rate = $base_to_global_rate;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_to_order_rate()
    {
      return $this->base_to_order_rate;
    }

    /**
     * @param string $base_to_order_rate
     * @return salesOrderListEntity
     */
    public function setBase_to_order_rate($base_to_order_rate)
    {
      $this->base_to_order_rate = $base_to_order_rate;
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
     * @return salesOrderListEntity
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getStore_name()
    {
      return $this->store_name;
    }

    /**
     * @param string $store_name
     * @return salesOrderListEntity
     */
    public function setStore_name($store_name)
    {
      $this->store_name = $store_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemote_ip()
    {
      return $this->remote_ip;
    }

    /**
     * @param string $remote_ip
     * @return salesOrderListEntity
     */
    public function setRemote_ip($remote_ip)
    {
      $this->remote_ip = $remote_ip;
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
     * @return salesOrderListEntity
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return salesOrderListEntity
     */
    public function setState($state)
    {
      $this->state = $state;
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
     * @return salesOrderListEntity
     */
    public function setApplied_rule_ids($applied_rule_ids)
    {
      $this->applied_rule_ids = $applied_rule_ids;
      return $this;
    }

    /**
     * @return string
     */
    public function getGlobal_currency_code()
    {
      return $this->global_currency_code;
    }

    /**
     * @param string $global_currency_code
     * @return salesOrderListEntity
     */
    public function setGlobal_currency_code($global_currency_code)
    {
      $this->global_currency_code = $global_currency_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_currency_code()
    {
      return $this->base_currency_code;
    }

    /**
     * @param string $base_currency_code
     * @return salesOrderListEntity
     */
    public function setBase_currency_code($base_currency_code)
    {
      $this->base_currency_code = $base_currency_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getStore_currency_code()
    {
      return $this->store_currency_code;
    }

    /**
     * @param string $store_currency_code
     * @return salesOrderListEntity
     */
    public function setStore_currency_code($store_currency_code)
    {
      $this->store_currency_code = $store_currency_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder_currency_code()
    {
      return $this->order_currency_code;
    }

    /**
     * @param string $order_currency_code
     * @return salesOrderListEntity
     */
    public function setOrder_currency_code($order_currency_code)
    {
      $this->order_currency_code = $order_currency_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_method()
    {
      return $this->shipping_method;
    }

    /**
     * @param string $shipping_method
     * @return salesOrderListEntity
     */
    public function setShipping_method($shipping_method)
    {
      $this->shipping_method = $shipping_method;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_description()
    {
      return $this->shipping_description;
    }

    /**
     * @param string $shipping_description
     * @return salesOrderListEntity
     */
    public function setShipping_description($shipping_description)
    {
      $this->shipping_description = $shipping_description;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_email()
    {
      return $this->customer_email;
    }

    /**
     * @param string $customer_email
     * @return salesOrderListEntity
     */
    public function setCustomer_email($customer_email)
    {
      $this->customer_email = $customer_email;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_firstname()
    {
      return $this->customer_firstname;
    }

    /**
     * @param string $customer_firstname
     * @return salesOrderListEntity
     */
    public function setCustomer_firstname($customer_firstname)
    {
      $this->customer_firstname = $customer_firstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_lastname()
    {
      return $this->customer_lastname;
    }

    /**
     * @param string $customer_lastname
     * @return salesOrderListEntity
     */
    public function setCustomer_lastname($customer_lastname)
    {
      $this->customer_lastname = $customer_lastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuote_id()
    {
      return $this->quote_id;
    }

    /**
     * @param string $quote_id
     * @return salesOrderListEntity
     */
    public function setQuote_id($quote_id)
    {
      $this->quote_id = $quote_id;
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
     * @return salesOrderListEntity
     */
    public function setIs_virtual($is_virtual)
    {
      $this->is_virtual = $is_virtual;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_group_id()
    {
      return $this->customer_group_id;
    }

    /**
     * @param string $customer_group_id
     * @return salesOrderListEntity
     */
    public function setCustomer_group_id($customer_group_id)
    {
      $this->customer_group_id = $customer_group_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_note_notify()
    {
      return $this->customer_note_notify;
    }

    /**
     * @param string $customer_note_notify
     * @return salesOrderListEntity
     */
    public function setCustomer_note_notify($customer_note_notify)
    {
      $this->customer_note_notify = $customer_note_notify;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_is_guest()
    {
      return $this->customer_is_guest;
    }

    /**
     * @param string $customer_is_guest
     * @return salesOrderListEntity
     */
    public function setCustomer_is_guest($customer_is_guest)
    {
      $this->customer_is_guest = $customer_is_guest;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail_sent()
    {
      return $this->email_sent;
    }

    /**
     * @param string $email_sent
     * @return salesOrderListEntity
     */
    public function setEmail_sent($email_sent)
    {
      $this->email_sent = $email_sent;
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
     * @return salesOrderListEntity
     */
    public function setOrder_id($order_id)
    {
      $this->order_id = $order_id;
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
     * @return salesOrderListEntity
     */
    public function setGift_message_id($gift_message_id)
    {
      $this->gift_message_id = $gift_message_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoupon_code()
    {
      return $this->coupon_code;
    }

    /**
     * @param string $coupon_code
     * @return salesOrderListEntity
     */
    public function setCoupon_code($coupon_code)
    {
      $this->coupon_code = $coupon_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getProtect_code()
    {
      return $this->protect_code;
    }

    /**
     * @param string $protect_code
     * @return salesOrderListEntity
     */
    public function setProtect_code($protect_code)
    {
      $this->protect_code = $protect_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_discount_canceled()
    {
      return $this->base_discount_canceled;
    }

    /**
     * @param string $base_discount_canceled
     * @return salesOrderListEntity
     */
    public function setBase_discount_canceled($base_discount_canceled)
    {
      $this->base_discount_canceled = $base_discount_canceled;
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
     * @return salesOrderListEntity
     */
    public function setBase_discount_invoiced($base_discount_invoiced)
    {
      $this->base_discount_invoiced = $base_discount_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_discount_refunded()
    {
      return $this->base_discount_refunded;
    }

    /**
     * @param string $base_discount_refunded
     * @return salesOrderListEntity
     */
    public function setBase_discount_refunded($base_discount_refunded)
    {
      $this->base_discount_refunded = $base_discount_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_canceled()
    {
      return $this->base_shipping_canceled;
    }

    /**
     * @param string $base_shipping_canceled
     * @return salesOrderListEntity
     */
    public function setBase_shipping_canceled($base_shipping_canceled)
    {
      $this->base_shipping_canceled = $base_shipping_canceled;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_invoiced()
    {
      return $this->base_shipping_invoiced;
    }

    /**
     * @param string $base_shipping_invoiced
     * @return salesOrderListEntity
     */
    public function setBase_shipping_invoiced($base_shipping_invoiced)
    {
      $this->base_shipping_invoiced = $base_shipping_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_refunded()
    {
      return $this->base_shipping_refunded;
    }

    /**
     * @param string $base_shipping_refunded
     * @return salesOrderListEntity
     */
    public function setBase_shipping_refunded($base_shipping_refunded)
    {
      $this->base_shipping_refunded = $base_shipping_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_tax_amount()
    {
      return $this->base_shipping_tax_amount;
    }

    /**
     * @param string $base_shipping_tax_amount
     * @return salesOrderListEntity
     */
    public function setBase_shipping_tax_amount($base_shipping_tax_amount)
    {
      $this->base_shipping_tax_amount = $base_shipping_tax_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_tax_refunded()
    {
      return $this->base_shipping_tax_refunded;
    }

    /**
     * @param string $base_shipping_tax_refunded
     * @return salesOrderListEntity
     */
    public function setBase_shipping_tax_refunded($base_shipping_tax_refunded)
    {
      $this->base_shipping_tax_refunded = $base_shipping_tax_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_subtotal_canceled()
    {
      return $this->base_subtotal_canceled;
    }

    /**
     * @param string $base_subtotal_canceled
     * @return salesOrderListEntity
     */
    public function setBase_subtotal_canceled($base_subtotal_canceled)
    {
      $this->base_subtotal_canceled = $base_subtotal_canceled;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_subtotal_invoiced()
    {
      return $this->base_subtotal_invoiced;
    }

    /**
     * @param string $base_subtotal_invoiced
     * @return salesOrderListEntity
     */
    public function setBase_subtotal_invoiced($base_subtotal_invoiced)
    {
      $this->base_subtotal_invoiced = $base_subtotal_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_subtotal_refunded()
    {
      return $this->base_subtotal_refunded;
    }

    /**
     * @param string $base_subtotal_refunded
     * @return salesOrderListEntity
     */
    public function setBase_subtotal_refunded($base_subtotal_refunded)
    {
      $this->base_subtotal_refunded = $base_subtotal_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_tax_canceled()
    {
      return $this->base_tax_canceled;
    }

    /**
     * @param string $base_tax_canceled
     * @return salesOrderListEntity
     */
    public function setBase_tax_canceled($base_tax_canceled)
    {
      $this->base_tax_canceled = $base_tax_canceled;
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
     * @return salesOrderListEntity
     */
    public function setBase_tax_invoiced($base_tax_invoiced)
    {
      $this->base_tax_invoiced = $base_tax_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_tax_refunded()
    {
      return $this->base_tax_refunded;
    }

    /**
     * @param string $base_tax_refunded
     * @return salesOrderListEntity
     */
    public function setBase_tax_refunded($base_tax_refunded)
    {
      $this->base_tax_refunded = $base_tax_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_invoiced_cost()
    {
      return $this->base_total_invoiced_cost;
    }

    /**
     * @param string $base_total_invoiced_cost
     * @return salesOrderListEntity
     */
    public function setBase_total_invoiced_cost($base_total_invoiced_cost)
    {
      $this->base_total_invoiced_cost = $base_total_invoiced_cost;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_canceled()
    {
      return $this->discount_canceled;
    }

    /**
     * @param string $discount_canceled
     * @return salesOrderListEntity
     */
    public function setDiscount_canceled($discount_canceled)
    {
      $this->discount_canceled = $discount_canceled;
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
     * @return salesOrderListEntity
     */
    public function setDiscount_invoiced($discount_invoiced)
    {
      $this->discount_invoiced = $discount_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_refunded()
    {
      return $this->discount_refunded;
    }

    /**
     * @param string $discount_refunded
     * @return salesOrderListEntity
     */
    public function setDiscount_refunded($discount_refunded)
    {
      $this->discount_refunded = $discount_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_canceled()
    {
      return $this->shipping_canceled;
    }

    /**
     * @param string $shipping_canceled
     * @return salesOrderListEntity
     */
    public function setShipping_canceled($shipping_canceled)
    {
      $this->shipping_canceled = $shipping_canceled;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_invoiced()
    {
      return $this->shipping_invoiced;
    }

    /**
     * @param string $shipping_invoiced
     * @return salesOrderListEntity
     */
    public function setShipping_invoiced($shipping_invoiced)
    {
      $this->shipping_invoiced = $shipping_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_refunded()
    {
      return $this->shipping_refunded;
    }

    /**
     * @param string $shipping_refunded
     * @return salesOrderListEntity
     */
    public function setShipping_refunded($shipping_refunded)
    {
      $this->shipping_refunded = $shipping_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_tax_amount()
    {
      return $this->shipping_tax_amount;
    }

    /**
     * @param string $shipping_tax_amount
     * @return salesOrderListEntity
     */
    public function setShipping_tax_amount($shipping_tax_amount)
    {
      $this->shipping_tax_amount = $shipping_tax_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_tax_refunded()
    {
      return $this->shipping_tax_refunded;
    }

    /**
     * @param string $shipping_tax_refunded
     * @return salesOrderListEntity
     */
    public function setShipping_tax_refunded($shipping_tax_refunded)
    {
      $this->shipping_tax_refunded = $shipping_tax_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal_canceled()
    {
      return $this->subtotal_canceled;
    }

    /**
     * @param string $subtotal_canceled
     * @return salesOrderListEntity
     */
    public function setSubtotal_canceled($subtotal_canceled)
    {
      $this->subtotal_canceled = $subtotal_canceled;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal_invoiced()
    {
      return $this->subtotal_invoiced;
    }

    /**
     * @param string $subtotal_invoiced
     * @return salesOrderListEntity
     */
    public function setSubtotal_invoiced($subtotal_invoiced)
    {
      $this->subtotal_invoiced = $subtotal_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal_refunded()
    {
      return $this->subtotal_refunded;
    }

    /**
     * @param string $subtotal_refunded
     * @return salesOrderListEntity
     */
    public function setSubtotal_refunded($subtotal_refunded)
    {
      $this->subtotal_refunded = $subtotal_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getTax_canceled()
    {
      return $this->tax_canceled;
    }

    /**
     * @param string $tax_canceled
     * @return salesOrderListEntity
     */
    public function setTax_canceled($tax_canceled)
    {
      $this->tax_canceled = $tax_canceled;
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
     * @return salesOrderListEntity
     */
    public function setTax_invoiced($tax_invoiced)
    {
      $this->tax_invoiced = $tax_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getTax_refunded()
    {
      return $this->tax_refunded;
    }

    /**
     * @param string $tax_refunded
     * @return salesOrderListEntity
     */
    public function setTax_refunded($tax_refunded)
    {
      $this->tax_refunded = $tax_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getCan_ship_partially()
    {
      return $this->can_ship_partially;
    }

    /**
     * @param string $can_ship_partially
     * @return salesOrderListEntity
     */
    public function setCan_ship_partially($can_ship_partially)
    {
      $this->can_ship_partially = $can_ship_partially;
      return $this;
    }

    /**
     * @return string
     */
    public function getCan_ship_partially_item()
    {
      return $this->can_ship_partially_item;
    }

    /**
     * @param string $can_ship_partially_item
     * @return salesOrderListEntity
     */
    public function setCan_ship_partially_item($can_ship_partially_item)
    {
      $this->can_ship_partially_item = $can_ship_partially_item;
      return $this;
    }

    /**
     * @return string
     */
    public function getEdit_increment()
    {
      return $this->edit_increment;
    }

    /**
     * @param string $edit_increment
     * @return salesOrderListEntity
     */
    public function setEdit_increment($edit_increment)
    {
      $this->edit_increment = $edit_increment;
      return $this;
    }

    /**
     * @return string
     */
    public function getForced_do_shipment_with_invoice()
    {
      return $this->forced_do_shipment_with_invoice;
    }

    /**
     * @param string $forced_do_shipment_with_invoice
     * @return salesOrderListEntity
     */
    public function setForced_do_shipment_with_invoice($forced_do_shipment_with_invoice)
    {
      $this->forced_do_shipment_with_invoice = $forced_do_shipment_with_invoice;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayment_authorization_expiration()
    {
      return $this->payment_authorization_expiration;
    }

    /**
     * @param string $payment_authorization_expiration
     * @return salesOrderListEntity
     */
    public function setPayment_authorization_expiration($payment_authorization_expiration)
    {
      $this->payment_authorization_expiration = $payment_authorization_expiration;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaypal_ipn_customer_notified()
    {
      return $this->paypal_ipn_customer_notified;
    }

    /**
     * @param string $paypal_ipn_customer_notified
     * @return salesOrderListEntity
     */
    public function setPaypal_ipn_customer_notified($paypal_ipn_customer_notified)
    {
      $this->paypal_ipn_customer_notified = $paypal_ipn_customer_notified;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuote_address_id()
    {
      return $this->quote_address_id;
    }

    /**
     * @param string $quote_address_id
     * @return salesOrderListEntity
     */
    public function setQuote_address_id($quote_address_id)
    {
      $this->quote_address_id = $quote_address_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdjustment_negative()
    {
      return $this->adjustment_negative;
    }

    /**
     * @param string $adjustment_negative
     * @return salesOrderListEntity
     */
    public function setAdjustment_negative($adjustment_negative)
    {
      $this->adjustment_negative = $adjustment_negative;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdjustment_positive()
    {
      return $this->adjustment_positive;
    }

    /**
     * @param string $adjustment_positive
     * @return salesOrderListEntity
     */
    public function setAdjustment_positive($adjustment_positive)
    {
      $this->adjustment_positive = $adjustment_positive;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_adjustment_negative()
    {
      return $this->base_adjustment_negative;
    }

    /**
     * @param string $base_adjustment_negative
     * @return salesOrderListEntity
     */
    public function setBase_adjustment_negative($base_adjustment_negative)
    {
      $this->base_adjustment_negative = $base_adjustment_negative;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_adjustment_positive()
    {
      return $this->base_adjustment_positive;
    }

    /**
     * @param string $base_adjustment_positive
     * @return salesOrderListEntity
     */
    public function setBase_adjustment_positive($base_adjustment_positive)
    {
      $this->base_adjustment_positive = $base_adjustment_positive;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_discount_amount()
    {
      return $this->base_shipping_discount_amount;
    }

    /**
     * @param string $base_shipping_discount_amount
     * @return salesOrderListEntity
     */
    public function setBase_shipping_discount_amount($base_shipping_discount_amount)
    {
      $this->base_shipping_discount_amount = $base_shipping_discount_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_subtotal_incl_tax()
    {
      return $this->base_subtotal_incl_tax;
    }

    /**
     * @param string $base_subtotal_incl_tax
     * @return salesOrderListEntity
     */
    public function setBase_subtotal_incl_tax($base_subtotal_incl_tax)
    {
      $this->base_subtotal_incl_tax = $base_subtotal_incl_tax;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_due()
    {
      return $this->base_total_due;
    }

    /**
     * @param string $base_total_due
     * @return salesOrderListEntity
     */
    public function setBase_total_due($base_total_due)
    {
      $this->base_total_due = $base_total_due;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayment_authorization_amount()
    {
      return $this->payment_authorization_amount;
    }

    /**
     * @param string $payment_authorization_amount
     * @return salesOrderListEntity
     */
    public function setPayment_authorization_amount($payment_authorization_amount)
    {
      $this->payment_authorization_amount = $payment_authorization_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_discount_amount()
    {
      return $this->shipping_discount_amount;
    }

    /**
     * @param string $shipping_discount_amount
     * @return salesOrderListEntity
     */
    public function setShipping_discount_amount($shipping_discount_amount)
    {
      $this->shipping_discount_amount = $shipping_discount_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal_incl_tax()
    {
      return $this->subtotal_incl_tax;
    }

    /**
     * @param string $subtotal_incl_tax
     * @return salesOrderListEntity
     */
    public function setSubtotal_incl_tax($subtotal_incl_tax)
    {
      $this->subtotal_incl_tax = $subtotal_incl_tax;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal_due()
    {
      return $this->total_due;
    }

    /**
     * @param string $total_due
     * @return salesOrderListEntity
     */
    public function setTotal_due($total_due)
    {
      $this->total_due = $total_due;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_dob()
    {
      return $this->customer_dob;
    }

    /**
     * @param string $customer_dob
     * @return salesOrderListEntity
     */
    public function setCustomer_dob($customer_dob)
    {
      $this->customer_dob = $customer_dob;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_middlename()
    {
      return $this->customer_middlename;
    }

    /**
     * @param string $customer_middlename
     * @return salesOrderListEntity
     */
    public function setCustomer_middlename($customer_middlename)
    {
      $this->customer_middlename = $customer_middlename;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_prefix()
    {
      return $this->customer_prefix;
    }

    /**
     * @param string $customer_prefix
     * @return salesOrderListEntity
     */
    public function setCustomer_prefix($customer_prefix)
    {
      $this->customer_prefix = $customer_prefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_suffix()
    {
      return $this->customer_suffix;
    }

    /**
     * @param string $customer_suffix
     * @return salesOrderListEntity
     */
    public function setCustomer_suffix($customer_suffix)
    {
      $this->customer_suffix = $customer_suffix;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_taxvat()
    {
      return $this->customer_taxvat;
    }

    /**
     * @param string $customer_taxvat
     * @return salesOrderListEntity
     */
    public function setCustomer_taxvat($customer_taxvat)
    {
      $this->customer_taxvat = $customer_taxvat;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_description()
    {
      return $this->discount_description;
    }

    /**
     * @param string $discount_description
     * @return salesOrderListEntity
     */
    public function setDiscount_description($discount_description)
    {
      $this->discount_description = $discount_description;
      return $this;
    }

    /**
     * @return string
     */
    public function getExt_customer_id()
    {
      return $this->ext_customer_id;
    }

    /**
     * @param string $ext_customer_id
     * @return salesOrderListEntity
     */
    public function setExt_customer_id($ext_customer_id)
    {
      $this->ext_customer_id = $ext_customer_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getExt_order_id()
    {
      return $this->ext_order_id;
    }

    /**
     * @param string $ext_order_id
     * @return salesOrderListEntity
     */
    public function setExt_order_id($ext_order_id)
    {
      $this->ext_order_id = $ext_order_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getHold_before_state()
    {
      return $this->hold_before_state;
    }

    /**
     * @param string $hold_before_state
     * @return salesOrderListEntity
     */
    public function setHold_before_state($hold_before_state)
    {
      $this->hold_before_state = $hold_before_state;
      return $this;
    }

    /**
     * @return string
     */
    public function getHold_before_status()
    {
      return $this->hold_before_status;
    }

    /**
     * @param string $hold_before_status
     * @return salesOrderListEntity
     */
    public function setHold_before_status($hold_before_status)
    {
      $this->hold_before_status = $hold_before_status;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginal_increment_id()
    {
      return $this->original_increment_id;
    }

    /**
     * @param string $original_increment_id
     * @return salesOrderListEntity
     */
    public function setOriginal_increment_id($original_increment_id)
    {
      $this->original_increment_id = $original_increment_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelation_child_id()
    {
      return $this->relation_child_id;
    }

    /**
     * @param string $relation_child_id
     * @return salesOrderListEntity
     */
    public function setRelation_child_id($relation_child_id)
    {
      $this->relation_child_id = $relation_child_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelation_child_real_id()
    {
      return $this->relation_child_real_id;
    }

    /**
     * @param string $relation_child_real_id
     * @return salesOrderListEntity
     */
    public function setRelation_child_real_id($relation_child_real_id)
    {
      $this->relation_child_real_id = $relation_child_real_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelation_parent_id()
    {
      return $this->relation_parent_id;
    }

    /**
     * @param string $relation_parent_id
     * @return salesOrderListEntity
     */
    public function setRelation_parent_id($relation_parent_id)
    {
      $this->relation_parent_id = $relation_parent_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelation_parent_real_id()
    {
      return $this->relation_parent_real_id;
    }

    /**
     * @param string $relation_parent_real_id
     * @return salesOrderListEntity
     */
    public function setRelation_parent_real_id($relation_parent_real_id)
    {
      $this->relation_parent_real_id = $relation_parent_real_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getX_forwarded_for()
    {
      return $this->x_forwarded_for;
    }

    /**
     * @param string $x_forwarded_for
     * @return salesOrderListEntity
     */
    public function setX_forwarded_for($x_forwarded_for)
    {
      $this->x_forwarded_for = $x_forwarded_for;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_note()
    {
      return $this->customer_note;
    }

    /**
     * @param string $customer_note
     * @return salesOrderListEntity
     */
    public function setCustomer_note($customer_note)
    {
      $this->customer_note = $customer_note;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal_item_count()
    {
      return $this->total_item_count;
    }

    /**
     * @param string $total_item_count
     * @return salesOrderListEntity
     */
    public function setTotal_item_count($total_item_count)
    {
      $this->total_item_count = $total_item_count;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_gender()
    {
      return $this->customer_gender;
    }

    /**
     * @param string $customer_gender
     * @return salesOrderListEntity
     */
    public function setCustomer_gender($customer_gender)
    {
      $this->customer_gender = $customer_gender;
      return $this;
    }

    /**
     * @return string
     */
    public function getHidden_tax_amount()
    {
      return $this->hidden_tax_amount;
    }

    /**
     * @param string $hidden_tax_amount
     * @return salesOrderListEntity
     */
    public function setHidden_tax_amount($hidden_tax_amount)
    {
      $this->hidden_tax_amount = $hidden_tax_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_hidden_tax_amount()
    {
      return $this->base_hidden_tax_amount;
    }

    /**
     * @param string $base_hidden_tax_amount
     * @return salesOrderListEntity
     */
    public function setBase_hidden_tax_amount($base_hidden_tax_amount)
    {
      $this->base_hidden_tax_amount = $base_hidden_tax_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_hidden_tax_amount()
    {
      return $this->shipping_hidden_tax_amount;
    }

    /**
     * @param string $shipping_hidden_tax_amount
     * @return salesOrderListEntity
     */
    public function setShipping_hidden_tax_amount($shipping_hidden_tax_amount)
    {
      $this->shipping_hidden_tax_amount = $shipping_hidden_tax_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_hidden_tax_amount()
    {
      return $this->base_shipping_hidden_tax_amount;
    }

    /**
     * @param string $base_shipping_hidden_tax_amount
     * @return salesOrderListEntity
     */
    public function setBase_shipping_hidden_tax_amount($base_shipping_hidden_tax_amount)
    {
      $this->base_shipping_hidden_tax_amount = $base_shipping_hidden_tax_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getHidden_tax_invoiced()
    {
      return $this->hidden_tax_invoiced;
    }

    /**
     * @param string $hidden_tax_invoiced
     * @return salesOrderListEntity
     */
    public function setHidden_tax_invoiced($hidden_tax_invoiced)
    {
      $this->hidden_tax_invoiced = $hidden_tax_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_hidden_tax_invoiced()
    {
      return $this->base_hidden_tax_invoiced;
    }

    /**
     * @param string $base_hidden_tax_invoiced
     * @return salesOrderListEntity
     */
    public function setBase_hidden_tax_invoiced($base_hidden_tax_invoiced)
    {
      $this->base_hidden_tax_invoiced = $base_hidden_tax_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getHidden_tax_refunded()
    {
      return $this->hidden_tax_refunded;
    }

    /**
     * @param string $hidden_tax_refunded
     * @return salesOrderListEntity
     */
    public function setHidden_tax_refunded($hidden_tax_refunded)
    {
      $this->hidden_tax_refunded = $hidden_tax_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_hidden_tax_refunded()
    {
      return $this->base_hidden_tax_refunded;
    }

    /**
     * @param string $base_hidden_tax_refunded
     * @return salesOrderListEntity
     */
    public function setBase_hidden_tax_refunded($base_hidden_tax_refunded)
    {
      $this->base_hidden_tax_refunded = $base_hidden_tax_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_incl_tax()
    {
      return $this->shipping_incl_tax;
    }

    /**
     * @param string $shipping_incl_tax
     * @return salesOrderListEntity
     */
    public function setShipping_incl_tax($shipping_incl_tax)
    {
      $this->shipping_incl_tax = $shipping_incl_tax;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_incl_tax()
    {
      return $this->base_shipping_incl_tax;
    }

    /**
     * @param string $base_shipping_incl_tax
     * @return salesOrderListEntity
     */
    public function setBase_shipping_incl_tax($base_shipping_incl_tax)
    {
      $this->base_shipping_incl_tax = $base_shipping_incl_tax;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_customer_balance_amount()
    {
      return $this->base_customer_balance_amount;
    }

    /**
     * @param string $base_customer_balance_amount
     * @return salesOrderListEntity
     */
    public function setBase_customer_balance_amount($base_customer_balance_amount)
    {
      $this->base_customer_balance_amount = $base_customer_balance_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_balance_amount()
    {
      return $this->customer_balance_amount;
    }

    /**
     * @param string $customer_balance_amount
     * @return salesOrderListEntity
     */
    public function setCustomer_balance_amount($customer_balance_amount)
    {
      $this->customer_balance_amount = $customer_balance_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_customer_balance_invoiced()
    {
      return $this->base_customer_balance_invoiced;
    }

    /**
     * @param string $base_customer_balance_invoiced
     * @return salesOrderListEntity
     */
    public function setBase_customer_balance_invoiced($base_customer_balance_invoiced)
    {
      $this->base_customer_balance_invoiced = $base_customer_balance_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_balance_invoiced()
    {
      return $this->customer_balance_invoiced;
    }

    /**
     * @param string $customer_balance_invoiced
     * @return salesOrderListEntity
     */
    public function setCustomer_balance_invoiced($customer_balance_invoiced)
    {
      $this->customer_balance_invoiced = $customer_balance_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_customer_balance_refunded()
    {
      return $this->base_customer_balance_refunded;
    }

    /**
     * @param string $base_customer_balance_refunded
     * @return salesOrderListEntity
     */
    public function setBase_customer_balance_refunded($base_customer_balance_refunded)
    {
      $this->base_customer_balance_refunded = $base_customer_balance_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_balance_refunded()
    {
      return $this->customer_balance_refunded;
    }

    /**
     * @param string $customer_balance_refunded
     * @return salesOrderListEntity
     */
    public function setCustomer_balance_refunded($customer_balance_refunded)
    {
      $this->customer_balance_refunded = $customer_balance_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_customer_balance_total_refunded()
    {
      return $this->base_customer_balance_total_refunded;
    }

    /**
     * @param string $base_customer_balance_total_refunded
     * @return salesOrderListEntity
     */
    public function setBase_customer_balance_total_refunded($base_customer_balance_total_refunded)
    {
      $this->base_customer_balance_total_refunded = $base_customer_balance_total_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_balance_total_refunded()
    {
      return $this->customer_balance_total_refunded;
    }

    /**
     * @param string $customer_balance_total_refunded
     * @return salesOrderListEntity
     */
    public function setCustomer_balance_total_refunded($customer_balance_total_refunded)
    {
      $this->customer_balance_total_refunded = $customer_balance_total_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getGift_cards()
    {
      return $this->gift_cards;
    }

    /**
     * @param string $gift_cards
     * @return salesOrderListEntity
     */
    public function setGift_cards($gift_cards)
    {
      $this->gift_cards = $gift_cards;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_gift_cards_amount()
    {
      return $this->base_gift_cards_amount;
    }

    /**
     * @param string $base_gift_cards_amount
     * @return salesOrderListEntity
     */
    public function setBase_gift_cards_amount($base_gift_cards_amount)
    {
      $this->base_gift_cards_amount = $base_gift_cards_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getGift_cards_amount()
    {
      return $this->gift_cards_amount;
    }

    /**
     * @param string $gift_cards_amount
     * @return salesOrderListEntity
     */
    public function setGift_cards_amount($gift_cards_amount)
    {
      $this->gift_cards_amount = $gift_cards_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_gift_cards_invoiced()
    {
      return $this->base_gift_cards_invoiced;
    }

    /**
     * @param string $base_gift_cards_invoiced
     * @return salesOrderListEntity
     */
    public function setBase_gift_cards_invoiced($base_gift_cards_invoiced)
    {
      $this->base_gift_cards_invoiced = $base_gift_cards_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getGift_cards_invoiced()
    {
      return $this->gift_cards_invoiced;
    }

    /**
     * @param string $gift_cards_invoiced
     * @return salesOrderListEntity
     */
    public function setGift_cards_invoiced($gift_cards_invoiced)
    {
      $this->gift_cards_invoiced = $gift_cards_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_gift_cards_refunded()
    {
      return $this->base_gift_cards_refunded;
    }

    /**
     * @param string $base_gift_cards_refunded
     * @return salesOrderListEntity
     */
    public function setBase_gift_cards_refunded($base_gift_cards_refunded)
    {
      $this->base_gift_cards_refunded = $base_gift_cards_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getGift_cards_refunded()
    {
      return $this->gift_cards_refunded;
    }

    /**
     * @param string $gift_cards_refunded
     * @return salesOrderListEntity
     */
    public function setGift_cards_refunded($gift_cards_refunded)
    {
      $this->gift_cards_refunded = $gift_cards_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getReward_points_balance()
    {
      return $this->reward_points_balance;
    }

    /**
     * @param string $reward_points_balance
     * @return salesOrderListEntity
     */
    public function setReward_points_balance($reward_points_balance)
    {
      $this->reward_points_balance = $reward_points_balance;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_reward_currency_amount()
    {
      return $this->base_reward_currency_amount;
    }

    /**
     * @param string $base_reward_currency_amount
     * @return salesOrderListEntity
     */
    public function setBase_reward_currency_amount($base_reward_currency_amount)
    {
      $this->base_reward_currency_amount = $base_reward_currency_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getReward_currency_amount()
    {
      return $this->reward_currency_amount;
    }

    /**
     * @param string $reward_currency_amount
     * @return salesOrderListEntity
     */
    public function setReward_currency_amount($reward_currency_amount)
    {
      $this->reward_currency_amount = $reward_currency_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_reward_currency_amount_invoiced()
    {
      return $this->base_reward_currency_amount_invoiced;
    }

    /**
     * @param string $base_reward_currency_amount_invoiced
     * @return salesOrderListEntity
     */
    public function setBase_reward_currency_amount_invoiced($base_reward_currency_amount_invoiced)
    {
      $this->base_reward_currency_amount_invoiced = $base_reward_currency_amount_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getReward_currency_amount_invoiced()
    {
      return $this->reward_currency_amount_invoiced;
    }

    /**
     * @param string $reward_currency_amount_invoiced
     * @return salesOrderListEntity
     */
    public function setReward_currency_amount_invoiced($reward_currency_amount_invoiced)
    {
      $this->reward_currency_amount_invoiced = $reward_currency_amount_invoiced;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_reward_currency_amount_refunded()
    {
      return $this->base_reward_currency_amount_refunded;
    }

    /**
     * @param string $base_reward_currency_amount_refunded
     * @return salesOrderListEntity
     */
    public function setBase_reward_currency_amount_refunded($base_reward_currency_amount_refunded)
    {
      $this->base_reward_currency_amount_refunded = $base_reward_currency_amount_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getReward_currency_amount_refunded()
    {
      return $this->reward_currency_amount_refunded;
    }

    /**
     * @param string $reward_currency_amount_refunded
     * @return salesOrderListEntity
     */
    public function setReward_currency_amount_refunded($reward_currency_amount_refunded)
    {
      $this->reward_currency_amount_refunded = $reward_currency_amount_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getReward_points_balance_refunded()
    {
      return $this->reward_points_balance_refunded;
    }

    /**
     * @param string $reward_points_balance_refunded
     * @return salesOrderListEntity
     */
    public function setReward_points_balance_refunded($reward_points_balance_refunded)
    {
      $this->reward_points_balance_refunded = $reward_points_balance_refunded;
      return $this;
    }

    /**
     * @return string
     */
    public function getReward_points_balance_to_refund()
    {
      return $this->reward_points_balance_to_refund;
    }

    /**
     * @param string $reward_points_balance_to_refund
     * @return salesOrderListEntity
     */
    public function setReward_points_balance_to_refund($reward_points_balance_to_refund)
    {
      $this->reward_points_balance_to_refund = $reward_points_balance_to_refund;
      return $this;
    }

    /**
     * @return string
     */
    public function getReward_salesrule_points()
    {
      return $this->reward_salesrule_points;
    }

    /**
     * @param string $reward_salesrule_points
     * @return salesOrderListEntity
     */
    public function setReward_salesrule_points($reward_salesrule_points)
    {
      $this->reward_salesrule_points = $reward_salesrule_points;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
      return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return salesOrderListEntity
     */
    public function setFirstname($firstname)
    {
      $this->firstname = $firstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
      return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return salesOrderListEntity
     */
    public function setLastname($lastname)
    {
      $this->lastname = $lastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
      return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return salesOrderListEntity
     */
    public function setTelephone($telephone)
    {
      $this->telephone = $telephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return salesOrderListEntity
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkyhub_code()
    {
      return $this->skyhub_code;
    }

    /**
     * @param string $skyhub_code
     * @return salesOrderListEntity
     */
    public function setSkyhub_code($skyhub_code)
    {
      $this->skyhub_code = $skyhub_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkyhub_marketplace()
    {
      return $this->skyhub_marketplace;
    }

    /**
     * @param string $skyhub_marketplace
     * @return salesOrderListEntity
     */
    public function setSkyhub_marketplace($skyhub_marketplace)
    {
      $this->skyhub_marketplace = $skyhub_marketplace;
      return $this;
    }

}
