<?php

namespace Amz\Sales\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A decimal number with no loss of precision. Useful when precision loss is
 * unacceptable, as with currencies. Follows RFC7159 for number representation.
 * <br>**Pattern** : `^-?(0|([1-9]\d*))(\.\d+)?([eE][+-]?\d+)?$`.
 */
class Decimal extends AbstractModel
{
    protected $isRawObject = true;
}
