<?php

class catalogProductAttributeFrontendLabelArray
{

    /**
     * @var catalogProductAttributeFrontendLabelEntity[] $catalogProductAttributeFrontendLabelArray
     */
    protected $catalogProductAttributeFrontendLabelArray = null;

    /**
     * @param catalogProductAttributeFrontendLabelEntity[] $catalogProductAttributeFrontendLabelArray
     */
    public function __construct(array $catalogProductAttributeFrontendLabelArray)
    {
      $this->catalogProductAttributeFrontendLabelArray = $catalogProductAttributeFrontendLabelArray;
    }

    /**
     * @return catalogProductAttributeFrontendLabelEntity[]
     */
    public function getCatalogProductAttributeFrontendLabelArray()
    {
      return $this->catalogProductAttributeFrontendLabelArray;
    }

    /**
     * @param catalogProductAttributeFrontendLabelEntity[] $catalogProductAttributeFrontendLabelArray
     * @return catalogProductAttributeFrontendLabelArray
     */
    public function setCatalogProductAttributeFrontendLabelArray(array $catalogProductAttributeFrontendLabelArray)
    {
      $this->catalogProductAttributeFrontendLabelArray = $catalogProductAttributeFrontendLabelArray;
      return $this;
    }

}
