<?php

class salesOrderCreditmemoCommentEntityArray
{

    /**
     * @var salesOrderCreditmemoCommentEntity[] $salesOrderCreditmemoCommentEntityArray
     */
    protected $salesOrderCreditmemoCommentEntityArray = null;

    /**
     * @param salesOrderCreditmemoCommentEntity[] $salesOrderCreditmemoCommentEntityArray
     */
    public function __construct(array $salesOrderCreditmemoCommentEntityArray)
    {
      $this->salesOrderCreditmemoCommentEntityArray = $salesOrderCreditmemoCommentEntityArray;
    }

    /**
     * @return salesOrderCreditmemoCommentEntity[]
     */
    public function getSalesOrderCreditmemoCommentEntityArray()
    {
      return $this->salesOrderCreditmemoCommentEntityArray;
    }

    /**
     * @param salesOrderCreditmemoCommentEntity[] $salesOrderCreditmemoCommentEntityArray
     * @return salesOrderCreditmemoCommentEntityArray
     */
    public function setSalesOrderCreditmemoCommentEntityArray(array $salesOrderCreditmemoCommentEntityArray)
    {
      $this->salesOrderCreditmemoCommentEntityArray = $salesOrderCreditmemoCommentEntityArray;
      return $this;
    }

}
