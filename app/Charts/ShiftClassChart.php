<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ShiftClassChart
{
    protected $chartTT;

    public function __construct(LarapexChart $chart)
    {
        $this->chartTT = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chartTT->donutChart()
            ->setTitle('Age')
            ->setSubtitle('')
            ->addData([
                \App\Models\AllUser::where('age', '>=', 18)->count(),
                \App\Models\AllUser::where('age', '<=', 18)->count(),
            ])
            ->setLabels(['less than 18', 'above 18']);
    }
}