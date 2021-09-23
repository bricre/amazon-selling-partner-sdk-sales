<?php

namespace Amz\Sales\Api;

use Amz\Sales\Model\GetOrderMetricsResponse as GetOrderMetricsResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Sales extends AbstractAPI
{
    /**
     * Returns aggregated order metrics for given interval, broken down by granularity,
     * for given buyer type.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | .5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'marketplaceIds'		A list of marketplace identifiers. Example: ATVPDKIKX0DER
     *                       indicates the US marketplace.
     *                       'interval'		A time interval used for selecting order metrics. This takes the
     *                       form of two dates separated by two hyphens (first date is inclusive; second date
     *                       is exclusive). Dates are in ISO8601 format and must represent absolute time
     *                       (either Z notation or offset notation). Example:
     *                       2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for
     *                       Sept 1st, 2nd and 3rd in the -07:00 zone.
     *                       'granularityTimeZone'		An IANA-compatible time zone for determining the day
     *                       boundary. Required when specifying a granularity value greater than Hour. The
     *                       granularityTimeZone value must align with the offset of the specified interval
     *                       value. For example, if the interval value uses Z notation, then
     *                       granularityTimeZone must be UTC. If the interval value uses an offset, then
     *                       granularityTimeZone must be an IANA-compatible time zone that matches the
     *                       offset. Example: US/Pacific to compute day boundaries, accounting for daylight
     *                       time savings, for US/Pacific zone.
     *                       'fulfillmentNetwork'		Filters the results by the fulfillment network that you
     *                       specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network).
     *                       Do not include this filter if you want the response to include order metrics for
     *                       all fulfillment networks. Example: AFN, if you want the response to include
     *                       order metrics for only Amazon fulfillment network.
     *                       'asin'		Filters the results by the ASIN that you specify. Specifying both ASIN
     *                       and SKU returns an error. Do not include this filter if you want the response to
     *                       include order metrics for all ASINs. Example: B0792R1RSN, if you want the
     *                       response to include order metrics for only ASIN B0792R1RSN.
     *                       'sku'		Filters the results by the SKU that you specify. Specifying both ASIN and
     *                       SKU returns an error. Do not include this filter if you want the response to
     *                       include order metrics for all SKUs. Example: TestSKU, if you want the response
     *                       to include order metrics for only SKU TestSKU.
     *
     * @return GetOrderMetricsResponse
     */
    public function getOrderMetrics(array $queries = []): GetOrderMetricsResponse
    {
        return $this->client->request('getOrderMetrics', 'GET', 'sales/v1/orderMetrics',
            [
                'query' => $queries,
            ]
        );
    }
}
