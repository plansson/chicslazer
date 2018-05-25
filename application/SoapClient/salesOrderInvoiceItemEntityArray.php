<?php

class salesOrderInvoiceItemEntityArray
{

    /**
     * @var salesOrderInvoiceItemEntity[] $salesOrderInvoiceItemEntityArray
     */
    protected $salesOrderInvoiceItemEntityArray = null;

    /**
     * @param salesOrderInvoiceItemEntity[] $salesOrderInvoiceItemEntityArray
     */
    public function __construct(array $salesOrderInvoiceItemEntityArray)
    {
      $this->salesOrderInvoiceItemEntityArray = $salesOrderInvoiceItemEntityArray;
    }

    /**
     * @return salesOrderInvoiceItemEntity[]
     */
    public function getSalesOrderInvoiceItemEntityArray()
    {
      return $this->salesOrderInvoiceItemEntityArray;
    }

    /**
     * @param salesOrderInvoiceItemEntity[] $salesOrderInvoiceItemEntityArray
     * @return salesOrderInvoiceItemEntityArray
     */
    public function setSalesOrderInvoiceItemEntityArray(array $salesOrderInvoiceItemEntityArray)
    {
      $this->salesOrderInvoiceItemEntityArray = $salesOrderInvoiceItemEntityArray;
      return $this;
    }

}
