<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getSuggestedAdUnitsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202411\SuggestedAdUnitPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202411\SuggestedAdUnitPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\SuggestedAdUnitPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\SuggestedAdUnitPage $rval
     * @return \Google\AdsApi\AdManager\v202411\getSuggestedAdUnitsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
