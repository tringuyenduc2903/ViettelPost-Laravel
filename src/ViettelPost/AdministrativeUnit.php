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
    public function getListProvinceCodes(
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

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function getListDistrictCodes(
        int $province_id = -1,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->get('v2/categories/listDistrict', [
                'provinceId' => $province_id,
            ]);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function getListWardCodes(
        int $district_id = -1,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->get('v2/categories/listWards', [
                'districtId' => $district_id,
            ]);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }
}
