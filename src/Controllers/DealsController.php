<?php
namespace App\Controllers;

use App\Models\Operator;
use App\Utils\Distributor;

class DealsController
{
    public function index()
    {
        try {
            $operators = Operator::getAll();
            $deals = ['DEAL' => 60];

            Distributor::distributeDeals($operators, $deals);

            require_once __DIR__ . '/../Views/deals_distribution.php';

        } catch (\Exception $e) {
            error_log($e->getMessage());
            echo "Произошла ошибка при распределении сделок.";
        }
    }
}
?>
