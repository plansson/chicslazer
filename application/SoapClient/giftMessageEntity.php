<?php

class giftMessageEntity
{

    /**
     * @var string $from
     */
    protected $from = null;

    /**
     * @var string $to
     */
    protected $to = null;

    /**
     * @var string $message
     */
    protected $message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFrom()
    {
      return $this->from;
    }

    /**
     * @param string $from
     * @return giftMessageEntity
     */
    public function setFrom($from)
    {
      $this->from = $from;
      return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
      return $this->to;
    }

    /**
     * @param string $to
     * @return giftMessageEntity
     */
    public function setTo($to)
    {
      $this->to = $to;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return giftMessageEntity
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
