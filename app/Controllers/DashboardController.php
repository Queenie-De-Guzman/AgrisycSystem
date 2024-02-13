<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\infoModel;

class DashboardController extends BaseController
{
    public function damage()
    {
        // Load the model
        $infoModel = new infoModel();

        // Fetch data from the database
        $totalDamage = $infoModel->selectSum('total_damages')->first()['total_damages'];
        $numFarmers = $infoModel->countAll();

        // Pass the data to the view
        $data = [
            'totaldamages' => $totalDamage,
            'numFarmers' => $numFarmers,
            // Add other data variables here
        ];

        // Render the view with the data
        return view('dashboard', $data);
    }
}
