<?php

class giftMessageAssociativeProductsEntityArray
{

    /**
     * @var giftMessageAssociativeProductsEntity[] $giftMessageAssociativeProductsEntityArray
     */
    protected $giftMessageAssociativeProductsEntityArray = null;

    /**
     * @param giftMessageAssociativeProductsEntity[] $giftMessageAssociativeProductsEntityArray
     */
    public function __construct(array $giftMessageAssociativeProductsEntityArray)
    {
      $this->giftMessageAssociativeProductsEntityArray = $giftMessageAssociativeProductsEntityArray;
    }

    /**
     * @return giftMessageAssociativeProductsEntity[]
     */
    public function getGiftMessageAssociativeProductsEntityArray()
    {
      return $this->giftMessageAssociativeProductsEntityArray;
    }

    /**
     * @param giftMessageAssociativeProductsEntity[] $giftMessageAssociativeProductsEntityArray
     * @return giftMessageAssociativeProductsEntityArray
     */
    public function setGiftMessageAssociativeProductsEntityArray(array $giftMessageAssociativeProductsEntityArray)
    {
      $this->giftMessageAssociativeProductsEntityArray = $giftMessageAssociativeProductsEntityArray;
      return $this;
    }

}
