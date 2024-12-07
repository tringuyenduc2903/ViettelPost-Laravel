<?php

namespace TriNguyenDuc\ViettelPost\Enums;

use Rexlabs\Enum\Enum;

/**
 * The Order Type enum.
 *
 * @method static self UNCOLLECT_MONEY()
 * @method static self COLLECT_EXPRESS_FEE_AND_PRICE_OF_GOODS()
 * @method static self COLLECT_PRICE_OF_GOODS()
 * @method static self COLLECT_EXPRESS_FEE()
 */
class OrderType extends Enum
{
    const UNCOLLECT_MONEY = 1;

    const COLLECT_EXPRESS_FEE_AND_PRICE_OF_GOODS = 2;

    const COLLECT_PRICE_OF_GOODS = 3;

    const COLLECT_EXPRESS_FEE = 4;
}
