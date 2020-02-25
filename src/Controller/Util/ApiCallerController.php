<?php


namespace App\Controller\Util;

use App\Data\Resources\ApiCaller;
use App\Service\ParamService;
use Symfony\Component\HttpFoundation\JsonResponse;

abstract class ApiCallerController
{
    final protected function call(string $endpoint, ?ParamService $params = null): JsonResponse
    {
        $paramsString = $params
            ? $params
                ->getParam()
                ->buildQueryString()
            : "";

        return JsonResponse::create(
            ApiCaller::call($endpoint, $paramsString)
        );
    }
}
