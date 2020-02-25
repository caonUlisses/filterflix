<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class DocController
{
    public function index()
    {
        return JsonResponse::create([
           'docs' => 'View the complete API docs at https://github.com/caonUlisses/filterflix/wiki'
        ]);
    }
}
