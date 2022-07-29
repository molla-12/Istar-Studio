<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class GenderChart
{
    protected $chartT;

    public function __construct(LarapexChart $chart)
    {
        $this->chartT = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\pieChart
    {
        return $this->chartT->pieChart()
            ->setTitle('Gender Distribution')
            ->addData([
                \App\Models\AllUser::where('sex', '=', 'male')->count(),
                \App\Models\AllUser::where('sex', '=', 'female')->count(),
            ])
            ->setColors(['#ffc63b', '#ff6384'])
            ->setLabels(['Male', 'Female']);
    }
}