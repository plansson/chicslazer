<?php

class catalogAttributeOptionEntityArray
{

    /**
     * @var catalogAttributeOptionEntity[] $catalogAttributeOptionEntityArray
     */
    protected $catalogAttributeOptionEntityArray = null;

    /**
     * @param catalogAttributeOptionEntity[] $catalogAttributeOptionEntityArray
     */
    public function __construct(array $catalogAttributeOptionEntityArray)
    {
      $this->catalogAttributeOptionEntityArray = $catalogAttributeOptionEntityArray;
    }

    /**
     * @return catalogAttributeOptionEntity[]
     */
    public function getCatalogAttributeOptionEntityArray()
    {
      return $this->catalogAttributeOptionEntityArray;
    }

    /**
     * @param catalogAttributeOptionEntity[] $catalogAttributeOptionEntityArray
     * @return catalogAttributeOptionEntityArray
     */
    public function setCatalogAttributeOptionEntityArray(array $catalogAttributeOptionEntityArray)
    {
      $this->catalogAttributeOptionEntityArray = $catalogAttributeOptionEntityArray;
      return $this;
    }

}
