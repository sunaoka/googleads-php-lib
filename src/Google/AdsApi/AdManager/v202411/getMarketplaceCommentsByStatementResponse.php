<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getMarketplaceCommentsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202411\MarketplaceCommentPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202411\MarketplaceCommentPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\MarketplaceCommentPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\MarketplaceCommentPage $rval
     * @return \Google\AdsApi\AdManager\v202411\getMarketplaceCommentsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
