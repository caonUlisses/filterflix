<?php

namespace App\Controller;

use App\Data\DTO\Movie;
use Symfony\Component\HttpFoundation\JsonResponse;

class MovieController
{
    /**
     * List the rewards of the specified user.
     *
     * This call takes into account all confirmed awards, but not pending or refused awards.
     *
     * @Route("/api/{user}/rewards", methods={"GET"})
     * @SWG\Response(
     *     response=200,
     *     description="Returns the rewards of an user",
     *     @SWG\Schema(
     *         type="array",
     *         @SWG\Items(ref=@Model(type=Reward::class, groups={"full"}))
     *     )
     * )
     * @SWG\Parameter(
     *     name="order",
     *     in="query",
     *     type="string",
     *     description="The field used to order rewards"
     * )
     * @SWG\Tag(name="rewards")
     * @Security(name="Bearer")
     */
    public function index()
    {
        $movie = new Movie("Title");
        return new JsonResponse(['status' => $movie]);
    }
}
