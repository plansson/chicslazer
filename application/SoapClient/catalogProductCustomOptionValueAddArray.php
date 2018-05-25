<?php

class catalogProductCustomOptionValueAddArray
{

    /**
     * @var catalogProductCustomOptionValueAddEntity[] $catalogProductCustomOptionValueAddArray
     */
    protected $catalogProductCustomOptionValueAddArray = null;

    /**
     * @param catalogProductCustomOptionValueAddEntity[] $catalogProductCustomOptionValueAddArray
     */
    public function __construct(array $catalogProductCustomOptionValueAddArray)
    {
      $this->catalogProductCustomOptionValueAddArray = $catalogProductCustomOptionValueAddArray;
    }

    /**
     * @return catalogProductCustomOptionValueAddEntity[]
     */
    public function getCatalogProductCustomOptionValueAddArray()
    {
      return $this->catalogProductCustomOptionValueAddArray;
    }

    /**
     * @param catalogProductCustomOptionValueAddEntity[] $catalogProductCustomOptionValueAddArray
     * @return catalogProductCustomOptionValueAddArray
     */
    public function setCatalogProductCustomOptionValueAddArray(array $catalogProductCustomOptionValueAddArray)
    {
      $this->catalogProductCustomOptionValueAddArray = $catalogProductCustomOptionValueAddArray;
      return $this;
    }

}
