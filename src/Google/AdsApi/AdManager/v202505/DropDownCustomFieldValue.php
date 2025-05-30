<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DropDownCustomFieldValue extends \Google\AdsApi\AdManager\v202505\BaseCustomFieldValue
{

    /**
     * @var int $customFieldOptionId
     */
    protected $customFieldOptionId = null;

    /**
     * @param int $customFieldId
     * @param int $customFieldOptionId
     */
    public function __construct($customFieldId = null, $customFieldOptionId = null)
    {
      parent::__construct($customFieldId);
      $this->customFieldOptionId = $customFieldOptionId;
    }

    /**
     * @return int
     */
    public function getCustomFieldOptionId()
    {
      return $this->customFieldOptionId;
    }

    /**
     * @param int $customFieldOptionId
     * @return \Google\AdsApi\AdManager\v202505\DropDownCustomFieldValue
     */
    public function setCustomFieldOptionId($customFieldOptionId)
    {
      $this->customFieldOptionId = (!is_null($customFieldOptionId) && PHP_INT_SIZE === 4)
          ? floatval($customFieldOptionId) : $customFieldOptionId;
      return $this;
    }

}
