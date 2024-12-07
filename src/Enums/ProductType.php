<?php

namespace TriNguyenDuc\ViettelPost\Enums;

use Rexlabs\Enum\Enum;

/**
 * The Product Type enum.
 *
 * @method static self ENVELOPE()
 * @method static self GOODS()
 */
class ProductType extends Enum
{
    const ENVELOPE = 'TH';

    const GOODS = 'HH';
}
