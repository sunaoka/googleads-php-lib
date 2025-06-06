<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AvailabilityForecast
{

    /**
     * @var int $lineItemId
     */
    protected $lineItemId = null;

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var string $unitType
     */
    protected $unitType = null;

    /**
     * @var int $availableUnits
     */
    protected $availableUnits = null;

    /**
     * @var int $deliveredUnits
     */
    protected $deliveredUnits = null;

    /**
     * @var int $matchedUnits
     */
    protected $matchedUnits = null;

    /**
     * @var int $possibleUnits
     */
    protected $possibleUnits = null;

    /**
     * @var int $reservedUnits
     */
    protected $reservedUnits = null;

    /**
     * @var \Google\AdsApi\AdManager\v202502\ForecastBreakdown[] $breakdowns
     */
    protected $breakdowns = null;

    /**
     * @var \Google\AdsApi\AdManager\v202502\TargetingCriteriaBreakdown[] $targetingCriteriaBreakdowns
     */
    protected $targetingCriteriaBreakdowns = null;

    /**
     * @var \Google\AdsApi\AdManager\v202502\ContendingLineItem[] $contendingLineItems
     */
    protected $contendingLineItems = null;

    /**
     * @var \Google\AdsApi\AdManager\v202502\AlternativeUnitTypeForecast[] $alternativeUnitTypeForecasts
     */
    protected $alternativeUnitTypeForecasts = null;

    /**
     * @param int $lineItemId
     * @param int $orderId
     * @param string $unitType
     * @param int $availableUnits
     * @param int $deliveredUnits
     * @param int $matchedUnits
     * @param int $possibleUnits
     * @param int $reservedUnits
     * @param \Google\AdsApi\AdManager\v202502\ForecastBreakdown[] $breakdowns
     * @param \Google\AdsApi\AdManager\v202502\TargetingCriteriaBreakdown[] $targetingCriteriaBreakdowns
     * @param \Google\AdsApi\AdManager\v202502\ContendingLineItem[] $contendingLineItems
     * @param \Google\AdsApi\AdManager\v202502\AlternativeUnitTypeForecast[] $alternativeUnitTypeForecasts
     */
    public function __construct($lineItemId = null, $orderId = null, $unitType = null, $availableUnits = null, $deliveredUnits = null, $matchedUnits = null, $possibleUnits = null, $reservedUnits = null, array $breakdowns = null, array $targetingCriteriaBreakdowns = null, array $contendingLineItems = null, array $alternativeUnitTypeForecasts = null)
    {
      $this->lineItemId = $lineItemId;
      $this->orderId = $orderId;
      $this->unitType = $unitType;
      $this->availableUnits = $availableUnits;
      $this->deliveredUnits = $deliveredUnits;
      $this->matchedUnits = $matchedUnits;
      $this->possibleUnits = $possibleUnits;
      $this->reservedUnits = $reservedUnits;
      $this->breakdowns = $breakdowns;
      $this->targetingCriteriaBreakdowns = $targetingCriteriaBreakdowns;
      $this->contendingLineItems = $contendingLineItems;
      $this->alternativeUnitTypeForecasts = $alternativeUnitTypeForecasts;
    }

    /**
     * @return int
     */
    public function getLineItemId()
    {
      return $this->lineItemId;
    }

    /**
     * @param int $lineItemId
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setLineItemId($lineItemId)
    {
      $this->lineItemId = (!is_null($lineItemId) && PHP_INT_SIZE === 4)
          ? floatval($lineItemId) : $lineItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setOrderId($orderId)
    {
      $this->orderId = (!is_null($orderId) && PHP_INT_SIZE === 4)
          ? floatval($orderId) : $orderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitType()
    {
      return $this->unitType;
    }

    /**
     * @param string $unitType
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setUnitType($unitType)
    {
      $this->unitType = $unitType;
      return $this;
    }

    /**
     * @return int
     */
    public function getAvailableUnits()
    {
      return $this->availableUnits;
    }

    /**
     * @param int $availableUnits
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setAvailableUnits($availableUnits)
    {
      $this->availableUnits = (!is_null($availableUnits) && PHP_INT_SIZE === 4)
          ? floatval($availableUnits) : $availableUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveredUnits()
    {
      return $this->deliveredUnits;
    }

    /**
     * @param int $deliveredUnits
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setDeliveredUnits($deliveredUnits)
    {
      $this->deliveredUnits = (!is_null($deliveredUnits) && PHP_INT_SIZE === 4)
          ? floatval($deliveredUnits) : $deliveredUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getMatchedUnits()
    {
      return $this->matchedUnits;
    }

    /**
     * @param int $matchedUnits
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setMatchedUnits($matchedUnits)
    {
      $this->matchedUnits = (!is_null($matchedUnits) && PHP_INT_SIZE === 4)
          ? floatval($matchedUnits) : $matchedUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getPossibleUnits()
    {
      return $this->possibleUnits;
    }

    /**
     * @param int $possibleUnits
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setPossibleUnits($possibleUnits)
    {
      $this->possibleUnits = (!is_null($possibleUnits) && PHP_INT_SIZE === 4)
          ? floatval($possibleUnits) : $possibleUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getReservedUnits()
    {
      return $this->reservedUnits;
    }

    /**
     * @param int $reservedUnits
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setReservedUnits($reservedUnits)
    {
      $this->reservedUnits = (!is_null($reservedUnits) && PHP_INT_SIZE === 4)
          ? floatval($reservedUnits) : $reservedUnits;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\ForecastBreakdown[]
     */
    public function getBreakdowns()
    {
      return $this->breakdowns;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\ForecastBreakdown[]|null $breakdowns
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setBreakdowns(array $breakdowns = null)
    {
      $this->breakdowns = $breakdowns;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\TargetingCriteriaBreakdown[]
     */
    public function getTargetingCriteriaBreakdowns()
    {
      return $this->targetingCriteriaBreakdowns;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\TargetingCriteriaBreakdown[]|null $targetingCriteriaBreakdowns
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setTargetingCriteriaBreakdowns(array $targetingCriteriaBreakdowns = null)
    {
      $this->targetingCriteriaBreakdowns = $targetingCriteriaBreakdowns;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\ContendingLineItem[]
     */
    public function getContendingLineItems()
    {
      return $this->contendingLineItems;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\ContendingLineItem[]|null $contendingLineItems
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setContendingLineItems(array $contendingLineItems = null)
    {
      $this->contendingLineItems = $contendingLineItems;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\AlternativeUnitTypeForecast[]
     */
    public function getAlternativeUnitTypeForecasts()
    {
      return $this->alternativeUnitTypeForecasts;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\AlternativeUnitTypeForecast[]|null $alternativeUnitTypeForecasts
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     */
    public function setAlternativeUnitTypeForecasts(array $alternativeUnitTypeForecasts = null)
    {
      $this->alternativeUnitTypeForecasts = $alternativeUnitTypeForecasts;
      return $this;
    }

}
