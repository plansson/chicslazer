<?php

class complexFilter
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var associativeEntity $value
     */
    protected $value = null;

    /**
     * @param string $key
     * @param associativeEntity $value
     */
    public function __construct($key, $value)
    {
      $this->key = $key;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return complexFilter
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return associativeEntity
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param associativeEntity $value
     * @return complexFilter
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
