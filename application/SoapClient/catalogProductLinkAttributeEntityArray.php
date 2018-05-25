<?php

class catalogProductLinkAttributeEntityArray
{

    /**
     * @var catalogProductLinkAttributeEntity[] $catalogProductLinkAttributeEntityArray
     */
    protected $catalogProductLinkAttributeEntityArray = null;

    /**
     * @param catalogProductLinkAttributeEntity[] $catalogProductLinkAttributeEntityArray
     */
    public function __construct(array $catalogProductLinkAttributeEntityArray)
    {
      $this->catalogProductLinkAttributeEntityArray = $catalogProductLinkAttributeEntityArray;
    }

    /**
     * @return catalogProductLinkAttributeEntity[]
     */
    public function getCatalogProductLinkAttributeEntityArray()
    {
      return $this->catalogProductLinkAttributeEntityArray;
    }

    /**
     * @param catalogProductLinkAttributeEntity[] $catalogProductLinkAttributeEntityArray
     * @return catalogProductLinkAttributeEntityArray
     */
    public function setCatalogProductLinkAttributeEntityArray(array $catalogProductLinkAttributeEntityArray)
    {
      $this->catalogProductLinkAttributeEntityArray = $catalogProductLinkAttributeEntityArray;
      return $this;
    }

}
