<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ImageCreative extends \Google\AdsApi\AdManager\v202505\BaseImageCreative
{

    /**
     * @var string $altText
     */
    protected $altText = null;

    /**
     * @var string[] $thirdPartyImpressionTrackingUrls
     */
    protected $thirdPartyImpressionTrackingUrls = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\CreativeAsset[] $secondaryImageAssets
     */
    protected $secondaryImageAssets = null;

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
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param boolean $overrideSize
     * @param \Google\AdsApi\AdManager\v202505\CreativeAsset $primaryImageAsset
     * @param string $altText
     * @param string[] $thirdPartyImpressionTrackingUrls
     * @param \Google\AdsApi\AdManager\v202505\CreativeAsset[] $secondaryImageAssets
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $adBadgingEnabled = null, $destinationUrl = null, $destinationUrlType = null, $overrideSize = null, $primaryImageAsset = null, $altText = null, array $thirdPartyImpressionTrackingUrls = null, array $secondaryImageAssets = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $adBadgingEnabled, $destinationUrl, $destinationUrlType, $overrideSize, $primaryImageAsset);
      $this->altText = $altText;
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
      $this->secondaryImageAssets = $secondaryImageAssets;
    }

    /**
     * @return string
     */
    public function getAltText()
    {
      return $this->altText;
    }

    /**
     * @param string $altText
     * @return \Google\AdsApi\AdManager\v202505\ImageCreative
     */
    public function setAltText($altText)
    {
      $this->altText = $altText;
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
     * @return \Google\AdsApi\AdManager\v202505\ImageCreative
     */
    public function setThirdPartyImpressionTrackingUrls(array $thirdPartyImpressionTrackingUrls = null)
    {
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\CreativeAsset[]
     */
    public function getSecondaryImageAssets()
    {
      return $this->secondaryImageAssets;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\CreativeAsset[]|null $secondaryImageAssets
     * @return \Google\AdsApi\AdManager\v202505\ImageCreative
     */
    public function setSecondaryImageAssets(array $secondaryImageAssets = null)
    {
      $this->secondaryImageAssets = $secondaryImageAssets;
      return $this;
    }

}
