<?php

namespace App\Tests\Service;

use App\Service\ParamService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ParamServiceTest extends KernelTestCase
{
    private ParamService $service;

    protected function setUp()
    {
        self::bootKernel();
        $this->service = self::$kernel->getContainer()->get('test.App\Service\ParamService');
    }

    protected function tearDown(): void
    {
        self::ensureKernelShutdown();
    }

    /** @test */
    public function itShouldPassTheRightPage()
    {
        $page = rand(0, 100);
        $request = Request::create("/?&page={$page}", 'GET');
        $this->service->setRequest($request);

        $queryString = $this->service->getParam()->buildQueryString();
        $this->assertEquals("&page={$page}", $queryString);
    }
}
