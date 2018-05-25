<?php

class catalogProductCustomOptionAdditionalFieldsArray
{

    /**
     * @var catalogProductCustomOptionAdditionalFieldsEntity[] $catalogProductCustomOptionAdditionalFieldsArray
     */
    protected $catalogProductCustomOptionAdditionalFieldsArray = null;

    /**
     * @param catalogProductCustomOptionAdditionalFieldsEntity[] $catalogProductCustomOptionAdditionalFieldsArray
     */
    public function __construct(array $catalogProductCustomOptionAdditionalFieldsArray)
    {
      $this->catalogProductCustomOptionAdditionalFieldsArray = $catalogProductCustomOptionAdditionalFieldsArray;
    }

    /**
     * @return catalogProductCustomOptionAdditionalFieldsEntity[]
     */
    public function getCatalogProductCustomOptionAdditionalFieldsArray()
    {
      return $this->catalogProductCustomOptionAdditionalFieldsArray;
    }

    /**
     * @param catalogProductCustomOptionAdditionalFieldsEntity[] $catalogProductCustomOptionAdditionalFieldsArray
     * @return catalogProductCustomOptionAdditionalFieldsArray
     */
    public function setCatalogProductCustomOptionAdditionalFieldsArray(array $catalogProductCustomOptionAdditionalFieldsArray)
    {
      $this->catalogProductCustomOptionAdditionalFieldsArray = $catalogProductCustomOptionAdditionalFieldsArray;
      return $this;
    }

}
