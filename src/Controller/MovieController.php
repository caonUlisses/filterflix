<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class MovieController
{
    public function index()
    {
        return new JsonResponse(['status' => 'OK']);
    }
}
