<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TextValue extends \Google\AdsApi\AdManager\v202502\Value
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Google\AdsApi\AdManager\v202502\TextValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
