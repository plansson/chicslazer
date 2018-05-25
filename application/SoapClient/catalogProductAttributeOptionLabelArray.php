<?php

class catalogProductAttributeOptionLabelArray
{

    /**
     * @var catalogProductAttributeOptionLabelEntity[] $catalogProductAttributeOptionLabelArray
     */
    protected $catalogProductAttributeOptionLabelArray = null;

    /**
     * @param catalogProductAttributeOptionLabelEntity[] $catalogProductAttributeOptionLabelArray
     */
    public function __construct(array $catalogProductAttributeOptionLabelArray)
    {
      $this->catalogProductAttributeOptionLabelArray = $catalogProductAttributeOptionLabelArray;
    }

    /**
     * @return catalogProductAttributeOptionLabelEntity[]
     */
    public function getCatalogProductAttributeOptionLabelArray()
    {
      return $this->catalogProductAttributeOptionLabelArray;
    }

    /**
     * @param catalogProductAttributeOptionLabelEntity[] $catalogProductAttributeOptionLabelArray
     * @return catalogProductAttributeOptionLabelArray
     */
    public function setCatalogProductAttributeOptionLabelArray(array $catalogProductAttributeOptionLabelArray)
    {
      $this->catalogProductAttributeOptionLabelArray = $catalogProductAttributeOptionLabelArray;
      return $this;
    }

}
