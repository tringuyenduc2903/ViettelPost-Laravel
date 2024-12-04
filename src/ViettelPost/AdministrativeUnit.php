<?php

namespace TriNguyenDuc\ViettelPost\ViettelPost;

use Exception;
use Illuminate\Http\Client\ConnectionException;

trait AdministrativeUnit
{
    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function getListProvince(
        int $province_id = -1,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->get('v2/categories/listProvinceById', [
                'provinceId' => $province_id,
            ]);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }
}
