<?php

class filters
{

    /**
     * @var associativeArray $filter
     */
    protected $filter = null;

    /**
     * @var complexFilterArray $complex_filter
     */
    protected $complex_filter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return associativeArray
     */
    public function getFilter()
    {
      return $this->filter;
    }

    /**
     * @param associativeArray $filter
     * @return filters
     */
    public function setFilter($filter)
    {
      $this->filter = $filter;
      return $this;
    }

    /**
     * @return complexFilterArray
     */
    public function getComplex_filter()
    {
      return $this->complex_filter;
    }

    /**
     * @param complexFilterArray $complex_filter
     * @return filters
     */
    public function setComplex_filter($complex_filter)
    {
      $this->complex_filter = $complex_filter;
      return $this;
    }

}
