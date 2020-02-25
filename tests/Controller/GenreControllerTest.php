<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\AbstractBrowser;
use Symfony\Component\HttpFoundation\JsonResponse;

class GenreControllerTest extends WebTestCase
{
    private AbstractBrowser $client;

    protected function setUp()
    {
        $this->client = static::createClient();
    }

    public function testIndex()
    {
        $this->client->request('GET', '/genres/');

        $this->assertInstanceOf(
            JsonResponse::class,
            $this->client->getResponse()
        );
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testIndexPaginationParameterDoesNotBreakRequest()
    {
        $this->client->request('GET', '/genres/123?page=2');

        $this->assertInstanceOf(
            JsonResponse::class,
            $this->client->getResponse()
        );
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testShow()
    {
        $this->client->request('GET', '/genres/123');

        $this->assertInstanceOf(
            JsonResponse::class,
            $this->client->getResponse()
        );
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }
}
