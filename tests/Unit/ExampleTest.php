<?php

namespace Tests\Unit;

use Carbon\Carbon;
use DTApi\Helpers\TeHelper;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testWillExpireAt()
    {
        $dueTime = '2023-01-01 12:00:00';
        $createdAt = '2022-12-31 12:00:00';
        $result = TeHelper::willExpireAt($dueTime, $createdAt);
        $resultCarbon = Carbon::parse($result);
        $this->assertInstanceOf(Carbon::class, $resultCarbon);
    }
}
