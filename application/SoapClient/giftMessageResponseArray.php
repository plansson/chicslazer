<?php

class giftMessageResponseArray
{

    /**
     * @var giftMessageResponse[] $giftMessageResponseArray
     */
    protected $giftMessageResponseArray = null;

    /**
     * @param giftMessageResponse[] $giftMessageResponseArray
     */
    public function __construct(array $giftMessageResponseArray)
    {
      $this->giftMessageResponseArray = $giftMessageResponseArray;
    }

    /**
     * @return giftMessageResponse[]
     */
    public function getGiftMessageResponseArray()
    {
      return $this->giftMessageResponseArray;
    }

    /**
     * @param giftMessageResponse[] $giftMessageResponseArray
     * @return giftMessageResponseArray
     */
    public function setGiftMessageResponseArray(array $giftMessageResponseArray)
    {
      $this->giftMessageResponseArray = $giftMessageResponseArray;
      return $this;
    }

}
