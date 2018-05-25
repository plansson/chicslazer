<?php

class shoppingCartInfoEntity
{

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
     * @var string $converted_at
     */
    protected $converted_at = null;

    /**
     * @var int $quote_id
     */
    protected $quote_id = null;

    /**
     * @var int $is_active
     */
    protected $is_active = null;

    /**
     * @var int $is_virtual
     */
    protected $is_virtual = null;

    /**
     * @var int $is_multi_shipping
     */
    protected $is_multi_shipping = null;

    /**
     * @var float $items_count
     */
    protected $items_count = null;

    /**
     * @var float $items_qty
     */
    protected $items_qty = null;

    /**
     * @var string $orig_order_id
     */
    protected $orig_order_id = null;

    /**
     * @var string $store_to_base_rate
     */
    protected $store_to_base_rate = null;

    /**
     * @var string $store_to_quote_rate
     */
    protected $store_to_quote_rate = null;

    /**
     * @var string $base_currency_code
     */
    protected $base_currency_code = null;

    /**
     * @var string $store_currency_code
     */
    protected $store_currency_code = null;

    /**
     * @var string $quote_currency_code
     */
    protected $quote_currency_code = null;

    /**
     * @var string $grand_total
     */
    protected $grand_total = null;

    /**
     * @var string $base_grand_total
     */
    protected $base_grand_total = null;

    /**
     * @var string $checkout_method
     */
    protected $checkout_method = null;

    /**
     * @var string $customer_id
     */
    protected $customer_id = null;

    /**
     * @var string $customer_tax_class_id
     */
    protected $customer_tax_class_id = null;

    /**
     * @var int $customer_group_id
     */
    protected $customer_group_id = null;

    /**
     * @var string $customer_email
     */
    protected $customer_email = null;

    /**
     * @var string $customer_prefix
     */
    protected $customer_prefix = null;

    /**
     * @var string $customer_firstname
     */
    protected $customer_firstname = null;

    /**
     * @var string $customer_middlename
     */
    protected $customer_middlename = null;

    /**
     * @var string $customer_lastname
     */
    protected $customer_lastname = null;

    /**
     * @var string $customer_suffix
     */
    protected $customer_suffix = null;

    /**
     * @var string $customer_note
     */
    protected $customer_note = null;

    /**
     * @var string $customer_note_notify
     */
    protected $customer_note_notify = null;

    /**
     * @var string $customer_is_guest
     */
    protected $customer_is_guest = null;

    /**
     * @var string $applied_rule_ids
     */
    protected $applied_rule_ids = null;

    /**
     * @var string $reserved_order_id
     */
    protected $reserved_order_id = null;

    /**
     * @var string $password_hash
     */
    protected $password_hash = null;

    /**
     * @var string $coupon_code
     */
    protected $coupon_code = null;

    /**
     * @var string $global_currency_code
     */
    protected $global_currency_code = null;

    /**
     * @var float $base_to_global_rate
     */
    protected $base_to_global_rate = null;

    /**
     * @var float $base_to_quote_rate
     */
    protected $base_to_quote_rate = null;

    /**
     * @var string $customer_taxvat
     */
    protected $customer_taxvat = null;

    /**
     * @var string $customer_gender
     */
    protected $customer_gender = null;

    /**
     * @var float $subtotal
     */
    protected $subtotal = null;

    /**
     * @var float $base_subtotal
     */
    protected $base_subtotal = null;

    /**
     * @var float $subtotal_with_discount
     */
    protected $subtotal_with_discount = null;

    /**
     * @var float $base_subtotal_with_discount
     */
    protected $base_subtotal_with_discount = null;

    /**
     * @var string $ext_shipping_info
     */
    protected $ext_shipping_info = null;

    /**
     * @var string $gift_message_id
     */
    protected $gift_message_id = null;

    /**
     * @var string $gift_message
     */
    protected $gift_message = null;

    /**
     * @var float $customer_balance_amount_used
     */
    protected $customer_balance_amount_used = null;

    /**
     * @var float $base_customer_balance_amount_used
     */
    protected $base_customer_balance_amount_used = null;

    /**
     * @var string $use_customer_balance
     */
    protected $use_customer_balance = null;

    /**
     * @var string $gift_cards_amount
     */
    protected $gift_cards_amount = null;

    /**
     * @var string $base_gift_cards_amount
     */
    protected $base_gift_cards_amount = null;

