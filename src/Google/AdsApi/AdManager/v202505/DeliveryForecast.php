<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeliveryForecast
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\LineItemDeliveryForecast[] $lineItemDeliveryForecasts
     */
    protected $lineItemDeliveryForecasts = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\LineItemDeliveryForecast[] $lineItemDeliveryForecasts
     */
    public function __construct(array $lineItemDeliveryForecasts = null)
    {
      $this->lineItemDeliveryForecasts = $lineItemDeliveryForecasts;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\LineItemDeliveryForecast[]
     */
    public function getLineItemDeliveryForecasts()
    {
      return $this->lineItemDeliveryForecasts;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\LineItemDeliveryForecast[]|null $lineItemDeliveryForecasts
     * @return \Google\AdsApi\AdManager\v202505\DeliveryForecast
     */
    public function setLineItemDeliveryForecasts(array $lineItemDeliveryForecasts = null)
    {
      $this->lineItemDeliveryForecasts = $lineItemDeliveryForecasts;
      return $this;
    }

}
