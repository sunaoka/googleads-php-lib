<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class User extends \Google\AdsApi\AdManager\v202505\UserRecord
{

    /**
     * @var boolean $isActive
     */
    protected $isActive = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var boolean $isServiceAccount
     */
    protected $isServiceAccount = null;

    /**
     * @var string $ordersUiLocalTimeZoneId
     */
    protected $ordersUiLocalTimeZoneId = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $email
     * @param int $roleId
     * @param string $roleName
     * @param boolean $isActive
     * @param string $externalId
     * @param boolean $isServiceAccount
     * @param string $ordersUiLocalTimeZoneId
     */
    public function __construct($id = null, $name = null, $email = null, $roleId = null, $roleName = null, $isActive = null, $externalId = null, $isServiceAccount = null, $ordersUiLocalTimeZoneId = null)
    {
      parent::__construct($id, $name, $email, $roleId, $roleName);
      $this->isActive = $isActive;
      $this->externalId = $externalId;
      $this->isServiceAccount = $isServiceAccount;
      $this->ordersUiLocalTimeZoneId = $ordersUiLocalTimeZoneId;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->isActive;
    }

    /**
     * @param boolean $isActive
     * @return \Google\AdsApi\AdManager\v202505\User
     */
    public function setIsActive($isActive)
    {
      $this->isActive = $isActive;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Google\AdsApi\AdManager\v202505\User
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsServiceAccount()
    {
      return $this->isServiceAccount;
    }

    /**
     * @param boolean $isServiceAccount
     * @return \Google\AdsApi\AdManager\v202505\User
     */
    public function setIsServiceAccount($isServiceAccount)
    {
      $this->isServiceAccount = $isServiceAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrdersUiLocalTimeZoneId()
    {
      return $this->ordersUiLocalTimeZoneId;
    }

    /**
     * @param string $ordersUiLocalTimeZoneId
     * @return \Google\AdsApi\AdManager\v202505\User
     */
    public function setOrdersUiLocalTimeZoneId($ordersUiLocalTimeZoneId)
    {
      $this->ordersUiLocalTimeZoneId = $ordersUiLocalTimeZoneId;
      return $this;
    }

}
