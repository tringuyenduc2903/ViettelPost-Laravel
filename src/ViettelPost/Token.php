<?php

namespace TriNguyenDuc\ViettelPost\ViettelPost;

use Exception;
use Illuminate\Http\Client\ConnectionException;

trait Token
{
    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function signInByPartnerAccount(
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->post('v2/user/Login', [
                'USERNAME' => config('viettelpost-laravel.partner.user_name'),
                'PASSWORD' => config('viettelpost-laravel.partner.password'),
            ]);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function registerCustomerAccounts(
        array $data,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->post('v2/user/ownerRegister', $data);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }
}
