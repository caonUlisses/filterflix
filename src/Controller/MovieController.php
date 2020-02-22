<?php

namespace App\Controller;

use App\Data\DTO\Movie;
use Symfony\Component\HttpFoundation\JsonResponse;

class MovieController
{
    public function index()
    {
        $movie = new Movie("Title");
        return new JsonResponse(['status' => $movie]);
    }
}
