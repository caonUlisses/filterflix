<?php

namespace App\Controller;

use App\Controller\Util\ApiCallerController;
use App\Service\ParamService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MovieController extends ApiCallerController
{
    public function upcoming(ParamService $params): JsonResponse
    {
        return $this->call('movie/popular', $params);
    }

    public function topRated(ParamService $params): JsonResponse
    {
        return $this->call('movie/top_rated', $params);
    }

    public function show(Request $request): JsonResponse
    {
        $id = $request->attributes->get('id');

        return $this->call("movie/{$id}");
    }
}
