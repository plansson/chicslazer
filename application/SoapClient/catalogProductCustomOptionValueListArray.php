<?php

class catalogProductCustomOptionValueListArray
{

    /**
     * @var catalogProductCustomOptionValueListEntity[] $catalogProductCustomOptionValueListArray
     */
    protected $catalogProductCustomOptionValueListArray = null;

    /**
     * @param catalogProductCustomOptionValueListEntity[] $catalogProductCustomOptionValueListArray
     */
    public function __construct(array $catalogProductCustomOptionValueListArray)
    {
      $this->catalogProductCustomOptionValueListArray = $catalogProductCustomOptionValueListArray;
    }

    /**
     * @return catalogProductCustomOptionValueListEntity[]
     */
    public function getCatalogProductCustomOptionValueListArray()
    {
      return $this->catalogProductCustomOptionValueListArray;
    }

    /**
     * @param catalogProductCustomOptionValueListEntity[] $catalogProductCustomOptionValueListArray
     * @return catalogProductCustomOptionValueListArray
     */
    public function setCatalogProductCustomOptionValueListArray(array $catalogProductCustomOptionValueListArray)
    {
      $this->catalogProductCustomOptionValueListArray = $catalogProductCustomOptionValueListArray;
      return $this;
    }

}