    /**
     * @var string $gift_cards_amount_used
     */
    protected $gift_cards_amount_used = null;

    /**
     * @var string $use_reward_points
     */
    protected $use_reward_points = null;

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
     * @var shoppingCartAddressEntity $shipping_address
     */
    protected $shipping_address = null;

    /**
     * @var shoppingCartAddressEntity $billing_address
     */
    protected $billing_address = null;

    /**
     * @var shoppingCartItemEntityArray $items
     */
    protected $items = null;

    /**
     * @var shoppingCartPaymentEntity $payment
     */
    protected $payment = null;

    
    public function __construct()
    {
    
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
     * @return shoppingCartInfoEntity
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
     * @return shoppingCartInfoEntity
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
     * @return shoppingCartInfoEntity
     */
    public function setUpdated_at($updated_at)
    {
      $this->updated_at = $updated_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getConverted_at()
    {
      return $this->converted_at;
    }

    /**
     * @param string $converted_at
     * @return shoppingCartInfoEntity
     */
    public function setConverted_at($converted_at)
    {
      $this->converted_at = $converted_at;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuote_id()
    {
      return $this->quote_id;
    }

    /**
     * @param int $quote_id
     * @return shoppingCartInfoEntity
     */
    public function setQuote_id($quote_id)
    {
      $this->quote_id = $quote_id;
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
     * @return shoppingCartInfoEntity
     */
    public function setIs_active($is_active)
    {
      $this->is_active = $is_active;
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
     * @return shoppingCartInfoEntity
     */
    public function setIs_virtual($is_virtual)
    {
      $this->is_virtual = $is_virtual;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_multi_shipping()
    {
      return $this->is_multi_shipping;
    }

    /**
     * @param int $is_multi_shipping
     * @return shoppingCartInfoEntity
     */
    public function setIs_multi_shipping($is_multi_shipping)
    {
      $this->is_multi_shipping = $is_multi_shipping;
      return $this;
    }

    /**
     * @return float
     */
    public function getItems_count()
    {
      return $this->items_count;
    }

    /**
     * @param float $items_count
     * @return shoppingCartInfoEntity
     */
    public function setItems_count($items_count)
    {
      $this->items_count = $items_count;
      return $this;
    }

    /**
     * @return float
     */
    public function getItems_qty()
    {
      return $this->items_qty;
    }

    /**
     * @param float $items_qty
     * @return shoppingCartInfoEntity
     */
    public function setItems_qty($items_qty)
    {
      $this->items_qty = $items_qty;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrig_order_id()
    {
      return $this->orig_order_id;
    }

    /**
     * @param string $orig_order_id
     * @return shoppingCartInfoEntity
     */
    public function setOrig_order_id($orig_order_id)
    {
      $this->orig_order_id = $orig_order_id;
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
     * @return shoppingCartInfoEntity
     */
    public function setStore_to_base_rate($store_to_base_rate)
    {
      $this->store_to_base_rate = $store_to_base_rate;
      return $this;
    }

    /**
     * @return string
     */
    public function getStore_to_quote_rate()
    {
      return $this->store_to_quote_rate;
    }

    /**
     * @param string $store_to_quote_rate
     * @return shoppingCartInfoEntity
     */
    public function setStore_to_quote_rate($store_to_quote_rate)
    {
      $this->store_to_quote_rate = $store_to_quote_rate;
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
     * @return shoppingCartInfoEntity
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
     * @return shoppingCartInfoEntity
     */
    public function setStore_currency_code($store_currency_code)
    {
      $this->store_currency_code = $store_currency_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuote_currency_code()
    {
      return $this->quote_currency_code;
    }

    /**
     * @param string $quote_currency_code
     * @return shoppingCartInfoEntity
     */
    public function setQuote_currency_code($quote_currency_code)
    {
      $this->quote_currency_code = $quote_currency_code;
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
     * @return shoppingCartInfoEntity
     */
    public function setGrand_total($grand_total)
    {
      $this->grand_total = $grand_total;
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
     * @return shoppingCartInfoEntity
     */
    public function setBase_grand_total($base_grand_total)
    {
      $this->base_grand_total = $base_grand_total;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckout_method()
    {
      return $this->checkout_method;
    }

    /**
     * @param string $checkout_method
     * @return shoppingCartInfoEntity
     */
    public function setCheckout_method($checkout_method)
    {
      $this->checkout_method = $checkout_method;
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_id($customer_id)
    {
      $this->customer_id = $customer_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_tax_class_id()
    {
      return $this->customer_tax_class_id;
    }

    /**
     * @param string $customer_tax_class_id
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_tax_class_id($customer_tax_class_id)
    {
      $this->customer_tax_class_id = $customer_tax_class_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomer_group_id()
    {
      return $this->customer_group_id;
    }

    /**
     * @param int $customer_group_id
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_group_id($customer_group_id)
    {
      $this->customer_group_id = $customer_group_id;
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_email($customer_email)
    {
      $this->customer_email = $customer_email;
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_prefix($customer_prefix)
    {
      $this->customer_prefix = $customer_prefix;
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_firstname($customer_firstname)
    {
      $this->customer_firstname = $customer_firstname;
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_middlename($customer_middlename)
    {
      $this->customer_middlename = $customer_middlename;
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_lastname($customer_lastname)
    {
      $this->customer_lastname = $customer_lastname;
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_suffix($customer_suffix)
    {
      $this->customer_suffix = $customer_suffix;
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_note($customer_note)
    {
      $this->customer_note = $customer_note;
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
     * @return shoppingCartInfoEntity
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_is_guest($customer_is_guest)
    {
      $this->customer_is_guest = $customer_is_guest;
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
     * @return shoppingCartInfoEntity
     */
    public function setApplied_rule_ids($applied_rule_ids)
    {
      $this->applied_rule_ids = $applied_rule_ids;
      return $this;
    }

    /**
     * @return string
     */
    public function getReserved_order_id()
    {
      return $this->reserved_order_id;
    }

    /**
     * @param string $reserved_order_id
     * @return shoppingCartInfoEntity
     */
    public function setReserved_order_id($reserved_order_id)
    {
      $this->reserved_order_id = $reserved_order_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword_hash()
    {
      return $this->password_hash;
    }

    /**
     * @param string $password_hash
     * @return shoppingCartInfoEntity
     */
    public function setPassword_hash($password_hash)
    {
      $this->password_hash = $password_hash;
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
     * @return shoppingCartInfoEntity
     */
    public function setCoupon_code($coupon_code)
    {
      $this->coupon_code = $coupon_code;
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
     * @return shoppingCartInfoEntity
     */
    public function setGlobal_currency_code($global_currency_code)
    {
      $this->global_currency_code = $global_currency_code;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_to_global_rate()
    {
      return $this->base_to_global_rate;
    }

    /**
     * @param float $base_to_global_rate
     * @return shoppingCartInfoEntity
     */
    public function setBase_to_global_rate($base_to_global_rate)
    {
      $this->base_to_global_rate = $base_to_global_rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_to_quote_rate()
    {
      return $this->base_to_quote_rate;
    }

    /**
     * @param float $base_to_quote_rate
     * @return shoppingCartInfoEntity
     */
    public function setBase_to_quote_rate($base_to_quote_rate)
    {
      $this->base_to_quote_rate = $base_to_quote_rate;
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_taxvat($customer_taxvat)
    {
      $this->customer_taxvat = $customer_taxvat;
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
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_gender($customer_gender)
    {
      $this->customer_gender = $customer_gender;
      return $this;
    }

    /**
     * @return float
     */
    public function getSubtotal()
    {
      return $this->subtotal;
    }

    /**
     * @param float $subtotal
     * @return shoppingCartInfoEntity
     */
    public function setSubtotal($subtotal)
    {
      $this->subtotal = $subtotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_subtotal()
    {
      return $this->base_subtotal;
    }

    /**
     * @param float $base_subtotal
     * @return shoppingCartInfoEntity
     */
    public function setBase_subtotal($base_subtotal)
    {
      $this->base_subtotal = $base_subtotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getSubtotal_with_discount()
    {
      return $this->subtotal_with_discount;
    }

    /**
     * @param float $subtotal_with_discount
     * @return shoppingCartInfoEntity
     */
    public function setSubtotal_with_discount($subtotal_with_discount)
    {
      $this->subtotal_with_discount = $subtotal_with_discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_subtotal_with_discount()
    {
      return $this->base_subtotal_with_discount;
    }

    /**
     * @param float $base_subtotal_with_discount
     * @return shoppingCartInfoEntity
     */
    public function setBase_subtotal_with_discount($base_subtotal_with_discount)
    {
      $this->base_subtotal_with_discount = $base_subtotal_with_discount;
      return $this;
    }

    /**
     * @return string
     */
    public function getExt_shipping_info()
    {
      return $this->ext_shipping_info;
    }

    /**
     * @param string $ext_shipping_info
     * @return shoppingCartInfoEntity
     */
    public function setExt_shipping_info($ext_shipping_info)
    {
      $this->ext_shipping_info = $ext_shipping_info;
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
     * @return shoppingCartInfoEntity
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
     * @return shoppingCartInfoEntity
     */
    public function setGift_message($gift_message)
    {
      $this->gift_message = $gift_message;
      return $this;
    }

    /**
     * @return float
     */
    public function getCustomer_balance_amount_used()
    {
      return $this->customer_balance_amount_used;
    }

    /**
     * @param float $customer_balance_amount_used
     * @return shoppingCartInfoEntity
     */
    public function setCustomer_balance_amount_used($customer_balance_amount_used)
    {
      $this->customer_balance_amount_used = $customer_balance_amount_used;
      return $this;
    }

    /**
     * @return float
     */
    public function getBase_customer_balance_amount_used()
    {
      return $this->base_customer_balance_amount_used;
    }

    /**
     * @param float $base_customer_balance_amount_used
     * @return shoppingCartInfoEntity
     */
    public function setBase_customer_balance_amount_used($base_customer_balance_amount_used)
    {
      $this->base_customer_balance_amount_used = $base_customer_balance_amount_used;
      return $this;
    }

    /**
     * @return string
     */
    public function getUse_customer_balance()
    {
      return $this->use_customer_balance;
    }

    /**
     * @param string $use_customer_balance
     * @return shoppingCartInfoEntity
     */
    public function setUse_customer_balance($use_customer_balance)
    {
      $this->use_customer_balance = $use_customer_balance;
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
     * @return shoppingCartInfoEntity
     */
    public function setGift_cards_amount($gift_cards_amount)
    {
      $this->gift_cards_amount = $gift_cards_amount;
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
     * @return shoppingCartInfoEntity
     */
    public function setBase_gift_cards_amount($base_gift_cards_amount)
    {
      $this->base_gift_cards_amount = $base_gift_cards_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getGift_cards_amount_used()
    {
      return $this->gift_cards_amount_used;
    }

    /**
     * @param string $gift_cards_amount_used
     * @return shoppingCartInfoEntity
     */
    public function setGift_cards_amount_used($gift_cards_amount_used)
    {
      $this->gift_cards_amount_used = $gift_cards_amount_used;
      return $this;
    }

    /**
     * @return string
     */
    public function getUse_reward_points()
    {
      return $this->use_reward_points;
    }

    /**
     * @param string $use_reward_points
     * @return shoppingCartInfoEntity
     */
    public function setUse_reward_points($use_reward_points)
    {
      $this->use_reward_points = $use_reward_points;
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
     * @return shoppingCartInfoEntity
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
     * @return shoppingCartInfoEntity
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
     * @return shoppingCartInfoEntity
     */
    public function setReward_currency_amount($reward_currency_amount)
    {
      $this->reward_currency_amount = $reward_currency_amount;
      return $this;
    }

    /**
     * @return shoppingCartAddressEntity
     */
    public function getShipping_address()
    {
      return $this->shipping_address;
    }

    /**
     * @param shoppingCartAddressEntity $shipping_address
     * @return shoppingCartInfoEntity
     */
    public function setShipping_address($shipping_address)
    {
      $this->shipping_address = $shipping_address;
      return $this;
    }

    /**
     * @return shoppingCartAddressEntity
     */
    public function getBilling_address()
    {
      return $this->billing_address;
    }

    /**
     * @param shoppingCartAddressEntity $billing_address
     * @return shoppingCartInfoEntity
     */
    public function setBilling_address($billing_address)
    {
      $this->billing_address = $billing_address;
      return $this;
    }

    /**
     * @return shoppingCartItemEntityArray
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param shoppingCartItemEntityArray $items
     * @return shoppingCartInfoEntity
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

    /**
     * @return shoppingCartPaymentEntity
     */
    public function getPayment()
    {
      return $this->payment;
    }

    /**
     * @param shoppingCartPaymentEntity $payment
     * @return shoppingCartInfoEntity
     */
    public function setPayment($payment)
    {
      $this->payment = $payment;
      return $this;
    }

}
