<?php

class catalogAttributeEntityArray
{

    /**
     * @var catalogAttributeEntity[] $catalogAttributeEntityArray
     */
    protected $catalogAttributeEntityArray = null;

    /**
     * @param catalogAttributeEntity[] $catalogAttributeEntityArray
     */
    public function __construct(array $catalogAttributeEntityArray)
    {
      $this->catalogAttributeEntityArray = $catalogAttributeEntityArray;
    }

    /**
     * @return catalogAttributeEntity[]
     */
    public function getCatalogAttributeEntityArray()
    {
      return $this->catalogAttributeEntityArray;
    }

    /**
     * @param catalogAttributeEntity[] $catalogAttributeEntityArray
     * @return catalogAttributeEntityArray
     */
    public function setCatalogAttributeEntityArray(array $catalogAttributeEntityArray)
    {
      $this->catalogAttributeEntityArray = $catalogAttributeEntityArray;
      return $this;
    }

}
