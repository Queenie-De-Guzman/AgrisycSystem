<?php


namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\infoModel;

class OrientalDashboardController extends BaseController
{

    
    private $user;
    private $info;

    public function __construct()
    {
   
        $this->user = new \App\Models\RegModel();
        $this->info = new \App\Models\infoModel();

    }
    public function OrMinForms()
    {
    if (!session()->get('isLoggedIn')) {
        return redirect()->to('/logins');
    
    } 
    $userId = session()->get('user_id');
    $userId= 35;
    $data['info'] = $this->info->get($userId);
    return view('userfol/dashboard');

    }


}
