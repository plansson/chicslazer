<?php

class catalogProductAttributeMediaTypeEntityArray
{

    /**
     * @var catalogProductAttributeMediaTypeEntity[] $catalogProductAttributeMediaTypeEntityArray
     */
    protected $catalogProductAttributeMediaTypeEntityArray = null;

    /**
     * @param catalogProductAttributeMediaTypeEntity[] $catalogProductAttributeMediaTypeEntityArray
     */
    public function __construct(array $catalogProductAttributeMediaTypeEntityArray)
    {
      $this->catalogProductAttributeMediaTypeEntityArray = $catalogProductAttributeMediaTypeEntityArray;
    }

    /**
     * @return catalogProductAttributeMediaTypeEntity[]
     */
    public function getCatalogProductAttributeMediaTypeEntityArray()
    {
      return $this->catalogProductAttributeMediaTypeEntityArray;
    }

    /**
     * @param catalogProductAttributeMediaTypeEntity[] $catalogProductAttributeMediaTypeEntityArray
     * @return catalogProductAttributeMediaTypeEntityArray
     */
    public function setCatalogProductAttributeMediaTypeEntityArray(array $catalogProductAttributeMediaTypeEntityArray)
    {
      $this->catalogProductAttributeMediaTypeEntityArray = $catalogProductAttributeMediaTypeEntityArray;
      return $this;
    }

}
