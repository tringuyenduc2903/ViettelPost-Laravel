<?php

namespace TriNguyenDuc\ViettelPost\Enums;

use Rexlabs\Enum\Enum;

/**
 * The National Type enum.
 *
 * @method static self INLAND()
 * @method static self INTERNATIONAL()
 */
class NationalType extends Enum
{
    const INLAND = 0;

    const INTERNATIONAL = 1;
}
