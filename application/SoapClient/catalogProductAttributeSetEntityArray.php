<?php

class catalogProductAttributeSetEntityArray
{

    /**
     * @var catalogProductAttributeSetEntity[] $catalogProductAttributeSetEntityArray
     */
    protected $catalogProductAttributeSetEntityArray = null;

    /**
     * @param catalogProductAttributeSetEntity[] $catalogProductAttributeSetEntityArray
     */
    public function __construct(array $catalogProductAttributeSetEntityArray)
    {
      $this->catalogProductAttributeSetEntityArray = $catalogProductAttributeSetEntityArray;
    }

    /**
     * @return catalogProductAttributeSetEntity[]
     */
    public function getCatalogProductAttributeSetEntityArray()
    {
      return $this->catalogProductAttributeSetEntityArray;
    }

    /**
     * @param catalogProductAttributeSetEntity[] $catalogProductAttributeSetEntityArray
     * @return catalogProductAttributeSetEntityArray
     */
    public function setCatalogProductAttributeSetEntityArray(array $catalogProductAttributeSetEntityArray)
    {
      $this->catalogProductAttributeSetEntityArray = $catalogProductAttributeSetEntityArray;
      return $this;
    }

}
