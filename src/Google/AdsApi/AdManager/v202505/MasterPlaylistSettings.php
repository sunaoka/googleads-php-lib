<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MasterPlaylistSettings
{

    /**
     * @var string $refreshType
     */
    protected $refreshType = null;

    /**
     * @param string $refreshType
     */
    public function __construct($refreshType = null)
    {
      $this->refreshType = $refreshType;
    }

    /**
     * @return string
     */
    public function getRefreshType()
    {
      return $this->refreshType;
    }

    /**
     * @param string $refreshType
     * @return \Google\AdsApi\AdManager\v202505\MasterPlaylistSettings
     */
    public function setRefreshType($refreshType)
    {
      $this->refreshType = $refreshType;
      return $this;
    }

}
