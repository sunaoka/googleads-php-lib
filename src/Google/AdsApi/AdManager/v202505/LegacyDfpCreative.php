<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LegacyDfpCreative extends \Google\AdsApi\AdManager\v202505\Creative
{

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
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $adBadgingEnabled = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $adBadgingEnabled);
    }

}
