<?php
use PHPUnit\Framework\TestCase;
use App\Utils\Distributor;

class DistributorTest extends TestCase
{
    public function testDistributeDeals()
    {
        $operators = [
            107 => 0,
            204 => 0,
            // ...
        ];
        $deals = ['DEAL' => 56];

        Distributor::distributeDeals($operators, $deals);

        $this->assertEquals(0, $deals['DEAL']);
    }
}



