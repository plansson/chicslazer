<?php

class salesOrderCreditmemoEntityArray
{

    /**
     * @var salesOrderCreditmemoEntity[] $salesOrderCreditmemoEntityArray
     */
    protected $salesOrderCreditmemoEntityArray = null;

    /**
     * @param salesOrderCreditmemoEntity[] $salesOrderCreditmemoEntityArray
     */
    public function __construct(array $salesOrderCreditmemoEntityArray)
    {
      $this->salesOrderCreditmemoEntityArray = $salesOrderCreditmemoEntityArray;
    }

    /**
     * @return salesOrderCreditmemoEntity[]
     */
    public function getSalesOrderCreditmemoEntityArray()
    {
      return $this->salesOrderCreditmemoEntityArray;
    }

    /**
     * @param salesOrderCreditmemoEntity[] $salesOrderCreditmemoEntityArray
     * @return salesOrderCreditmemoEntityArray
     */
    public function setSalesOrderCreditmemoEntityArray(array $salesOrderCreditmemoEntityArray)
    {
      $this->salesOrderCreditmemoEntityArray = $salesOrderCreditmemoEntityArray;
      return $this;
    }

}
