<?php

class salesOrderShipmentTrackEntity
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
     * @var string $carrier_code
     */
    protected $carrier_code = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @var string $order_id
     */
    protected $order_id = null;

    /**
     * @var string $track_id
     */
    protected $track_id = null;

    
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
     * @return salesOrderShipmentTrackEntity
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
     * @return salesOrderShipmentTrackEntity
     */
    public function setParent_id($parent_id)
    {
      $this->parent_id = $parent_id;
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
     * @return salesOrderShipmentTrackEntity
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
     * @return salesOrderShipmentTrackEntity
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
     * @return salesOrderShipmentTrackEntity
     */
    public function setIs_active($is_active)
    {
      $this->is_active = $is_active;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier_code()
    {
      return $this->carrier_code;
    }

    /**
     * @param string $carrier_code
     * @return salesOrderShipmentTrackEntity
     */
    public function setCarrier_code($carrier_code)
    {
      $this->carrier_code = $carrier_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return salesOrderShipmentTrackEntity
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return salesOrderShipmentTrackEntity
     */
    public function setNumber($number)
    {
      $this->number = $number;
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
     * @return salesOrderShipmentTrackEntity
     */
    public function setOrder_id($order_id)
    {
      $this->order_id = $order_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrack_id()
    {
      return $this->track_id;
    }

    /**
     * @param string $track_id
     * @return salesOrderShipmentTrackEntity
     */
    public function setTrack_id($track_id)
    {
      $this->track_id = $track_id;
      return $this;
    }

}
