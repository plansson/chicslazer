<?php

class catalogProductDownloadableLinkSampleEntityArray
{

    /**
     * @var catalogProductDownloadableLinkSampleEntity[] $catalogProductDownloadableLinkSampleEntityArray
     */
    protected $catalogProductDownloadableLinkSampleEntityArray = null;

    /**
     * @param catalogProductDownloadableLinkSampleEntity[] $catalogProductDownloadableLinkSampleEntityArray
     */
    public function __construct(array $catalogProductDownloadableLinkSampleEntityArray)
    {
      $this->catalogProductDownloadableLinkSampleEntityArray = $catalogProductDownloadableLinkSampleEntityArray;
    }

    /**
     * @return catalogProductDownloadableLinkSampleEntity[]
     */
    public function getCatalogProductDownloadableLinkSampleEntityArray()
    {
      return $this->catalogProductDownloadableLinkSampleEntityArray;
    }

    /**
     * @param catalogProductDownloadableLinkSampleEntity[] $catalogProductDownloadableLinkSampleEntityArray
     * @return catalogProductDownloadableLinkSampleEntityArray
     */
    public function setCatalogProductDownloadableLinkSampleEntityArray(array $catalogProductDownloadableLinkSampleEntityArray)
    {
      $this->catalogProductDownloadableLinkSampleEntityArray = $catalogProductDownloadableLinkSampleEntityArray;
      return $this;
    }

}
