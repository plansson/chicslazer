<?php

class associativeMultiEntity
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var ArrayOfString $value
     */
    protected $value = null;

    /**
     * @param string $key
     * @param ArrayOfString $value
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
     * @return associativeMultiEntity
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param ArrayOfString $value
     * @return associativeMultiEntity
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
