<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class SchecduleServiceChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chartTTT = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chartTTT->donutChart()
            ->setTitle('User Location Destribution')
            ->setSubtitle('Based on Location of user.')
            ->addData([
                \App\Models\AllUser::where('location', '=', 'Addis Ababa')->count(),
                \App\Models\AllUser::where('location', '=', 'Bahirdar')->count(),
                \App\Models\AllUser::where('location', '=', 'Hawassa')->count(),

            ])
            ->setLabels(['Addis Ababa', 'Bahir dar', 'Hawassa']);
    }
}