<?php

namespace Amz\Sales\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getOrderMetrics operation.
 */
class GetOrderMetricsResponse extends AbstractModel
{
    /**
     * The payload for the getOrderMetrics operation.
     *
     * @var \Amz\Sales\Model\OrderMetricsList
     */
    public $payload = null;

    /**
     * Encountered errors for the getOrderMetrics operation.
     *
     * @var \Amz\Sales\Model\ErrorList
     */
    public $errors = null;
}
