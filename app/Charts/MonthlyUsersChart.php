<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Service Distribution')
            ->setSubtitle('All Service Destributions')
            ->addData([
                \App\Models\AllUser::where('servicetype', '=', 'Book A Trip')->count(),
                \App\Models\AllUser::where('servicetype', '=', 'Delivery Service')->count(),
                \App\Models\AllUser::where('servicetype', '=', 'Package Delivery')->count(),
            ])
            ->setLabels(['Book A Trip', 'Delivery Service', 'Package Delivery']);
    }

}