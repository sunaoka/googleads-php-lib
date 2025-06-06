<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamConditioning
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\DashBridge $dashBridge
     */
    protected $dashBridge = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\DashBridge $dashBridge
     */
    public function __construct($dashBridge = null)
    {
      $this->dashBridge = $dashBridge;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\DashBridge
     */
    public function getDashBridge()
    {
      return $this->dashBridge;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\DashBridge $dashBridge
     * @return \Google\AdsApi\AdManager\v202505\LiveStreamConditioning
     */
    public function setDashBridge($dashBridge)
    {
      $this->dashBridge = $dashBridge;
      return $this;
    }

}
