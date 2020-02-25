<?php


namespace App\Data\Resources;

use App\Data\Resources\External\TMDb\Call;

class ApiCaller
{
    public static function call(string $endpoint, string $queryParams = ''): array
    {
        $caller = new ApiRoute($endpoint, $queryParams);

        return ApiCaller::get($caller->getURL());
    }

    private static function get(string $url): array
    {
        try {
            return (array)Call::call($url);
        } catch (\Exception $e) {
            return ['error' => 'An error occurred', 'message' => $e->getMessage()];
        }
    }
}
