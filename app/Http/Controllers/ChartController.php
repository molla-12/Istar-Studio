<?php

namespace App\Http\Controllers;

use App\Charts\GenderChart;
use App\Charts\MonthlyUsersChart;
use App\Charts\SchecduleServiceChart;
use App\Charts\ShiftClassChart;

class ChartController extends Controller
{
    public function index(MonthlyUsersChart $chart, GenderChart $chartT, ShiftClassChart $chartTT, SchecduleServiceChart $chartTTT)
    {
        return view('Dashboared',
            [
                'chart' => $chart->build(),
                'chartT' => $chartT->build(),
                'chartTT' => $chartTT->build(),
                'chartTTT' => $chartTTT->build(),
            ]);
    }

}