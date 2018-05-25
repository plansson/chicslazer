<?php

class catalogProductAdditionalAttributesEntity
{

    /**
     * @var associativeMultiArray $multi_data
     */
    protected $multi_data = null;

    /**
     * @var associativeArray $single_data
     */
    protected $single_data = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return associativeMultiArray
     */
    public function getMulti_data()
    {
      return $this->multi_data;
    }

    /**
     * @param associativeMultiArray $multi_data
     * @return catalogProductAdditionalAttributesEntity
     */
    public function setMulti_data($multi_data)
    {
      $this->multi_data = $multi_data;
      return $this;
    }

    /**
     * @return associativeArray
     */
    public function getSingle_data()
    {
      return $this->single_data;
    }

    /**
     * @param associativeArray $single_data
     * @return catalogProductAdditionalAttributesEntity
     */
    public function setSingle_data($single_data)
    {
      $this->single_data = $single_data;
      return $this;
    }

}
