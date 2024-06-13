<?php
namespace App\Utils;

class Distributor
{
    public static function distributeDeals(array &$operators, array &$deals): void
    {
        $totalDeals = $deals['DEAL'];
        $operatorCount = count($operators);

        $baseDealsPerOperator = intdiv($totalDeals, $operatorCount);
        $remainingDeals = $totalDeals % $operatorCount;

        foreach ($operators as &$count) {
            $count += $baseDealsPerOperator;
        }

        $operatorKeys = array_keys($operators);

                foreach ($operatorKeys as $key) {
            if ($remainingDeals > 0) {
                $operators[$key]++;
                $remainingDeals--;
            } else {
                break;
            }
        }
    }
}
?>
