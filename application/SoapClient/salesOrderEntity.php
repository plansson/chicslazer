<?php

class salesOrderEntity
{

    /**
     * @var string $increment_id
     */
    protected $increment_id = null;

    /**
     * @var string $parent_id
     */
    protected $parent_id = null;

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
     * @var string $is_active
     */
    protected $is_active = null;

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
     * @var string $gift_message
     */
    protected $gift_message = null;

    /**
     * @var salesOrderAddressEntity $shipping_address
     */
    protected $shipping_address = null;

    /**
     * @var salesOrderAddressEntity $billing_address
     */
    protected $billing_address = null;

    /**
     * @var salesOrderItemEntityArray $items
     */
    protected $items = null;

    /**
     * @var salesOrderPaymentEntity $payment
     */
    protected $payment = null;

    /**
     * @var salesOrderStatusHistoryEntityArray $status_history
     */
    protected $status_history = null;

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
     * @return salesOrderEntity
     */
    public function setIncrement_id($increment_id)
    {
      $this->increment_id = $increment_id;
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
     * @return salesOrderEntity
     */
    public function setParent_id($parent_id)
    {
      $this->parent_id = $parent_id;
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getIs_active()
    {
      return $this->is_active;
    }

    /**
     * @param string $is_active
     * @return salesOrderEntity
     */
    public function setIs_active($is_active)
    {
      $this->is_active = $is_active;
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
     */
    public function setGift_message($gift_message)
    {
      $this->gift_message = $gift_message;
      return $this;
    }

    /**
     * @return salesOrderAddressEntity
     */
    public function getShipping_address()
    {
      return $this->shipping_address;
    }

    /**
     * @param salesOrderAddressEntity $shipping_address
     * @return salesOrderEntity
     */
    public function setShipping_address($shipping_address)
    {
      $this->shipping_address = $shipping_address;
      return $this;
    }

    /**
     * @return salesOrderAddressEntity
     */
    public function getBilling_address()
    {
      return $this->billing_address;
    }

    /**
     * @param salesOrderAddressEntity $billing_address
     * @return salesOrderEntity
     */
    public function setBilling_address($billing_address)
    {
      $this->billing_address = $billing_address;
      return $this;
    }

    /**
     * @return salesOrderItemEntityArray
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param salesOrderItemEntityArray $items
     * @return salesOrderEntity
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

    /**
     * @return salesOrderPaymentEntity
     */
    public function getPayment()
    {
      return $this->payment;
    }

    /**
     * @param salesOrderPaymentEntity $payment
     * @return salesOrderEntity
     */
    public function setPayment($payment)
    {
      $this->payment = $payment;
      return $this;
    }

    /**
     * @return salesOrderStatusHistoryEntityArray
     */
    public function getStatus_history()
    {
      return $this->status_history;
    }

    /**
     * @param salesOrderStatusHistoryEntityArray $status_history
     * @return salesOrderEntity
     */
    public function setStatus_history($status_history)
    {
      $this->status_history = $status_history;
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
     * @return salesOrderEntity
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
     * @return salesOrderEntity
     */
    public function setSkyhub_marketplace($skyhub_marketplace)
    {
      $this->skyhub_marketplace = $skyhub_marketplace;
      return $this;
    }

}
