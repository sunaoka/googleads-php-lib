<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCustomFieldsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\CustomFieldPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\CustomFieldPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\CustomFieldPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\CustomFieldPage $rval
     * @return \Google\AdsApi\AdManager\v202505\getCustomFieldsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
