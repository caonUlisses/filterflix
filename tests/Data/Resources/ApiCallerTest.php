<?php


namespace App\Tests\Data\Resources;


use App\Data\DTO\Param;
use App\Data\Resources\ApiCaller;
use PHPUnit\Framework\TestCase;

class ApiCallerTest extends TestCase
{
    public function testCallAnApi()
    {
        $caller = new ApiCaller();
        $call = $caller->call('/movies');

        $this->assertIsArray($call);
    }

    public function testGetErrorFromNonExistent()
    {
        $caller = new ApiCaller();
        $call = $caller->call('www.www.www');

        $this->assertEquals(34, $call['status_code']);
    }
}
