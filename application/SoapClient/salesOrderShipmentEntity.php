<?php

class salesOrderShipmentEntity
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
     * @var string $order_id
     */
    protected $order_id = null;

    /**
     * @var string $order_increment_id
     */
    protected $order_increment_id = null;

    /**
     * @var string $order_created_at
     */
    protected $order_created_at = null;

    /**
     * @var string $total_qty
     */
    protected $total_qty = null;

    /**
     * @var string $shipment_id
     */
    protected $shipment_id = null;

    /**
     * @var salesOrderShipmentItemEntityArray $items
     */
    protected $items = null;

    /**
     * @var salesOrderShipmentTrackEntityArray $tracks
     */
    protected $tracks = null;

    /**
     * @var salesOrderShipmentCommentEntityArray $comments
     */
    protected $comments = null;

    
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
     * @return salesOrderShipmentEntity
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
     * @return salesOrderShipmentEntity
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
     * @return salesOrderShipmentEntity
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
     * @return salesOrderShipmentEntity
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
     * @return salesOrderShipmentEntity
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
     * @return salesOrderShipmentEntity
     */
    public function setIs_active($is_active)
    {
      $this->is_active = $is_active;
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
     * @return salesOrderShipmentEntity
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
     * @return salesOrderShipmentEntity
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
     * @return salesOrderShipmentEntity
     */
    public function setShipping_lastname($shipping_lastname)
    {
      $this->shipping_lastname = $shipping_lastname;
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
     * @return salesOrderShipmentEntity
     */
    public function setOrder_id($order_id)
    {
      $this->order_id = $order_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder_increment_id()
    {
      return $this->order_increment_id;
    }

    /**
     * @param string $order_increment_id
     * @return salesOrderShipmentEntity
     */
    public function setOrder_increment_id($order_increment_id)
    {
      $this->order_increment_id = $order_increment_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder_created_at()
    {
      return $this->order_created_at;
    }

    /**
     * @param string $order_created_at
     * @return salesOrderShipmentEntity
     */
    public function setOrder_created_at($order_created_at)
    {
      $this->order_created_at = $order_created_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotal_qty()
    {
      return $this->total_qty;
    }

    /**
     * @param string $total_qty
     * @return salesOrderShipmentEntity
     */
    public function setTotal_qty($total_qty)
    {
      $this->total_qty = $total_qty;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipment_id()
    {
      return $this->shipment_id;
    }

    /**
     * @param string $shipment_id
     * @return salesOrderShipmentEntity
     */
    public function setShipment_id($shipment_id)
    {
      $this->shipment_id = $shipment_id;
      return $this;
    }

    /**
     * @return salesOrderShipmentItemEntityArray
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param salesOrderShipmentItemEntityArray $items
     * @return salesOrderShipmentEntity
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

    /**
     * @return salesOrderShipmentTrackEntityArray
     */
    public function getTracks()
    {
      return $this->tracks;
    }

    /**
     * @param salesOrderShipmentTrackEntityArray $tracks
     * @return salesOrderShipmentEntity
     */
    public function setTracks($tracks)
    {
      $this->tracks = $tracks;
      return $this;
    }

    /**
     * @return salesOrderShipmentCommentEntityArray
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param salesOrderShipmentCommentEntityArray $comments
     * @return salesOrderShipmentEntity
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

}
