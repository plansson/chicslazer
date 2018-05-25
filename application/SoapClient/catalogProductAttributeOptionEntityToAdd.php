<?php

class catalogProductAttributeOptionEntityToAdd
{

    /**
     * @var catalogProductAttributeOptionLabelArray $label
     */
    protected $label = null;

    /**
     * @var int $order
     */
    protected $order = null;

    /**
     * @var int $is_default
     */
    protected $is_default = null;

    /**
     * @param catalogProductAttributeOptionLabelArray $label
     * @param int $order
     * @param int $is_default
     */
    public function __construct($label, $order, $is_default)
    {
      $this->label = $label;
      $this->order = $order;
      $this->is_default = $is_default;
    }

    /**
     * @return catalogProductAttributeOptionLabelArray
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param catalogProductAttributeOptionLabelArray $label
     * @return catalogProductAttributeOptionEntityToAdd
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param int $order
     * @return catalogProductAttributeOptionEntityToAdd
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return int
     */
    public function getIs_default()
    {
      return $this->is_default;
    }

    /**
     * @param int $is_default
     * @return catalogProductAttributeOptionEntityToAdd
     */
    public function setIs_default($is_default)
    {
      $this->is_default = $is_default;
      return $this;
    }

}
