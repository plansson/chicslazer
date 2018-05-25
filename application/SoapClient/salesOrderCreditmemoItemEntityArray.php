<?php

class salesOrderCreditmemoItemEntityArray
{

    /**
     * @var salesOrderCreditmemoItemEntity[] $salesOrderCreditmemoItemEntityArray
     */
    protected $salesOrderCreditmemoItemEntityArray = null;

    /**
     * @param salesOrderCreditmemoItemEntity[] $salesOrderCreditmemoItemEntityArray
     */
    public function __construct(array $salesOrderCreditmemoItemEntityArray)
    {
      $this->salesOrderCreditmemoItemEntityArray = $salesOrderCreditmemoItemEntityArray;
    }

    /**
     * @return salesOrderCreditmemoItemEntity[]
     */
    public function getSalesOrderCreditmemoItemEntityArray()
    {
      return $this->salesOrderCreditmemoItemEntityArray;
    }

    /**
     * @param salesOrderCreditmemoItemEntity[] $salesOrderCreditmemoItemEntityArray
     * @return salesOrderCreditmemoItemEntityArray
     */
    public function setSalesOrderCreditmemoItemEntityArray(array $salesOrderCreditmemoItemEntityArray)
    {
      $this->salesOrderCreditmemoItemEntityArray = $salesOrderCreditmemoItemEntityArray;
      return $this;
    }

}
