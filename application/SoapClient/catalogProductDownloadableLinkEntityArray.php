<?php

class catalogProductDownloadableLinkEntityArray
{

    /**
     * @var catalogProductDownloadableLinkEntity[] $catalogProductDownloadableLinkEntityArray
     */
    protected $catalogProductDownloadableLinkEntityArray = null;

    /**
     * @param catalogProductDownloadableLinkEntity[] $catalogProductDownloadableLinkEntityArray
     */
    public function __construct(array $catalogProductDownloadableLinkEntityArray)
    {
      $this->catalogProductDownloadableLinkEntityArray = $catalogProductDownloadableLinkEntityArray;
    }

    /**
     * @return catalogProductDownloadableLinkEntity[]
     */
    public function getCatalogProductDownloadableLinkEntityArray()
    {
      return $this->catalogProductDownloadableLinkEntityArray;
    }

    /**
     * @param catalogProductDownloadableLinkEntity[] $catalogProductDownloadableLinkEntityArray
     * @return catalogProductDownloadableLinkEntityArray
     */
    public function setCatalogProductDownloadableLinkEntityArray(array $catalogProductDownloadableLinkEntityArray)
    {
      $this->catalogProductDownloadableLinkEntityArray = $catalogProductDownloadableLinkEntityArray;
      return $this;
    }

}
