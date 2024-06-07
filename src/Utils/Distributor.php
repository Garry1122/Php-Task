<?php
namespace App\Utils;

class Distributor
{
    public static function distributeDeals(array &$operators, array &$deals): void
    {
        $totalDeals = $deals['DEAL'];
        $totalOperators = count($operators);
        $dealsPerOperator = intdiv($totalDeals, $totalOperators);

        foreach ($operators as $operator => $count) {
            $operators[$operator] += $dealsPerOperator;
            $deals['DEAL'] -= $dealsPerOperator;
        }

        foreach ($operators as $operator => $count) {
            if ($deals['DEAL'] > 0) {
                $operators[$operator]++;
                $deals['DEAL']--;
            }
        }
    }
}


