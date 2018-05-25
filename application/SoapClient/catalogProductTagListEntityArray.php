<?php

class catalogProductTagListEntityArray
{

    /**
     * @var catalogProductTagListEntity[] $catalogProductTagListEntityArray
     */
    protected $catalogProductTagListEntityArray = null;

    /**
     * @param catalogProductTagListEntity[] $catalogProductTagListEntityArray
     */
    public function __construct(array $catalogProductTagListEntityArray)
    {
      $this->catalogProductTagListEntityArray = $catalogProductTagListEntityArray;
    }

    /**
     * @return catalogProductTagListEntity[]
     */
    public function getCatalogProductTagListEntityArray()
    {
      return $this->catalogProductTagListEntityArray;
    }

    /**
     * @param catalogProductTagListEntity[] $catalogProductTagListEntityArray
     * @return catalogProductTagListEntityArray
     */
    public function setCatalogProductTagListEntityArray(array $catalogProductTagListEntityArray)
    {
      $this->catalogProductTagListEntityArray = $catalogProductTagListEntityArray;
      return $this;
    }

}
