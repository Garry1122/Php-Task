<?php
namespace App\Controllers;

use App\Models\Operator;
use App\Utils\Distributor;

class DealsController
{
    public function index()
    {
        $operators = Operator::getAll();
        $deals = ['DEAL' => 56];

        Distributor::distributeDeals($operators, $deals);

        include __DIR__ . '/../Views/deals_distribution.php';
    }
}

