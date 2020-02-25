<?php


namespace App\Controller;

use App\Controller\Util\ApiCallerController;
use App\Data\Resources\ApiCaller;
use App\Service\ParamService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class GenreController extends ApiCallerController
{
    public function index(ParamService $params): JsonResponse
    {
        return $this->call('genre/movie/list', $params);
    }

    public function show(Request $request): JsonResponse
    {
        $id = (int)$request->attributes->get('id');

        $genres = ApiCaller::call("genre/movie/list")['genres'] ?? [];

        $genre = array_filter($genres, function ($genre) use ($id) {
            return $genre->id === $id;
        });

        return JsonResponse::create($genre);
    }
}
