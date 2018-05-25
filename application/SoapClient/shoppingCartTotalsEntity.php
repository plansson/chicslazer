<?php

class shoppingCartTotalsEntity
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    
    public function __construct()
    {
    
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
     * @return shoppingCartTotalsEntity
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return shoppingCartTotalsEntity
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
