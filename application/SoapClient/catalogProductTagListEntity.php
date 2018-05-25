<?php

class catalogProductTagListEntity
{

    /**
     * @var string $tag_id
     */
    protected $tag_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $tag_id
     * @param string $name
     */
    public function __construct($tag_id, $name)
    {
      $this->tag_id = $tag_id;
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getTag_id()
    {
      return $this->tag_id;
    }

    /**
     * @param string $tag_id
     * @return catalogProductTagListEntity
     */
    public function setTag_id($tag_id)
    {
      $this->tag_id = $tag_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return catalogProductTagListEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
