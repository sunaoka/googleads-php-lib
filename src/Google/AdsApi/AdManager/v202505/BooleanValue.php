<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BooleanValue extends \Google\AdsApi\AdManager\v202505\Value
{

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param boolean $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Google\AdsApi\AdManager\v202505\BooleanValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
