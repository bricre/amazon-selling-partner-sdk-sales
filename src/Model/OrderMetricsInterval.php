<?php

namespace Amz\Sales\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Contains order metrics.
 */
class OrderMetricsInterval extends AbstractModel
{
    /**
     * The interval of time based on requested granularity (ex. Hour, Day, etc.) If
     * this is the first or the last interval from the list, it might contain
     * incomplete data if the requested interval doesn't align with the requested
     * granularity (ex. request interval 2018-09-01T02:00:00Z--2018-09-04T19:00:00Z and
     * granularity day will result in Sept 1st UTC day and Sept 4th UTC days having
     * partial data).
     *
     * @var string
     */
    public $interval = null;

    /**
     * The number of units in orders based on the specified filters.
     *
     * @var int
     */
    public $unitCount = null;

    /**
     * The number of order items based on the specified filters.
     *
     * @var int
     */
    public $orderItemCount = null;

    /**
     * The number of orders based on the specified filters.
     *
     * @var int
     */
    public $orderCount = null;

    /**
     * The average price for an item based on the specified filters. Formula is
     * totalSales/unitCount.
     *
     * @var \Amz\Sales\Model\Money
     */
    public $averageUnitPrice = null;

    /**
     * The total ordered product sales for all orders based on the specified filters.
     *
     * @var \Amz\Sales\Model\Money
     */
    public $totalSales = null;
}
