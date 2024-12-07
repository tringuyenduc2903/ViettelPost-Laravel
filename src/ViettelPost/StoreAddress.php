<?php

namespace TriNguyenDuc\ViettelPost\ViettelPost;

use Exception;
use Illuminate\Http\Client\ConnectionException;

trait StoreAddress
{
    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function getCategoryStore(
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->get('v2/user/listInventory');

        $this->handleFailedResponse($response);

        return $response->json('data');
    }
}
