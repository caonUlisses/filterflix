<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class ExceptionController
{
    public function __invoke()
    {
        return JsonResponse::create([
            'message' => 'No resource found. Check your parameters and endpoint.',
            'docs' => 'View the complete API docs at https://github.com/caonUlisses/filterflix/wiki',
            'status' => 404,
        ]);
    }
}
