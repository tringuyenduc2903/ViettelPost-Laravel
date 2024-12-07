<?php

namespace TriNguyenDuc\ViettelPost\ViettelPost;

use Exception;
use Illuminate\Http\Client\ConnectionException;

trait Extend
{
    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function getLinkPrint(
        array $data,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->post('v2/order/encryptLinkPrint', $data);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }
}
