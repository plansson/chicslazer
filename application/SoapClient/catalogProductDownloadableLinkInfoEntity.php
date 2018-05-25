<?php

class catalogProductDownloadableLinkInfoEntity
{

    /**
     * @var catalogProductDownloadableLinkEntityArray $links
     */
    protected $links = null;

    /**
     * @var catalogProductDownloadableLinkSampleEntityArray $samples
     */
    protected $samples = null;

    /**
     * @param catalogProductDownloadableLinkEntityArray $links
     * @param catalogProductDownloadableLinkSampleEntityArray $samples
     */
    public function __construct($links, $samples)
    {
      $this->links = $links;
      $this->samples = $samples;
    }

    /**
     * @return catalogProductDownloadableLinkEntityArray
     */
    public function getLinks()
    {
      return $this->links;
    }

    /**
     * @param catalogProductDownloadableLinkEntityArray $links
     * @return catalogProductDownloadableLinkInfoEntity
     */
    public function setLinks($links)
    {
      $this->links = $links;
      return $this;
    }

    /**
     * @return catalogProductDownloadableLinkSampleEntityArray
     */
    public function getSamples()
    {
      return $this->samples;
    }

    /**
     * @param catalogProductDownloadableLinkSampleEntityArray $samples
     * @return catalogProductDownloadableLinkInfoEntity
     */
    public function setSamples($samples)
    {
      $this->samples = $samples;
      return $this;
    }

}
