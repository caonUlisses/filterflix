<?php


namespace App\Controller;

use App\Controller\Util\ApiCallerController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class VideoController extends ApiCallerController
{
    public function index(Request $request): JsonResponse
    {
        $id = $request->attributes->get('id');

        return $this->call("movie/{$id}/videos");
    }
}
