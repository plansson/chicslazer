<?php

class magentoInfoEntity
{

    /**
     * @var string $magento_version
     */
    protected $magento_version = null;

    /**
     * @var string $magento_edition
     */
    protected $magento_edition = null;

    /**
     * @param string $magento_version
     * @param string $magento_edition
     */
    public function __construct($magento_version, $magento_edition)
    {
      $this->magento_version = $magento_version;
      $this->magento_edition = $magento_edition;
    }

    /**
     * @return string
     */
    public function getMagento_version()
    {
      return $this->magento_version;
    }

    /**
     * @param string $magento_version
     * @return magentoInfoEntity
     */
    public function setMagento_version($magento_version)
    {
      $this->magento_version = $magento_version;
      return $this;
    }

    /**
     * @return string
     */
    public function getMagento_edition()
    {
      return $this->magento_edition;
    }

    /**
     * @param string $magento_edition
     * @return magentoInfoEntity
     */
    public function setMagento_edition($magento_edition)
    {
      $this->magento_edition = $magento_edition;
      return $this;
    }

}
