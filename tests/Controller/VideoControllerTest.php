<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\AbstractBrowser;
use Symfony\Component\HttpFoundation\JsonResponse;

class VideoControllerTest extends WebTestCase
{
    private AbstractBrowser $client;

    protected function setUp()
    {
        $this->client = static::createClient();
    }

    public function testIndex()
    {
        $this->client->request('GET', '/videos/123');

        $this->assertInstanceOf(
            JsonResponse::class,
            $this->client->getResponse()
        );
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testIndexPaginationParameterDoesNotBreakRequest()
    {
        $this->client->request('GET', '/videos/123?page=2');

        $this->assertInstanceOf(
            JsonResponse::class,
            $this->client->getResponse()
        );
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }
}
