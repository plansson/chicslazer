<?php

class catalogProductDownloadableLinkFileInfoEntityArray
{

    /**
     * @var catalogProductDownloadableLinkFileInfoEntity[] $catalogProductDownloadableLinkFileInfoEntityArray
     */
    protected $catalogProductDownloadableLinkFileInfoEntityArray = null;

    /**
     * @param catalogProductDownloadableLinkFileInfoEntity[] $catalogProductDownloadableLinkFileInfoEntityArray
     */
    public function __construct(array $catalogProductDownloadableLinkFileInfoEntityArray)
    {
      $this->catalogProductDownloadableLinkFileInfoEntityArray = $catalogProductDownloadableLinkFileInfoEntityArray;
    }

    /**
     * @return catalogProductDownloadableLinkFileInfoEntity[]
     */
    public function getCatalogProductDownloadableLinkFileInfoEntityArray()
    {
      return $this->catalogProductDownloadableLinkFileInfoEntityArray;
    }

    /**
     * @param catalogProductDownloadableLinkFileInfoEntity[] $catalogProductDownloadableLinkFileInfoEntityArray
     * @return catalogProductDownloadableLinkFileInfoEntityArray
     */
    public function setCatalogProductDownloadableLinkFileInfoEntityArray(array $catalogProductDownloadableLinkFileInfoEntityArray)
    {
      $this->catalogProductDownloadableLinkFileInfoEntityArray = $catalogProductDownloadableLinkFileInfoEntityArray;
      return $this;
    }

}
