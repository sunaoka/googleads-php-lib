<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoRedirectAsset extends \Google\AdsApi\AdManager\v202411\RedirectAsset
{

    /**
     * @var \Google\AdsApi\AdManager\v202411\VideoMetadata $metadata
     */
    protected $metadata = null;

    /**
     * @param string $redirectUrl
     * @param \Google\AdsApi\AdManager\v202411\VideoMetadata $metadata
     */
    public function __construct($redirectUrl = null, $metadata = null)
    {
      parent::__construct($redirectUrl);
      $this->metadata = $metadata;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\VideoMetadata
     */
    public function getMetadata()
    {
      return $this->metadata;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\VideoMetadata $metadata
     * @return \Google\AdsApi\AdManager\v202411\VideoRedirectAsset
     */
    public function setMetadata($metadata)
    {
      $this->metadata = $metadata;
      return $this;
    }

}
