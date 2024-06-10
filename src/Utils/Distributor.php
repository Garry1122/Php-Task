<?php
namespace App\Utils;

class Distributor
{
    public static function distributeDeals(array &$operators, array &$deals): void
    {
        $totalDeals = $deals['DEAL'];

        asort($operators);

        while ($totalDeals > 0) {
            foreach ($operators as $operator => $count) {
                if ($totalDeals > 0) {
                    $operators[$operator]++;
                    $deals['DEAL']--;
                    $totalDeals--;
                }
            }
        }
    }
}
