<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\infoModel;

class ReportController extends BaseController
{
    public function index()
    {
        $infoModel = new infoModel();
        $data['reports'] = $infoModel->findAll(); // Fetch all reports

        // Prepare data for the chart: Count of reports by location
        $locationCounts = $this->countOccurrences($data['reports'], 'location');

        // Prepare data for the chart: Count of reports by typhoon
        $typhoonCounts = $this->countOccurrences($data['reports'], 'typhoon');

        // Prepare data for the chart: Total damages by location
        $totalDamagesByLocation = $this->calculateTotalDamages($data['reports']);

        // Prepare data for the chart: Average standing crop by location
        $averageStandingCropByLocation = $this->calculateAverageStandingCrop($data['reports']);

        $data['info'] = [
            'locationCounts' => $locationCounts,
            'typhoonCounts' => $typhoonCounts,
            'totalDamagesByLocation' => $totalDamagesByLocation,
            'averageStandingCropByLocation' => $averageStandingCropByLocation
        ];

        // Pass $data to the view
        return view('report', $data);
    }

    private function countOccurrences($reports, $field)
    {
        $counts = [];
        foreach ($reports as $report) {
            $value = $report[$field];
            if (!isset($counts[$value])) {
                $counts[$value] = 0;
            }
            $counts[$value]++;
        }
        return $counts;
    }

    private function calculateTotalDamages($reports)
    {
        $totalDamagesByLocation = [];
        foreach ($reports as $report) {
            $location = $report['location'];
            $totalDamages = $report['total_damages'];
            if (!isset($totalDamagesByLocation[$location])) {
                $totalDamagesByLocation[$location] = 0;
            }
            $totalDamagesByLocation[$location] += $totalDamages;
        }
        return $totalDamagesByLocation;
    }

    private function calculateAverageStandingCrop($reports)
    {
        $averageStandingCropByLocation = [];
        foreach ($reports as $report) {
            $location = $report['location'];
            $standingCrop = $report['standing_crop'];
            if (!isset($averageStandingCropByLocation[$location])) {
                $averageStandingCropByLocation[$location] = ['sum' => 0, 'count' => 0];
            }
            $averageStandingCropByLocation[$location]['sum'] += $standingCrop;
            $averageStandingCropByLocation[$location]['count']++;
        }
        foreach ($averageStandingCropByLocation as $location => &$data) {
            if ($data['count'] > 0) {
                $data = $data['sum'] / $data['count'];
            } else {
                $data = 0;
            }
        }
        return $averageStandingCropByLocation;
    }
}
