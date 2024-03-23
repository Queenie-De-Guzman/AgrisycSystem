<?php

namespace App\Controllers;

use App\Models\RegModel;
use App\Models\infoModel;
use App\Controllers\BaseController;


class AdminController extends BaseController
{

    private $user;
    private $info;


    public function __construct()
    {
        $this->user = new \App\Models\RegModel();
        $this->info = new \App\Models\infoModel();
    }

    public function OrMinDash()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('Province/OrientalMindoro/OrMinDash');
        }
    }







  public function OrMinForms()
    {

        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } 
        $userId = session()->get('user_id');
        $userId= 35;
        $data = [
            'info' => $this->info->where('user_id', $userId)->findAll()
        ];
        return view('Province/OrientalMindoro/OrMinForms', $data);



    
    }
     
    public function Ormin()
    {
        $userId = session()->get('user_id');
        

        // Validate the form data
        $validation = $this->validate([
            'names' => 'required',
            'location' => 'required',
            'cans' => 'required',
            'date' => 'required',
            'area' => 'required',
            'typhoon' => 'required',
            'heavy_rains' => 'required',
            'total_damages' => 'required',
            'cans_damages' => 'required',
            'standing_crop' => 'required',
            'transplate_date' => 'required',
            'expected_date' => 'required',
            'expected_area' => 'required',
            'expected_volumn' => 'required',
          
        ]);

        if (!$validation) {
            // Validation failed, return to the form with errors
            return view('Province/OrientalMindoro/OrMinForms', ['validation' => $this->validator]);
        }

        // If validation passes, insert the data into the database
        $this->info->save([
            'names' => $this->request->getPost('names'),
            'location' => $this->request->getPost('location'),
            'cans' => $this->request->getPost('cans'),
            'date' => $this->request->getPost('date'),
            'area' => $this->request->getPost('area'),
            'typhoon' => $this->request->getPost('typhoon'),
            'heavy_rains' => $this->request->getPost('heavy_rains'),
            'total_damages' => $this->request->getPost('total_damages'),
            'cans_damages' => $this->request->getPost('cans_damages'),
            'standing_crop' => $this->request->getPost('standing_crop'),
            'transplate_date' => $this->request->getPost('transplate_date'),
            'expected_date' => $this->request->getPost('expected_date'),
            'expected_area' => $this->request->getPost('expected_area'),
            'expected_volumn' => $this->request->getPost('expected_volumn'),
            'user_id' => $userId,
          

        ]);

        // Redirect to a success page or display a success message
        return redirect()->to('/OrMinForms')->with('success', 'Field added successfully');
    }

    
    public function OcciDash()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('Province/OccidentalMindoro/OcciDash');
        }
    }
  public function OcciForms()
    {

        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } 
        $userId = session()->get('user_id');
         $userId= 35;
        $data = [
            'info' => $this->info->where('user_id', $userId)->findAll()
        ];
        return view('Province/OccidentalMindoro/OcciForms', $data);



    
    }
     
    public function Occi()
    {
        $userId = session()->get('user_id');
        

        // Validate the form data
        $validation = $this->validate([
            'names' => 'required',
            'location' => 'required',
            'cans' => 'required',
            'date' => 'required',
            'area' => 'required',
            'typhoon' => 'required',
            'heavy_rains' => 'required',
            'total_damages' => 'required',
            'cans_damages' => 'required',
            'standing_crop' => 'required',
            'transplate_date' => 'required',
            'expected_date' => 'required',
            'expected_area' => 'required',
            'expected_volumn' => 'required',
          
        ]);

        if (!$validation) {
            // Validation failed, return to the form with errors
            return view('Province/OccidentalMindoro/OcciForms', ['validation' => $this->validator]);
        }

        // If validation passes, insert the data into the database
        $this->info->save([
            'names' => $this->request->getPost('names'),
            'location' => $this->request->getPost('location'),
            'cans' => $this->request->getPost('cans'),
            'date' => $this->request->getPost('date'),
            'area' => $this->request->getPost('area'),
            'typhoon' => $this->request->getPost('typhoon'),
            'heavy_rains' => $this->request->getPost('heavy_rains'),
            'total_damages' => $this->request->getPost('total_damages'),
            'cans_damages' => $this->request->getPost('cans_damages'),
            'standing_crop' => $this->request->getPost('standing_crop'),
            'transplate_date' => $this->request->getPost('transplate_date'),
            'expected_date' => $this->request->getPost('expected_date'),
            'expected_area' => $this->request->getPost('expected_area'),
            'expected_volumn' => $this->request->getPost('expected_volumn'),
            'user_id' => $userId,
          

        ]);

        // Redirect to a success page or display a success message
        return redirect()->to('/OcciForms')->with('success', 'Field added successfully');
    }
    
    public function RomblonDash()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('Province/Romblon/RomblonDash');
        }
    }
  public function RomblonForm()
    {

        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } 
        $userId = session()->get('user_id');
        $userId= 38;
        $data = [
            'info' => $this->info->where('user_id', $userId)->findAll()
        ];
        return view('Province/Romblon/RomblonForm', $data);



    
    }
     
    public function Romblon()
    {
        $userId = session()->get('user_id');
        

        // Validate the form data
        $validation = $this->validate([
            'names' => 'required',
            'location' => 'required',
            'cans' => 'required',
            'date' => 'required',
            'area' => 'required',
            'typhoon' => 'required',
            'heavy_rains' => 'required',
            'total_damages' => 'required',
            'cans_damages' => 'required',
            'standing_crop' => 'required',
            'transplate_date' => 'required',
            'expected_date' => 'required',
            'expected_area' => 'required',
            'expected_volumn' => 'required',
          
        ]);

        if (!$validation) {
            // Validation failed, return to the form with errors
            return view('Province/Romblon/RomblonForm', ['validation' => $this->validator]);
        }

        // If validation passes, insert the data into the database
        $this->info->save([
            'names' => $this->request->getPost('names'),
            'location' => $this->request->getPost('location'),
            'cans' => $this->request->getPost('cans'),
            'date' => $this->request->getPost('date'),
            'area' => $this->request->getPost('area'),
            'typhoon' => $this->request->getPost('typhoon'),
            'heavy_rains' => $this->request->getPost('heavy_rains'),
            'total_damages' => $this->request->getPost('total_damages'),
            'cans_damages' => $this->request->getPost('cans_damages'),
            'standing_crop' => $this->request->getPost('standing_crop'),
            'transplate_date' => $this->request->getPost('transplate_date'),
            'expected_date' => $this->request->getPost('expected_date'),
            'expected_area' => $this->request->getPost('expected_area'),
            'expected_volumn' => $this->request->getPost('expected_volumn'),
            'user_id' => $userId,
          

        ]);

        // Redirect to a success page or display a success message
        return redirect()->to('/RomblonForm')->with('success', 'Field added successfully');
    }
    
    
    public function PalawanDash()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('Province/Palawan/PalawanDash');
        }
    }
  public function PalawanForm()
    {

        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } 
        $userId = session()->get('user_id');
        $userId= 39;
        $data = [
            'info' => $this->info->where('user_id', $userId)->findAll()
        ];
        return view('Province/Palawan/PalawanForm', $data);



    
    }
     
    public function Palawan()
    {
        $userId = session()->get('user_id');
        

        // Validate the form data
        $validation = $this->validate([
            'names' => 'required',
            'location' => 'required',
            'cans' => 'required',
            'date' => 'required',
            'area' => 'required',
            'typhoon' => 'required',
            'heavy_rains' => 'required',
            'total_damages' => 'required',
            'cans_damages' => 'required',
            'standing_crop' => 'required',
            'transplate_date' => 'required',
            'expected_date' => 'required',
            'expected_area' => 'required',
            'expected_volumn' => 'required',
          
        ]);

        if (!$validation) {
            // Validation failed, return to the form with errors
            return view('Province/Palawan/PalawanForm', ['validation' => $this->validator]);
        }

        // If validation passes, insert the data into the database
        $this->info->save([
            'names' => $this->request->getPost('names'),
            'location' => $this->request->getPost('location'),
            'cans' => $this->request->getPost('cans'),
            'date' => $this->request->getPost('date'),
            'area' => $this->request->getPost('area'),
            'typhoon' => $this->request->getPost('typhoon'),
            'heavy_rains' => $this->request->getPost('heavy_rains'),
            'total_damages' => $this->request->getPost('total_damages'),
            'cans_damages' => $this->request->getPost('cans_damages'),
            'standing_crop' => $this->request->getPost('standing_crop'),
            'transplate_date' => $this->request->getPost('transplate_date'),
            'expected_date' => $this->request->getPost('expected_date'),
            'expected_area' => $this->request->getPost('expected_area'),
            'expected_volumn' => $this->request->getPost('expected_volumn'),
            'user_id' => $userId,
          

        ]);

        // Redirect to a success page or display a success message
        return redirect()->to('/PalawanForm')->with('success', 'Field added successfully');
    }
    
     
    public function MarinduqueDash()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('Province/Marinduque/MarinduqueDash');
        }
    }
  public function MarinduqueForm()
    {

        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } 
        $userId = session()->get('user_id');
        $userId= 37;
        $data = [
            'info' => $this->info->where('user_id', $userId)->findAll()
        ];
        return view('Province/Marinduque/MarinduqueForm', $data);



    
    }
     
    public function Marinduque()
    {
        $userId = session()->get('user_id');
        

        // Validate the form data
        $validation = $this->validate([
            'names' => 'required',
            'location' => 'required',
            'cans' => 'required',
            'date' => 'required',
            'area' => 'required',
            'typhoon' => 'required',
            'heavy_rains' => 'required',
            'total_damages' => 'required',
            'cans_damages' => 'required',
            'standing_crop' => 'required',
            'transplate_date' => 'required',
            'expected_date' => 'required',
            'expected_area' => 'required',
            'expected_volumn' => 'required',
          
        ]);

        if (!$validation) {
            // Validation failed, return to the form with errors
            return view('Province/Marinduque/MarinduqueForm', ['validation' => $this->validator]);
        }

        // If validation passes, insert the data into the database
        $this->info->save([
            'names' => $this->request->getPost('names'),
            'location' => $this->request->getPost('location'),
            'cans' => $this->request->getPost('cans'),
            'date' => $this->request->getPost('date'),
            'area' => $this->request->getPost('area'),
            'typhoon' => $this->request->getPost('typhoon'),
            'heavy_rains' => $this->request->getPost('heavy_rains'),
            'total_damages' => $this->request->getPost('total_damages'),
            'cans_damages' => $this->request->getPost('cans_damages'),
            'standing_crop' => $this->request->getPost('standing_crop'),
            'transplate_date' => $this->request->getPost('transplate_date'),
            'expected_date' => $this->request->getPost('expected_date'),
            'expected_area' => $this->request->getPost('expected_area'),
            'expected_volumn' => $this->request->getPost('expected_volumn'),
            'user_id' => $userId,
          

        ]);

        // Redirect to a success page or display a success message
        return redirect()->to('/MarinduqueForm')->with('success', 'Field added successfully');
    }
    

    public function ChangePass()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('adminfol/ChangePass');
        }
    }
    public function Form()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('adminfol/Form');
        }
    }
     
    public function Table()
    {
        
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } 
        $userId = session()->get('user_id');

        $data = [
            'info' => $this->info->where('user_id', $userId)->findAll()
        ];
        return view('adminfol/Table', $data);

    }

    public function AllFarmers()
    {
        $userId = session()->get('user_id');
        

        // Validate the form data
        $validation = $this->validate([
            'names' => 'required',
            'location' => 'required',
            'cans' => 'required',
            'date' => 'required',
            'area' => 'required',
            'typhoon' => 'required',
            'heavy_rains' => 'required',
            'total_damages' => 'required',
            'cans_damages' => 'required',
            'standing_crop' => 'required',
            'transplate_date' => 'required',
            'expected_date' => 'required',
            'expected_area' => 'required',
            'expected_volumn' => 'required',
          
        ]);

        if (!$validation) {
            // Validation failed, return to the form with errors
            return view('adminfol/Table', ['validation' => $this->validator]);
        }

        // If validation passes, insert the data into the database
        $this->info->save([
            'names' => $this->request->getPost('names'),
            'location' => $this->request->getPost('location'),
            'cans' => $this->request->getPost('cans'),
            'date' => $this->request->getPost('date'),
            'area' => $this->request->getPost('area'),
            'typhoon' => $this->request->getPost('typhoon'),
            'heavy_rains' => $this->request->getPost('heavy_rains'),
            'total_damages' => $this->request->getPost('total_damages'),
            'cans_damages' => $this->request->getPost('cans_damages'),
            'standing_crop' => $this->request->getPost('standing_crop'),
            'transplate_date' => $this->request->getPost('transplate_date'),
            'expected_date' => $this->request->getPost('expected_date'),
            'expected_area' => $this->request->getPost('expected_area'),
            'expected_volumn' => $this->request->getPost('expected_volumn'),
            'user_id' => $userId,
          

        ]);

        // Redirect to a success page or display a success message
        return redirect()->to('/Table')->with('success', 'Field added successfully');
    }
   
    public function Tables()
    {
        
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } 
        $userId = session()->get('user_id');

        $data = [
            'user' => $this->user->findAll()
        ];
        return view('adminfol/Tables', $data);

    }
   

}
