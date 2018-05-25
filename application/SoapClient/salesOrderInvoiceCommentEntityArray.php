<?php

class salesOrderInvoiceCommentEntityArray
{

    /**
     * @var salesOrderInvoiceCommentEntity[] $salesOrderInvoiceCommentEntityArray
     */
    protected $salesOrderInvoiceCommentEntityArray = null;

    /**
     * @param salesOrderInvoiceCommentEntity[] $salesOrderInvoiceCommentEntityArray
     */
    public function __construct(array $salesOrderInvoiceCommentEntityArray)
    {
      $this->salesOrderInvoiceCommentEntityArray = $salesOrderInvoiceCommentEntityArray;
    }

    /**
     * @return salesOrderInvoiceCommentEntity[]
     */
    public function getSalesOrderInvoiceCommentEntityArray()
    {
      return $this->salesOrderInvoiceCommentEntityArray;
    }

    /**
     * @param salesOrderInvoiceCommentEntity[] $salesOrderInvoiceCommentEntityArray
     * @return salesOrderInvoiceCommentEntityArray
     */
    public function setSalesOrderInvoiceCommentEntityArray(array $salesOrderInvoiceCommentEntityArray)
    {
      $this->salesOrderInvoiceCommentEntityArray = $salesOrderInvoiceCommentEntityArray;
      return $this;
    }

}
