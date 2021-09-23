<?php

namespace Amz\Sales\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The currency type and the amount.
 */
class Money extends AbstractModel
{
    /**
     * Three-digit currency code. In ISO 4217 format.
     *
     * @var string
     */
    public $currencyCode = null;

    /**
     * The currency amount.
     *
     * @var \Amz\Sales\Model\Decimal
     */
    public $amount = null;
}
