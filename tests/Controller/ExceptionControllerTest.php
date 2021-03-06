<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\AbstractBrowser;
use Symfony\Component\HttpFoundation\JsonResponse;

class ExceptionControllerTest extends WebTestCase
{
    private AbstractBrowser $client;
    private array $response = [
        'message' => 'No resource found. Check your parameters and endpoint.',
        'docs' => 'View the complete API docs at https://github.com/caonUlisses/filterflix/wiki',
        'status' => 404,
    ];

    protected function setUp()
    {
        $this->client = static::createClient();
    }

    public function testIndex()
    {
        $this->client->request('GET', '/notfound404');
        $response = JsonResponse::create($this->response)->getContent();

        $this->assertInstanceOf(
            JsonResponse::class,
            $this->client->getResponse()
        );
        $this->assertEquals(404, $this->client->getResponse()->getStatusCode());
        $this->assertJson($this->client->getResponse()->getContent());

        $this->assertEquals($response, $this->client->getResponse()->getContent());
    }
}
