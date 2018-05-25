<?php

class catalogProductLinkEntityArray
{

    /**
     * @var catalogProductLinkEntity[] $catalogProductLinkEntityArray
     */
    protected $catalogProductLinkEntityArray = null;

    /**
     * @param catalogProductLinkEntity[] $catalogProductLinkEntityArray
     */
    public function __construct(array $catalogProductLinkEntityArray)
    {
      $this->catalogProductLinkEntityArray = $catalogProductLinkEntityArray;
    }

    /**
     * @return catalogProductLinkEntity[]
     */
    public function getCatalogProductLinkEntityArray()
    {
      return $this->catalogProductLinkEntityArray;
    }

    /**
     * @param catalogProductLinkEntity[] $catalogProductLinkEntityArray
     * @return catalogProductLinkEntityArray
     */
    public function setCatalogProductLinkEntityArray(array $catalogProductLinkEntityArray)
    {
      $this->catalogProductLinkEntityArray = $catalogProductLinkEntityArray;
      return $this;
    }

}
