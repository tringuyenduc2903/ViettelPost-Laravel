<?php

namespace TriNguyenDuc\ViettelPost;

use Exception;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use TriNguyenDuc\ViettelPost\ViettelPost\AdministrativeUnit;
use TriNguyenDuc\ViettelPost\ViettelPost\PostOfficeAndService;
use TriNguyenDuc\ViettelPost\ViettelPost\StoreAddress;
use TriNguyenDuc\ViettelPost\ViettelPost\Token;

class ViettelPost
{
    use AdministrativeUnit;
    use PostOfficeAndService;
    use StoreAddress;
    use Token;

    protected function getRequest(
        ?string $api_url,
        ?string $token
    ): PendingRequest {
        return Http::baseUrl($api_url ?: config('viettelpost-laravel.api_url'))
            ->withHeaders([
                'Token' => $token ?: config('viettelpost-laravel.token'),
            ])
            ->accept('application/json');
    }

    /**
     * @throws Exception
     */
    protected function handleFailedResponse(Response $response): void
    {
        if (! $response->json('error')) {
            return;
        }

        Log::debug(
            'ViettelPost API Error',
            $response->json()
        );

        throw new Exception($response->json('message'));
    }
}
