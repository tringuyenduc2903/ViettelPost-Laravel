<?php

namespace TriNguyenDuc\ViettelPost\ViettelPost;

use Exception;
use Illuminate\Http\Client\ConnectionException;

trait PriceAndBillLading
{
    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function createBill(
        array $data,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->post('v2/order/createOrder', $data);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function updateBillStatus(
        array $data,
        ?string $api_url = null,
        ?string $token = null
    ): null {
        $response = $this
            ->getRequest($api_url, $token)
            ->post('v2/order/UpdateOrder', $data);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function pricing(
        array $data,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->post('v2/order/getPrice', $data);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function pricingAllMatchingServices(
        array $data,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->post('v2/order/getPriceAll', $data);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function pricingWithTextAddress(
        array $data,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->post('v2/order/getPriceNlp', $data);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function pricingAllMatchingServicesWithTextAddress(
        array $data,
        ?string $api_url = null,
        ?string $token = null
    ): array {
        $response = $this
            ->getRequest($api_url, $token)
            ->post('v2/order/getPriceAllNlp', $data);

        $this->handleFailedResponse($response);

        return $response->json('data');
    }
}
