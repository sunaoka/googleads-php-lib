<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdSenseCreative extends \Google\AdsApi\AdManager\v202502\HasHtmlSnippetDynamicAllocationCreative
{

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202502\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202502\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202502\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202502\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202502\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param boolean $adBadgingEnabled
     * @param string $codeSnippet
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $adBadgingEnabled = null, $codeSnippet = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $adBadgingEnabled, $codeSnippet);
    }

}
