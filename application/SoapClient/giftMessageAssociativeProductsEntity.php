<?php

class giftMessageAssociativeProductsEntity
{

    /**
     * @var shoppingCartProductEntity $product
     */
    protected $product = null;

    /**
     * @var giftMessageEntity $message
     */
    protected $message = null;

    /**
     * @param shoppingCartProductEntity $product
     * @param giftMessageEntity $message
     */
    public function __construct($product, $message)
    {
      $this->product = $product;
      $this->message = $message;
    }

    /**
     * @return shoppingCartProductEntity
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param shoppingCartProductEntity $product
     * @return giftMessageAssociativeProductsEntity
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return giftMessageEntity
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param giftMessageEntity $message
     * @return giftMessageAssociativeProductsEntity
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
