<?php

namespace TriNguyenDuc\ViettelPost\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TriNguyenDuc\ViettelPost\ViettelPost
 */
class ViettelPost extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \TriNguyenDuc\ViettelPost\ViettelPost::class;
    }
}
