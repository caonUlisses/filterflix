<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\AbstractBrowser;
use Symfony\Component\HttpFoundation\JsonResponse;

class MovieControllerTest extends WebTestCase
{
    private AbstractBrowser $client;

    protected function setUp()
    {
        $this->client = static::createClient();
    }

    public function testUpcoming()
    {
        $this->client->request('GET', '/movies/upcoming');

        $this->assertInstanceOf(
            JsonResponse::class,
            $this->client->getResponse()
        );
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testUpcomingPagination()
    {
        $this->client->request('GET', '/movies/toprated?page=2');

        $page = json_decode($this->client->getResponse()->getContent())->page;
        $this->assertEquals(2, $page);
    }

    public function testTopRated()
    {
        $this->client->request('GET', '/movies/toprated');

        $this->assertInstanceOf(
            JsonResponse::class,
            $this->client->getResponse()
        );
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testTopRatedPagination()
    {
        $this->client->request('GET', '/movies/toprated?page=2');

        $page = json_decode($this->client->getResponse()->getContent())->page;
        $this->assertEquals(2, $page);
    }

    public function testShow()
    {
        $this->client->request('GET', '/movies/123');

        $this->assertInstanceOf(
            JsonResponse::class,
            $this->client->getResponse()
        );
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }
}
