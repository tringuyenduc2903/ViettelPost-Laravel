<?php

namespace TriNguyenDuc\ViettelPost\ViettelPost;

use Exception;
use Illuminate\Http\Client\ConnectionException;

trait PostOfficeAndService
{
    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function getListPostOffice(
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->get('v2/categories/listBuuCucVTP');

        $this->handleFailedResponse($response);

        return $response->json('data');
    }

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function getListService(
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->post('v2/categories/listService', [
                'TYPE' => 2,
            ]);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function getListServiceExtend(
        string $service_code,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->get('v2/categories/listServiceExtra', [
                'serviceCode' => $service_code,
            ]);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }
}
