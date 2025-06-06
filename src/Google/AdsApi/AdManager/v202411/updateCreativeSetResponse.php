<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateCreativeSetResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202411\CreativeSet $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202411\CreativeSet $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\CreativeSet
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\CreativeSet $rval
     * @return \Google\AdsApi\AdManager\v202411\updateCreativeSetResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
