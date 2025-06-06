<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ThirdPartyCreative extends \Google\AdsApi\AdManager\v202505\Creative
{

    /**
     * @var string $snippet
     */
    protected $snippet = null;

    /**
     * @var string $expandedSnippet
     */
    protected $expandedSnippet = null;

    /**
     * @var string $sslScanResult
     */
    protected $sslScanResult = null;

    /**
     * @var string $sslManualOverride
     */
    protected $sslManualOverride = null;

    /**
     * @var string $lockedOrientation
     */
    protected $lockedOrientation = null;

    /**
     * @var boolean $isSafeFrameCompatible
     */
    protected $isSafeFrameCompatible = null;

    /**
     * @var string[] $thirdPartyImpressionTrackingUrls
     */
    protected $thirdPartyImpressionTrackingUrls = null;

    /**
     * @var string $ampRedirectUrl
     */
    protected $ampRedirectUrl = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202505\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202505\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202505\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202505\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202505\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param boolean $adBadgingEnabled
     * @param string $snippet
     * @param string $expandedSnippet
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param string $lockedOrientation
     * @param boolean $isSafeFrameCompatible
     * @param string[] $thirdPartyImpressionTrackingUrls
     * @param string $ampRedirectUrl
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $adBadgingEnabled = null, $snippet = null, $expandedSnippet = null, $sslScanResult = null, $sslManualOverride = null, $lockedOrientation = null, $isSafeFrameCompatible = null, array $thirdPartyImpressionTrackingUrls = null, $ampRedirectUrl = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $adBadgingEnabled);
      $this->snippet = $snippet;
      $this->expandedSnippet = $expandedSnippet;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
      $this->lockedOrientation = $lockedOrientation;
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
      $this->ampRedirectUrl = $ampRedirectUrl;
    }

    /**
     * @return string
     */
    public function getSnippet()
    {
      return $this->snippet;
    }

    /**
     * @param string $snippet
     * @return \Google\AdsApi\AdManager\v202505\ThirdPartyCreative
     */
    public function setSnippet($snippet)
    {
      $this->snippet = $snippet;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpandedSnippet()
    {
      return $this->expandedSnippet;
    }

    /**
     * @param string $expandedSnippet
     * @return \Google\AdsApi\AdManager\v202505\ThirdPartyCreative
     */
    public function setExpandedSnippet($expandedSnippet)
    {
      $this->expandedSnippet = $expandedSnippet;
      return $this;
    }

    /**
     * @return string
     */
    public function getSslScanResult()
    {
      return $this->sslScanResult;
    }

    /**
     * @param string $sslScanResult
     * @return \Google\AdsApi\AdManager\v202505\ThirdPartyCreative
     */
    public function setSslScanResult($sslScanResult)
    {
      $this->sslScanResult = $sslScanResult;
      return $this;
    }

    /**
     * @return string
     */
    public function getSslManualOverride()
    {
      return $this->sslManualOverride;
    }

    /**
     * @param string $sslManualOverride
     * @return \Google\AdsApi\AdManager\v202505\ThirdPartyCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
      return $this;
    }

    /**
     * @return string
     */
    public function getLockedOrientation()
    {
      return $this->lockedOrientation;
    }

    /**
     * @param string $lockedOrientation
     * @return \Google\AdsApi\AdManager\v202505\ThirdPartyCreative
     */
    public function setLockedOrientation($lockedOrientation)
    {
      $this->lockedOrientation = $lockedOrientation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSafeFrameCompatible()
    {
      return $this->isSafeFrameCompatible;
    }

    /**
     * @param boolean $isSafeFrameCompatible
     * @return \Google\AdsApi\AdManager\v202505\ThirdPartyCreative
     */
    public function setIsSafeFrameCompatible($isSafeFrameCompatible)
    {
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getThirdPartyImpressionTrackingUrls()
    {
      return $this->thirdPartyImpressionTrackingUrls;
    }

    /**
     * @param string[]|null $thirdPartyImpressionTrackingUrls
     * @return \Google\AdsApi\AdManager\v202505\ThirdPartyCreative
     */
    public function setThirdPartyImpressionTrackingUrls(array $thirdPartyImpressionTrackingUrls = null)
    {
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmpRedirectUrl()
    {
      return $this->ampRedirectUrl;
    }

    /**
     * @param string $ampRedirectUrl
     * @return \Google\AdsApi\AdManager\v202505\ThirdPartyCreative
     */
    public function setAmpRedirectUrl($ampRedirectUrl)
    {
      $this->ampRedirectUrl = $ampRedirectUrl;
      return $this;
    }

}
