<?php

class catalogProductCustomOptionListArray
{

    /**
     * @var catalogProductCustomOptionListEntity[] $catalogProductCustomOptionListArray
     */
    protected $catalogProductCustomOptionListArray = null;

    /**
     * @param catalogProductCustomOptionListEntity[] $catalogProductCustomOptionListArray
     */
    public function __construct(array $catalogProductCustomOptionListArray)
    {
      $this->catalogProductCustomOptionListArray = $catalogProductCustomOptionListArray;
    }

    /**
     * @return catalogProductCustomOptionListEntity[]
     */
    public function getCatalogProductCustomOptionListArray()
    {
      return $this->catalogProductCustomOptionListArray;
    }

    /**
     * @param catalogProductCustomOptionListEntity[] $catalogProductCustomOptionListArray
     * @return catalogProductCustomOptionListArray
     */
    public function setCatalogProductCustomOptionListArray(array $catalogProductCustomOptionListArray)
    {
      $this->catalogProductCustomOptionListArray = $catalogProductCustomOptionListArray;
      return $this;
    }

}
