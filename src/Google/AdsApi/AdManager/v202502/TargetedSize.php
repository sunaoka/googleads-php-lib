<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetedSize
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\Size $size
     */
    protected $size = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\Size $size
     */
    public function __construct($size = null)
    {
      $this->size = $size;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\Size
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\Size $size
     * @return \Google\AdsApi\AdManager\v202502\TargetedSize
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

}
