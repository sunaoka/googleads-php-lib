<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemActivityAssociation
{

    /**
     * @var int $activityId
     */
    protected $activityId = null;

    /**
     * @var \Google\AdsApi\AdManager\v202411\Money $clickThroughConversionCost
     */
    protected $clickThroughConversionCost = null;

    /**
     * @var \Google\AdsApi\AdManager\v202411\Money $viewThroughConversionCost
     */
    protected $viewThroughConversionCost = null;

    /**
     * @param int $activityId
     * @param \Google\AdsApi\AdManager\v202411\Money $clickThroughConversionCost
     * @param \Google\AdsApi\AdManager\v202411\Money $viewThroughConversionCost
     */
    public function __construct($activityId = null, $clickThroughConversionCost = null, $viewThroughConversionCost = null)
    {
      $this->activityId = $activityId;
      $this->clickThroughConversionCost = $clickThroughConversionCost;
      $this->viewThroughConversionCost = $viewThroughConversionCost;
    }

    /**
     * @return int
     */
    public function getActivityId()
    {
      return $this->activityId;
    }

    /**
     * @param int $activityId
     * @return \Google\AdsApi\AdManager\v202411\LineItemActivityAssociation
     */
    public function setActivityId($activityId)
    {
      $this->activityId = $activityId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\Money
     */
    public function getClickThroughConversionCost()
    {
      return $this->clickThroughConversionCost;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\Money $clickThroughConversionCost
     * @return \Google\AdsApi\AdManager\v202411\LineItemActivityAssociation
     */
    public function setClickThroughConversionCost($clickThroughConversionCost)
    {
      $this->clickThroughConversionCost = $clickThroughConversionCost;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\Money
     */
    public function getViewThroughConversionCost()
    {
      return $this->viewThroughConversionCost;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\Money $viewThroughConversionCost
     * @return \Google\AdsApi\AdManager\v202411\LineItemActivityAssociation
     */
    public function setViewThroughConversionCost($viewThroughConversionCost)
    {
      $this->viewThroughConversionCost = $viewThroughConversionCost;
      return $this;
    }

}
