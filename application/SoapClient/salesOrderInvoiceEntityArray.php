<?php

class salesOrderInvoiceEntityArray
{

    /**
     * @var salesOrderInvoiceEntity[] $salesOrderInvoiceEntityArray
     */
    protected $salesOrderInvoiceEntityArray = null;

    /**
     * @param salesOrderInvoiceEntity[] $salesOrderInvoiceEntityArray
     */
    public function __construct(array $salesOrderInvoiceEntityArray)
    {
      $this->salesOrderInvoiceEntityArray = $salesOrderInvoiceEntityArray;
    }

    /**
     * @return salesOrderInvoiceEntity[]
     */
    public function getSalesOrderInvoiceEntityArray()
    {
      return $this->salesOrderInvoiceEntityArray;
    }

    /**
     * @param salesOrderInvoiceEntity[] $salesOrderInvoiceEntityArray
     * @return salesOrderInvoiceEntityArray
     */
    public function setSalesOrderInvoiceEntityArray(array $salesOrderInvoiceEntityArray)
    {
      $this->salesOrderInvoiceEntityArray = $salesOrderInvoiceEntityArray;
      return $this;
    }

}
